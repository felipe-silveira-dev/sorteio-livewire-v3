<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    // if( app()->isLocal()) {
    //     Auth::loginUsingId(1);
    // }
    return view('welcome');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/github/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('github.login');
 
Route::get('/github/callback', function () {
    $user = Socialite::driver('github')->user();
 
    $newUser = User::updateOrCreate([
        'email' => $user->getEmail(),
    ], [
        'name' => $user->getName(),
        'avatar' => $user->getAvatar(),
        'github_user' => $user->getNickname(),
        'password' => 'password',
    ]);

    Auth::login($newUser);

    return redirect()->route('dashboard');
});

require __DIR__.'/auth.php';

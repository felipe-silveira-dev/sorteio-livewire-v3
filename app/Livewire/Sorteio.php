<?php

namespace App\Livewire;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sorteio extends Component
{
    public Candidate $winner;

    public function render():View
    {
        return view('livewire.sorteio');
    }

    public function run(): void
    {
        $this->winner = Candidate::query()->inRandomOrder()->first();
    }
}

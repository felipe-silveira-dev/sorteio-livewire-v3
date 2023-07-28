<?php

namespace App\Livewire;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Sorteio extends Component
{
    public Candidate $winner;

    public function mount(): void
    {
        // sleep(1);
    }

    public function placeholder(): string
    {
        return <<<HTML
                <div class="flex flex-col items-center justify-center h-full">
                    Sorteando...
                </div>
            HTML;
    }

    public function render():View
    {
        return view('livewire.sorteio');
    }

    #[On('CandidateCreated')]
    public function run(): void
    {
        $candidates = Candidate::all();

        foreach($candidates as $candidate) {
            $this->stream('winner', $candidate->name, true);
            usleep(5000);
        }

        $this->winner = Candidate::query()->inRandomOrder()->first();

        $this->js('confetti()');
    }
}

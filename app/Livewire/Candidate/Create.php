<?php

namespace App\Livewire\Candidate;

use App\Livewire\Forms\CandidateCreateForm;
use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public CandidateCreateForm $form; 

    public function render(): View
    {
        return view('livewire.candidate.create');
    }

    public function save()
    {
        $this->form->validate();

        Candidate::query()
            ->create(
                $this->form->all()
            );
        
        $this->dispatch('CandidateCreated');
    }
}

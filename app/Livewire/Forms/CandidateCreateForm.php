<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class CandidateCreateForm extends Form
{
    #[Rule('required|min:3|max:255|unique:candidates,name')]
    public ?string $name;

    #[Rule('required|email')]
    public ?string $email;
    public ?string $github;
}

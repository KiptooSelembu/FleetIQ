<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('components.layouts.pages')]
class Careers extends Component
{
    public function render()
    {
        return view('livewire.pages.careers');
    }
}

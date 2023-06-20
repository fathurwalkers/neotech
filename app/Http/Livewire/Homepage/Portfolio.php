<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.homepage.portfolio')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

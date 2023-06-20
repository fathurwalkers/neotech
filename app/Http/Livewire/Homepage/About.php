<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.homepage.about')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

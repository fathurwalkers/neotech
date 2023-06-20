<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.homepage.navbar')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

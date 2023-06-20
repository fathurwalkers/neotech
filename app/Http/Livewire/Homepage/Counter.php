<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.homepage.counter')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

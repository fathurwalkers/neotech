<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.homepage.index')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

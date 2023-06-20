<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Layanan extends Component
{
    public function render()
    {
        return view('livewire.homepage.layanan')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

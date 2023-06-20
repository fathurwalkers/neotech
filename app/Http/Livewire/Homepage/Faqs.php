<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Faqs extends Component
{
    public function render()
    {
        return view('livewire.homepage.faqs')
        ->extends('layouts.home-layouts')
        ->section('main-content');
    }
}

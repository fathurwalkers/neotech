<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $header_content = "Index Page";
        return view('livewire.index', [
            'header_content' => $header_content
        ])
        ->extends('layouts.dashboard-layout')
        ->section('main-content');
    }
}

<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class HomeLivewire extends Component{
    // Count start from zero
    public $count = 0;
    
    // Increment function
    public function increment(){
        $this->count++;
    }

    // Decrement function
    public function decrement(){
        $this->count--;
    }

    // View extending the App Layouts, so we won't do this on Blade
    public function render(){
        return view('livewire.home.home-livewire')->extends('layouts.app');
    }
}

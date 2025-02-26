<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\ClothingItem;

class HomePage extends Component
{
    public $items;

    public function mount()
    {
        $this->items = ClothingItem::all();
    }

   

    public function render()
    {
        return view('livewire.front.home-page')->layout('components.layouts.mws');
    }
}
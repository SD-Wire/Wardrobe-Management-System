<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\ClothingItem;

class Topbar extends Component
{
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination on search
    }

    public function render()
    {
        $query = ClothingItem::query();

        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%');
        }

        return view('livewire.front.topbar', [
            'items' => $query->paginate(10),
        ])->layout('components.layouts.mws');
    }

    // public function render()
    // {
    //     return view('livewire.front.topbar');
    // }
}

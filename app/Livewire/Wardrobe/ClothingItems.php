<?php

namespace App\Livewire\Wardrobe;

use Livewire\Component;
use App\Models\ClothingItem;
use Illuminate\Support\Facades\Storage;
class ClothingItems extends Component
{
    public $items;
    public function mount(){
        $this->items = ClothingItem::all();
    }

    public function deleteItem($itemId)
{
    $item = ClothingItem::findOrFail($itemId);

    // Delete the image from storage if it exists
    if ($item->image) {
        Storage::disk('public')->delete($item->image);
    }

    // Delete the item from the database
    $item->delete();

    

    // Send success message
    session()->flash('success', 'Item deleted successfully!');
}
    public function render()
    {
        return view('livewire.wardrobe.clothing-items', ['items' => ClothingItem::all()])->layout('components.layouts.base');
    }
}
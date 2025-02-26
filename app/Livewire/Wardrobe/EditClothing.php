<?php

namespace App\Livewire\Wardrobe;

use Livewire\Component;
use App\Models\ClothingItem;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class EditClothing extends Component
{
    use WithFileUploads;

    public $itemId, $name, $category, $description, $image, $imagePreview, $existingImage;

    public function mount($id)
    {
        $item = ClothingItem::findOrFail($id);

        $this->itemId = $item->id;
        $this->name = $item->name;
        $this->category = $item->category;
        $this->description = $item->description;
        $this->existingImage = $item->image ? asset('storage/' . $item->image) : null;
    }

    public function updatedImage()
    {
        if ($this->image) {
            $this->imagePreview = $this->image->temporaryUrl();
        }
    }

    public function updateItem()
    {
        $this->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $item = ClothingItem::findOrFail($this->itemId);

        if ($this->image) {
            $imagePath = $this->image->store('images', 'public');
            $item->image = $imagePath;
        }

        $item->name = $this->name;
        $item->category = $this->category;
        $item->description = $this->description;
        $item->save();

        session()->flash('success', 'Item updated successfully.');
        return redirect()->route('clothing.items');
    }

    public function render()
    {
        return view('livewire.wardrobe.edit-clothing')->layout('components.layouts.base');
    }
}
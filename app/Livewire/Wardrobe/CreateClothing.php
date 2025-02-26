<?php

namespace App\Livewire\Wardrobe;

use Livewire\Component;
use App\Models\ClothingItem;
use Livewire\WithFileUploads;


class CreateClothing extends Component
{
    use WithFileUploads;

    public $name;
    public $category;
    public $description;
    public $image;
    public $imagePreview;

    protected $rules = [
        'name' => 'required|string|max:255',
        'category' => 'required|string',
        'description' => 'required|string',
        'image' => 'required|image|max:2048', // Max 1MB image
    ];
    public function updatedImage()
    {
        // Create a temporary preview URL
        if ($this->image) {
            $this->imagePreview = $this->image->temporaryUrl();
        }
    }
    public function saveItem()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('clothing-items', 'public') : null;

        ClothingItem::create([
            'name' => $this->name,
            'category' => $this->category,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Item saved successfully!');

        // Reset form fields
        $this->reset(['name', 'category', 'description', 'image']);
        return redirect()->route('clothing.items');
    }
    public function render()
    {
        return view('livewire.wardrobe.create-clothing')->layout('components.layouts.base');
    }

  
}
<?php

namespace App\Http\Controllers;

use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    //
    public function saveItem(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string|max:255', // Ensure it's a string
        ]);
        // $savingitem=ClothingItem::create([
        //     'name' => $validated['name'],
        //     'category' => $validated['category'],
        //     'image' => $validated['image'] ?? null,
        //     'description' => $validated['description'],
        // ]);  
        
        dd( $validated );   
    
    }
}
<div>
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="row d-flex">
        <nav class="float-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">New</a></li>
                <li class="breadcrumb-item active">add an item</li>
              
            </ol>
        </nav>   
        @if (session()->has('success'))    
        <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
          @endif
    </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
         

            <!-- Left side columns -->
            <div class="card">
                <div class="container my-4">
                    <h2 class="mb-3">Clothing Item</h2>
                    <form wire:submit.prevent="updateItem">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">Item Name</label>
                                <input type="text" wire:model.defer="name"
                                    class="form-control @error('name') is-invalid  @enderror"
                                    placeholder="Enter item name">
                                @error('name')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                    
                            <div class="col-6 mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select wire:model.defer="category" class="form-select @error('category') is-invalid  @enderror">
                                    <option value="">Select Category</option>
                                    <option value="category 1">Category 1</option>
                                    <option value="category 2">Category 2</option>
                                    <option value="category 3">Category 3</option>
                                </select>
                                @error('category')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" wire:model.defer="description" height="100"
                                    class="form-control @error('description') is-invalid  @enderror"
                                    placeholder="Enter your description here"></textarea>
                                @error('description')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                    
                            <div class="col-6 mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" wire:model="image" class="form-control @error('image') is-invalid @enderror">
                            
                                @error('image')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                            
                                <div class="mt-3">
                                    <p>Current Image:</p>
                                    @if ($existingImage)
                                        <img src="{{ $existingImage }}" class="img-thumbnail" width="100">
                                    @else
                                        <p>No Image Available</p>
                                    @endif
                                </div>
                            
                                @if ($imagePreview)
                                    <div class="mt-3">
                                        <p>New Image Preview:</p>
                                        <img src="{{ $imagePreview }}" class="img-thumbnail" width="100">
                                    </div>
                                @endif
                            </div>
                            
                        </div>
                    
                   
                    
                        <hr class="bg-primary fs-6 pb-1" />
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary float-start">
                                <i class="bi bi-save"></i> Save Changes
                            </button>
                            <a href="{{ url('clothing.items') }}" class="btn btn-secondary float-end">
                                <i class="bi bi-arrow-left"></i> Cancel
                            </a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

</div>
</section>
</div>

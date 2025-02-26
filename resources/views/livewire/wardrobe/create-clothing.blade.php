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
                    {{ session('success') }}
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
                    <form wire:submit.prevent="saveItem">

                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">Item Name</label>
                                <input type="text" wire:model="name"
                                    class="form-control @error('name') is-invalid  @enderror "
                                    placeholder="Enter item name">

                                @error('name')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-3">
                                <label for="category" class="form-label">{{ _('Category') }}</label>
                                <select wire:model="category"
                                    class="form-select @error('category') is-invalid  @enderror">
                                    
                                    @foreach(\App\Enums\ClothingCategory::cases() as $category)
                                    <option value="">Select Clothing</option>
                                    <option value="{{ $category->value }}">{{ $category->name }}</option>
                                @endforeach

                                   
                                </select>
                                @error('category')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="description" class="form-label">{{ _('Description') }}</label>
                                <textarea type="text" id="description" wire:model="description"
                                    class="form-control @error('description') is-invalid  @enderror" placeholder="Enter your descreption here"></textarea>
                                @error('description')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-3">
                                <label for="image" class="form-label">{{ _('Upload Image') }}</label>
                                <input type="file" wire:model="image"
                                    class="form-control @error('image') isinvalid  @enderror">
                                @error('image')
                                    <span class="text-danger font-medium">{{ $message }}</span>
                                @enderror
                                <!-- Show preview if an image is selected -->
                                @if ($imagePreview)
                                    <div class="mt-3">
                                        <p>Image Preview:</p>
                                        <img src="{{ $imagePreview }}" class="img-thumbnail" width="100">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr class="bg-primary fs-6 pb-1" />
                        <div class=" mb-4">
                            <button type="submit" class="btn btn-primary float-start border-radius-circle"><i
                                    class="bi bi-plus"></i>{{ _('save') }}</button>
                            <button type="reset" href="" class="btn btn-secondary float-end"><i
                                    class="bi bi-arrow-counterclockwise"></i>{{ _('reset') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>
</section>
</div>

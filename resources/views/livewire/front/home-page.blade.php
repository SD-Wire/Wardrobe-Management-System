<div>
    
    <livewire:front.topbar/>
      
      <div class="container my-5">
        <h2 class="text-center mb-4">Wardrobe Collection</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($items as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top rounded-top img-fluid" alt="{{ $item->name }}">
                        @else
                            <img src="{{ asset('images/default-placeholder.jpg') }}" class="card-img-top rounded-top img-fluid" alt="Default Image">
                        @endif
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-primary">{{ $item->name }}</h5>
                            <p class="card-text text-muted">{{ $item->description }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <button class="btn btn-outline-primary btn-sm px-3 float-start">Like</button>
                            <button class="btn btn-outline-secondary btn-sm px-3 float-end">make Order</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

        
    
</div>

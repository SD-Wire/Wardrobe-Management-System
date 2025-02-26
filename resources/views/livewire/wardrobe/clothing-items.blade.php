<div>

    <div class="pagetitle">
        <h1>Data Tables</h1>
        <div class="row d-flex">
            <nav class="float-start">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Clothings</a></li>
                    <li class="breadcrumb-item active">clothing list</li>

                </ol>
            </nav>

        </div>
    </div><!-- End Page Title -->
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Clothing listings</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    {{-- <th>Description</th>                                     --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @if ($item->image)
                                                <img src="{{ asset('storage/clothing-items/' . basename($item->image)) }}"
                                                    alt="Item Image" class="img-thumbnail" width="60">
                                            @else
                                                <p>No Image Available</p>
                                            @endif

                                        </td>
                                        <td>{{ $item->category }}</td>
                                        {{-- <td>{{ $item->description }}</td> --}}
                                        
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('clothing.edit', $item->id) }}"><i
                                                    class="bi bi-pen"></i></a>
                                            <a class="btn btn-danger" wire:click="deleteItem({{ $item->id }})"><i
                                                    class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No items found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('styles')
    @endpush
</div>

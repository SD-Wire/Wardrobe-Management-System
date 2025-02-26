<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Wardrobe Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clothing Items</a>
              </li>
              
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search items..." aria-label="Search" wire:model.debounce.300ms="search">
              <a class="btn btn-secondary btn-sm mx-3" href="{{ route('auth.loginform') }}" type="submit" Wire:navigate>Login</a>
              <a class="btn btn-success mx-3 btn-sm" href="{{route('auth.registerform')}}" type="submit" wire:navigate>Register</a>
            </form>
          </div>
        </div>
      </nav>
</div>

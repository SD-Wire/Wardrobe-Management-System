 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ route('clothing.items') }}">
                 <i class="bi bi-bank"></i>
                 <span>Clothing Items</span>
             </a>
         </li><!-- End Dashboard Nav -->
         {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ asset('dashboard')}}">
                <i class="bi bi-bank"></i>
                <span>Add Clothing Item</span>
            </a>
        </li><!-- End Dashboard Nav --> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('clothing.create') }}">
                <i class="bi bi-table"></i>
                <span>Add Clothing Item</span>
            </a>
        </li><!-- End Dashboard Nav -->


         {{-- <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-journal-text"></i><span>Clothing Items</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('clothing.items') }}">
                         <i class="bi bi-circle"></i><span>Clothing List</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('clothing.create') }}">
                         <i class="bi bi-circle"></i><span>Add Item</span>
                     </a>
                 </li>

             </ul>
         </li><!-- End Forms Nav --> --}}

     </ul>

 </aside><!-- End Sidebar-->

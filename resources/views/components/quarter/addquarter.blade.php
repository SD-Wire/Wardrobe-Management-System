@extends('components.layouts.base')
@section('main')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">New</a></li>
        <li class="breadcrumb-item active">Quarter Form</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Floating labels Form</h5>
    
          <!-- Floating Labels Form -->
          <form class="row g-3">
           
            <div class="col-md-6 mb-3">
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                <label for="floatingEmail">Quarter ID</label>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingName">Quarter NAME</label>
              </div>
            </div>
            <div class="col-8 mb-5">
              <div class="form-floating quill-editor-default">
                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                <label for="floatingTextarea">Description</label>
              </div>
            </div>
           
            <div class="col-md-4 mb-5">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="State">
                  <option selected>Q 1</option>
                  <option value="1">Q 2</option>
                  <option value="2">Q 3</option>
                </select>
                <label for="floatingSelect">Quarter</label>
              </div>
            </div>
           <hr class="bg-primary fs-6 pb-1"/>   
            <div class="">
              <button type="submit" class="btn btn-primary float-start border-radius-circle"><i class="bi bi-plus"></i>Save</button>
              <button type="reset" class="btn btn-secondary float-end"><i class="bi bi-arrow-counterclockwise"></i>Reset</button>
            </div>
          </form><!-- End floating Labels Form -->
    
        </div>
      </div>
    </div>

     

    </div>
  </section> 
@endsection
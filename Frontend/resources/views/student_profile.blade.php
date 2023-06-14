@extends('layout.master')

@section('dynamic_content')

<div class="nav-empty" style="padding: 50px">
</div>

<section class="h-100 gradient-custom-2">
  <div class="container py-13 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-15 col-xxl-32">
    
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #0c0631; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="assets/img/cat.jpg"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-1"
                style="width: 150px; z-index: 1">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;">
               <a href="edit.blade.php">Edit</a> 
              </button>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5>Gallic</h5>
              <p style="margin:0 0 16px"><B>Student's User</B></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-0">
             
              {{-- <div class="following">
                <p class="mb-1 h5">478</p>
                <p class="small text-muted mb-0">Following</p>
              </div> --}}
            </div>
          </div>
          <div class="card-body p-4 text-black user-profile">
            <div class="mb-5">
              <thead>
                  <tr>
                      <th colspan="2"><b>Brief Bio</b></th>
                  </tr>
              </thead>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">I love sharing to other people</p>
              </div>
            </div> 
            
         
        </div>
      </div>
    </div>
  </div>
 
</section>

@stop
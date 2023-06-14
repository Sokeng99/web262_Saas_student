@extends('layout.master_two')

@section('dynamic_content')

  {{-- content --}}
  <div class="container-upload">
    {{-- main content --}}
    <div class="main-content">

      <form method="post" enctype="multipart/form-data" action="{{url('/upload')}}">
        <div class="form-group">
          <label for="title">Publication Title:</label>
          <input type="text" id="title">
        </div>
        
        <div class="form-group">
          <label for="title">Description:</label>
          <input type="text" id="title">
        </div>

        <div class="upload-file" style="margin-bottom: 10px">
          <label for="formFileMultiple" class="form-label">Upload your files here</label>
          <input class="form-control" type="file" name="image" placeholder="" aria-describedby="helpId">
        </div>

        <div class="date">
          <label for="date">Enter the publication date: </label> 
          <input type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
        </div> 

        <button class="btn-upload">Upload</button>
      </form>
    </div>

    {{-- right-sidebar --}}
    <div class="right-sidebar hover-underline">
      <div class="pre-upload" style="margin-bottom: 5px; text-align:center;">
        <i class="fa-solid fa-hand-point-right fa-beat"></i>
        <a href="#">see your recent uploaded researches here</a>
      </div>
    {{-- right-sidebar --}}

  </div>
  {{-- content --}}
  </div>

@stop
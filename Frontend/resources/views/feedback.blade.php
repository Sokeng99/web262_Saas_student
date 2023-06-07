@extends('layout.master')

@section('dynamic_content')

<div class="nav-empty" style="padding: 50px">
</div>

<div class="container0">
  <div class="row">
    <div class="caption">
        <h2 style="text-align: center">Discover the world's scientific knowledge</h2>
        <h3 style="text-align: center">With 135+ million publication pages, 20+ million researchers and 1+ million questions, this is where everyone can access science</h3>
        <div class="box">
            <input type="search" id="search" placeholder="Search for publications, researchers, or questions" name="search"/ >
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      <hr>
    </div>
    <div class="caption1">
    <div class="qpub">
      <a class="question" href="#">Questions (4,300)</a>
      <a class="publication" href="#">Feedbacks (1,000)</a>
    </div>
  </div>
</div>
</div>

<div class="container-feedback">
  <div class="row1">
    <div class="feedback-content">
      <a class="hover-underline" href="#" style="color: black; margin-bottom: 20px;">Risk of cardiovascular events following COVID-19 in people with and without pre-existing chronic respiratory disease</a><br>
      <span style="background-color: #00032e; padding: 2px; color: white; margin-bottom:5px; margin-top:5px">Article</span>
      <span style="color: grey; margin: 5px"> Mar 2023DOI: 10.1101/2023.03.01.23286624 </span>
    </div>  

        <div class="researchers">
          <div class="profile">
            <img src="assets/img/favicon.png" alt="Researcher 1">
            <p class="name">Rochelle Knight .</p>
          </div>
          <div class="profile">
            <img src="assets/img/favicon.png" alt="Researcher 2">
            <p class="name">Venexia Walker .</p>
          </div>
          <div class="profile">
            <img src="assets/img/favicon.png" alt="Researcher 3">
            <p class="name">SokEng Huot .</p>
          </div>
          <div class="profile">
            <img src="assets/img/favicon.png" alt="Researcher 4">
            <p class="name">Headangelly Huy .</p>
          </div>
          <div class="profile">
            <img src="assets/img/favicon.png" alt="Researcher 5">
            <p class="name">Sereiteppy Or</p>
          </div>
          
        </div>

        {{-- <div class="source">
          <img src="assets/img/preview1.jpg" alt="Source">
        </div> --}}


        <div class="feedback">
          <a href="#" class="feedback-button hover-underline">Write feedback</a>
          <div class="feedback-form">
            <form>
              <textarea placeholder="please write your feedback more than 20 words" required></textarea>
              <button type="submit" class="hover-underline">Submit</button>
            </form>
          </div>
        </div>
      
  </div>
</div>

@stop
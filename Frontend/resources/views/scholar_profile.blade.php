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
              <img src="assets/img/1.jpg"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-5 mb-1"
                style="width: 150px; z-index: 1">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1; background-color:#00032e; color:#f8f9fa;">
                Edit
              </button>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5>Andy Horwitz</h5>
              <p style="margin:0 0 16px"><B>Scholar's User</B></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-0">

                <div>
                  <p class="mb-1 h5" style="display: block;" >253</p>
                  <p class="small text-muted mb-0">Upload</p>
                </div>
                {{-- <div class="px-3">
                  <p class="mb-1 h5" style="display: block;">1026</p>
                  <p class="small text-muted mb-0">Followers</p>
                </div>
                <div>
                  <p class="mb-1 h5" style="display: block;">478</p>
                  <p class="small text-muted mb-0">Following</p>
                </div> --}}


          </div>
          <div class="card-body p-4 text-black scholar-profile">
            <div class="mb-5">
              <thead>
                  <tr>
                      <th colspan="2"><b>BIO</b></th>
                  </tr>
              </thead>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">I love sharing to other people</p>
              </div>
            </div> 
            
          <table class="table table-profile">
              <thead>
                  <tr>
                      <th colspan="2">WORK AND EDUCATION</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="field">Work</td>
                      <td class="value">
                          <div class="m-b-5">
                              <b>Magnificient IT (2017)</b> <a href="#" class="m-l-10">Edit</a><br />
                              <span class="text-muted">PHP Programmer</span>
                          </div>
                          <div>
                              <b>Neutrino IT (2012)</b> <a href="#" class="m-l-10">Edit</a><br />
                              <span class="text-muted">UXUI / Frontend Developer</span>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="field">Education</td>
                      <td class="value">
                          <div class="m-b-5">
                              <b>University (2009)</b> <a href="#" class="m-l-10">Edit</a><br />
                              <span class="text-muted">University of Georgia, Athens, GA</span>
                          </div>
                          <div>
                              <b>High School (2006)</b> <a href="#" class="m-l-10">Edit</a><br />
                              <span class="text-muted">Heritage High School, West Chestter, PA</span>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="field">Skills</td>
                      <td class="value">
                          C++, PHP, HTML5, CSS, jQuery, MYSQL, Ionic, Laravel, Phonegap, Bootstrap, Angular JS, Angular JS, Asp.net
                      </td>
                  </tr>
              </tbody>
           </table>
           <div class="article-links">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0">Recent Upload</p>
                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
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
                    
                </div>
              </div>
              
              <div class="container-feedback">
                <div class="row1">
                  <div class="feedback-content">
                    <a class="hover-underline" href="#" style="color: black; margin-bottom: 20px;">Retention of noble and rare isotope gases in plasma-facing components - Experience from the JET tokamak with the ITER-like wall</a><br>
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
                </div>
              </div>
              
              <div class="container-feedback">
                <div class="row1">
                  <div class="feedback-content">
                    <a class="hover-underline" href="#" style="color: black; margin-bottom: 20px;">High-order coupling of shear and sonic continua in JET plasmas</a><br>
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
                </div>
              </div>
              
              <div class="container-feedback">
                <div class="row1">
                  <div class="feedback-content">
                    <a class="hover-underline" href="#" style="color: black; margin-bottom: 20px;">Education in Green Chemistry supported by Computational Chemistry - A Brief Review</a><br>
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
                </div>
              </div>
              
              <div class="container-feedback">
                <div class="row1">
                  <div class="feedback-content">
                    <a class="hover-underline" href="#" style="color: black; margin-bottom: 20px;">Implementation of chemistry in the Athena++ code</a><br>
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
                </div>
              </div>
           </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section>

@stop
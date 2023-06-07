@extends('layout.master')

@section('dycontent')
<div class="container-fluid">
				    
                    <div class="row">
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="widget-stat card bg-primary">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="mr-3">
                                            <i class="la la-users"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Total register Users</p>
                                            <h3 class="text-white">3280</h3>
                                            <div class="progress mb-2 bg-white">
                                                <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                            </div>
                                            <small>76% Increase in 20 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="widget-stat card bg-warning">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="mr-3">
                                            <i class="la la-user"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Total student users</p>
                                            <h3 class="text-white">245</h3>
                                            <div class="progress mb-2 bg-white">
                                                <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                            </div>
                                            <small>50% Increase in 25 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="widget-stat card bg-secondary">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="mr-3">
                                            <i class="la la-graduation-cap"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Total scholar users</p>
                                            <h3 class="text-white">28</h3>
                                            <div class="progress mb-2 bg-white">
                                                <div class="progress-bar progress-animated bg-light" style="width: 26%"></div>
                                            </div>
                                            <small>26% Increase in 20 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="mr-3">
                                            <i class="material-icons">cloud</i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Document Uploads</p>
                                            <h3 class="text-white">2342</h3>
                                            <div class="progress mb-2 bg-white">
                                                <div class="progress-bar progress-animated bg-light" style="width: 40%"></div>
                                            </div>
                                            <small>40% Increase in 30 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                            <div class="card profile-tab">
                                <div class="card-header">
                                    <h4 class="card-title">User Status</h4>
                                </div>
                                <div class="card-body custom-tab-1">
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link pb-2">Student Users</a></li><li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link pb-2 active show">Scholar Users</a></li>
                                        <!-- <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link pb-2">Other</a></li> -->
                                    </ul>
                                    <div class="tab-content">
                                        <div id="my-posts" class="tab-pane fade active show">
                                            <div class="table-responsive">
                                                <table class="table table-responsive-md">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Profile</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Register Date</th>
                                                            <th scope="col">Publishing paper</th>
                                                            <th scope="col">Follower</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic1.jpg" class="rounded-circle" width="35" alt=""></td>
                    
                                                            <td>Headangelly Huy</td>
                                                            <!-- <td><span class="badge badge-rounded badge-success">Paid</span></td> -->
                                                            <td>12 August 2022</td>
                                                            <td>2 papers</td>
                                                            <td>300</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic2.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Kanold Vyry</td>
                                                            <td>11 July 2022</td>
                                                            <td>7 papers</td>
                                                            <td>682</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic3.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Sokeng Hout</td>
                                                            <td>10 May 2017</td>
                                                            <td>10 papers</td>
                                                            <td>894</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic4.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Sereitepy or</td>
                                                            <td>09 April 2018</td>
                                                            <td>30 papers</td>
                                                            <td>864</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic5.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>VongSorya Uch</td>
                                                            <td>08 March 2020</td>
                                                            <td>1 paper</td>
                                                            <td>67</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="about-me" class="tab-pane fade">
                                            <div class="table-responsive">
                                                <table class="table table-responsive-md">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <!-- <th scope="col">Status</th> -->
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Following</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic6.jpg" class="rounded-circle" width="35" alt=""></td>
                    
                                                            <td>Jenny Kim</td>
                                                            <!-- <td><span class="badge badge-rounded badge-success">Paid</span></td> -->
                                                            <td>12 August 2020</td>
                                                            <td>30</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic7.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Katol Vyry</td>
                                                            <td>11 July 2023</td>
                                                            <td>82</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic8.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Eng Srun</td>
                                                            <td>10 May 2015</td>
                                                            <td>94</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic9.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Jennifer or</td>
                                                            <td>09 April 2023</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/profile/education/pic10.jpg" class="rounded-circle" width="35" alt=""></td>
                                                            <td>Yalika Uch</td>
                                                            <td>08 March 2020</td>
                                                            <td>1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop
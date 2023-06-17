@extends('layout.master_two')

@section('dynamic_content')

<section class="h-100 gradient-custom-2">
  <div class="mx-auto" style="width: 60%; ">
      <div class="row flex-lg-nowrap">
        <div class="col">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="e-profile">
                    <div class="row">
                      <div class="col-12 col-sm-auto mb-3">
                        <div class="mx-auto" style="width: 140px;">
                          <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                            <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                          </div>
                        </div>
                      </div>
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                          <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Angelly Huy</h4>
                          <p class="mb-0">_spiderman234_</p>
                          <div class="mt-2">
                            <button class="btn btn-primary" type="button">
                              <i class="fa fa-fw fa-camera"></i>
                              <span>Change Photo</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="tab-content pt-3">
                      <div class="tab-pane active">
                        <form class="form" novalidate="">
                          <div class="row">
                            <div class="col">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group" style="text-align: left">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="" value="">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group" style="text-align: left">
                                    <label style="text-align: left">First Name</label>
                                    <input class="form-control" type="text" name="username" placeholder="" >
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col mb-3">
                                  <div class="form-group" style="text-align: left">
                                    <label>About</label>
                                    <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                        </form>
      
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
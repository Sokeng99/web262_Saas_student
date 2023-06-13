@extends('layout.master')

@section('dynamic_content')

<div class="container my-5 login-option-page">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Login option</h5> <!-- Card title -->
                    <div class="d-grid gap-2 mb-3">
                        <a class="btn btn-primary" href="/login/student">
                            Login for student
                        </a>
                        <!-- Button for user signup -->
                        <a class="btn btn-primary" href="/login/scholar">
                            Login for scholar
                        </a>
                        <!-- Button for company signup -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@extends('dashboard.master')
@section('content')

<div class="content-wrapper py-3">

    <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active">My Profile</li>
        </ol>


        <!-- Example Tables Card -->
        <div class="card mb-3">
            <div class="container">

            </div>
            <div class="card-header">
                <b>Personal Information</b>
            </div>
            <div class="card-block">
                <form method="POST">
                  {{csrf_field()}}
                  <div class="form-group row">
                    <label class="col-2 col-form-label">Name</label>
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-2 col-form-label">Birthdate</label>
                    <div class="col-10">
                        <input type="date" name="birthdate" class="form-control" value="{{$user->birthdate}}">
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-2 col-form-label">Phone Number</label>
                    <div class="col-10">
                        <input type="number" name="phone_number" class="form-control" value="{{$user->phone_number}}">
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                </div>

                <center>
                    <button type="input" class="btn btn-primary">Save</button>
                </center>
            </form>

        </div>

    </div>
</div>
@endsection
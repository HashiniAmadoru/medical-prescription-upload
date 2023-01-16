



@extends('layouts.app')

@section('sidebar')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700');

    img {
        width: 500px;
        height: 500px;
    }
</style>



<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-sm-12 px-sm-2 px-0 bg-dark" style="height: 100vh;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">



                <li class="nav-item">
                        <a href="/myprofile" class="nav-link align-middle px-0">
                            <i class="fa fa-user-circle" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">My Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/prescriptionForm" class="nav-link align-middle px-0">
                            <i class="fa fa-briefcase" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Prescription </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/quatationDetails" class="nav-link align-middle px-0">
                            <i class="fa fa-money" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Quatation Details</span>
                        </a>
                    </li>


                </ul>

            </div>
        </div>
    </div>
</div>



@endsection
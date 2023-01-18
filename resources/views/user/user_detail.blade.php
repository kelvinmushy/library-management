@extends('layouts.master')
@section('top')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


        body {
            background-color: #545454;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        .container {
            height: 100vh;
        }

        .card {

            width: 380px;
            border: none;
            border-radius: 15px;
            padding: 8px;
            background-color: #fff;
            position: relative;
            height: 370px;
        }

        .upper {

            height: 100px;

        }

        .upper img {

            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        .user {
            position: relative;
        }

        .profile img {


            height: 80px;
            width: 80px;
            margin-top: 2px;


        }

        .profile {

            position: absolute;
            top: -50px;
            left: 38%;
            height: 90px;
            width: 90px;
            border: 3px solid #fff;

            border-radius: 50%;

        }

        .follow {

            border-radius: 15px;
            padding-left: 20px;
            padding-right: 20px;
            height: 35px;
        }

        .stats span {

            font-size: 29px;
        }
    </style>
@endsection

@section('content')
    <div class="box">
        <div class="container d-flex justify-content-center align-items-center">

            <div class="card">

                <div class="upper">

                    <img src="{{asset('assets/img/user.pngd')}}" class="img-fluid">
                </div>
                <div class="user text-center">

                    <div class="profile">

                        <img src="{{asset('assets/img/user.png')}}" class="rounded-circle" width="80">

                    </div>

                </div>
                <div class="mt-5 text-center">

                    <h4 class="mb-0">{{$user_d[0]->name}}</h4>
                    <span class="text-muted d-block mb-2"><b>{{$user_d[0]->name}}</b></span><br>
                    <span class="text-muted d-block mb-2"><b>{{$user_d[0]->email}}</b></span>
                    <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                        <div class="stats">
                            <h6 class="mb-0">Followers</h6>
                            <span>8,797</span>

                        </div>


                        <div class="stats">
                            <h6 class="mb-0">Projects</h6>
                            <span>142</span>

                        </div>


                        <div class="stats">
                            <h6 class="mb-0">Ranks</h6>
                            <span>129</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection

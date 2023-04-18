@extends('Layout.RegisterLayout')

@section('content')
<div class="container">
    <div class="row align-items-center" style="height: 100vh;">
        <div class="col-md-12 w-100-1100 my-3">
            <div class="sec-5-form" id="sec-5-form">
                <form action="{{route('admin.login.store')}}" class="sec-5-form"  method="POST">

                    @csrf

                    <div class="box"></div>

                        <div class="row justify-content-center">
                            <h2 class="display-4 fw-bold fw-bold">Login</h2>
                            <p>The Providers Solutions Courses</p>
                            <div class="col-md-12 my-3">
                                <input class="px-3" required="" placeholder="Enter Your Email" type="text"
                                    name="email" value="">
                            </div>
                            <div class="col-md-12 my-3">
                    <input type="password" class="px-3" required="" placeholder="Enter Your Password" 
                                    name="password" value="">
                            </div>
                           
                            <div class="col-12">
                                <button type="submit" class="sec-5-sub btn-sm">Login</button>
                            </div>
                        </div>
                        <br>
                        @if (session()->has('status'))
                            <div class="alert alert-danger ">{{session()->get('status')}}</div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

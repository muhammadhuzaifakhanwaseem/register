@extends('Layout.HomeLayout')

@section('homeContent')
<div class="container">
    <div class="row justify-content-center align-items-center my-5" style="height: 70vh">
        <div class="col-md-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#0d6efd" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
            <h2 class="fw-bold my-3">
                Thanks For Register 
            </h2>
            <p>Thanks @if (session()->has('myemail'))
                <span class="fw-bold text-dark">{{session()->get('myemail')}}</span>
            @endif For Register: You are registered successfully. Information Email Has been set your register gmail. 
        <br> 
        Your Student Issd :  <b> {{session()->get('stid')}} </b>
    </p>
            <a href="{{url('/')}}">Return To Website</a>
        </div>
    </div>
@endsection
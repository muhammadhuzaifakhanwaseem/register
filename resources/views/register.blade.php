@extends('Layout.RegisterLayout')

@section('content')
<div class="container">
    <div class="row align-items-center" style="height: 100vh;">
        <div class="col-md-12 w-100-1100 my-2">
            <div class="sec-5-form" id="sec-5-form">
                <form action="{{url('/register/store')}}" class="sec-5-form"  method="POST">
                    @csrf
                    <div class="box"></div>
                        <div class="row">
                            <h2 class="display-5 fw-bold fw-bold">Register Now</h2>
                            <p>For Learn Web Designing & Development With The Best Teachers in Pakistan</p>
                            @if (session()->has('status'))
                            <div class="alert alert-danger" >{{session()->get('status')}}</div>
                            @endif
                            <p></p>
                            <div class="col-md-6 my-3">
                         <input class="px-3"  placeholder="Enter Full Name" type="text"
                                    name="fullname" value="{{old('fullname')}}">
                                    @error('fullname')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="col-md-6 my-3">
                                <input class="px-3" placeholder="Enter Your Email"  type="email"
                                    name="email" value="{{old('email')}}">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="col-md-6 my-3">
                                <label for="">Date of Birth</label>
                                <input class="px-3 mt-1" placeholder="Select DOB" type="date"  name="date"
                                    value="{{old('date')}}">
                                    @error('date')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="col-md-6 my-3 ">
                               <select class="mt-4" name="qualification" >
                                <option value="" selected disabled>Your Qualification</option>
                                <option value="No formal education">No formal education</option>
                                <option value="Primary education">Primary education</option>
                                <option value="Secondary education">Secondary education or high school</option>
                                <option value="GED">Diploma</option>
                                <option value="Vocational qualification">Vocational qualification</option>
                                <option value="Bachelor's degree">Bachelor's degree</option>
                                <option value="Master's degree">Master's degree</option>
                                <option value="Doctorate or higher">Doctorate or higher</option>
                               </select>
                               @error('qualification')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="col-md-6 my-3">
                               <select class="" name="feetype" id="">
                                <option value="" selected disabled>Select Fee Type</option>
                                <option value="lumpsum">Lumpsum</option>
                                <option value="monthly">Monthly</option>
                               </select>
                               @error('feetype')
                               <p class="text-danger">{{$message}}</p>
                           @enderror
                            </div>
                            <div class="col-md-6 my-3">
                               <select class="" name="course" id="">
                                <option value="" selected disabled>Select Course</option>
                                <option value="htmlcssbootstrap">HTML , CSS & Bootstrap</option>
                                <option value="phplaravel">PHP and Laravel</option>
                               </select>
                               @error('course')
                               <p class="text-danger">{{$message}}</p>
                           @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Enter Your Massage Here (optional)" class="" cols="30" rows="10" name="message" ></textarea>
                            </div>
                        </div>
                        <button type="submit" class="sec-5-sub">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

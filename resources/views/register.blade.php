@extends('Layout.RegisterLayout')

@section('content')
<div class="container">
    <div class="row align-items-center" style="height: 100vh;">
        <div class="col-md-12 w-100-1100 my-3">
            <div class="sec-5-form" id="sec-5-form">
                <form class="sec-5-form" action="https://theproviderssolutions.com/contactformsubmit" method="POST">

                    <div class="box"></div>
                        <input type="hidden" name="_token" value="KQCswTWgUXOeEokNLhbYL7pI89sc73TwgKGsxPog">
                        <div class="row">
                            <h2 class="display-4 fw-bold fw-bold">Register Now</h2>
                            <p>For Learn Web Designing & Development With The Best Teachers in Pakistan</p>
                            <div class="col-md-6 my-4">
                                <input class="px-3" required="" placeholder="Enter Your Name" type="text"
                                    name="fname" value="">
                            </div>
                            <div class="col-md-6 my-4">
                                <input class="px-3" placeholder="Enter Your Email" required="" type="text"
                                    name="lname" value="">
                            </div>
                            <div class="col-md-6 my-4">
                                <input class="px-3" placeholder="Select DOB" type="date" required="" name="email"
                                    value="">
                            </div>
                            <div class="col-md-6 my-4">
                               <select class="" name="" id="">
                                <option value="" selected disabled>Your Qualification</option>
                                <option value="No formal education">No formal education</option>
                                <option value="Primary education">Primary education</option>
                                <option value="Secondary education">Secondary education or high school</option>
                                <option value="GED">Diploma</option>
                                <option value="GED">GED</option>
                                <option value="Vocational qualification">Vocational qualification</option>
                                <option value="Bachelor's degree">Bachelor's degree</option>
                                <option value="Master's degree">Master's degree</option>
                                <option value="Doctorate or higher">Doctorate or higher</option>
                               </select>
                            </div>
                            <div class="col-md-6 my-4">
                               <select class="" name="" id="">
                                <option value="" selected disabled>Select Fee Type</option>
                                <option value="">Lumpsum</option>
                                <option value="">Monthly</option>
                               </select>
                            </div>
                            <div class="col-md-6 my-4">
                               <select class="" name="" id="">
                                <option value="" selected disabled>Select Course</option>
                                <option value="">html</option>
                                <option value="">css</option>
                                <option value="">JavaScript</option>
                                <option value="">Laravel</option>
                               </select>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Enter Your Massage Here...." class="" cols="30" rows="10" name="message" required=""></textarea>
                            </div>
                        </div>
                        <button type="submit" class="sec-5-sub">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

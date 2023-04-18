@extends('Layout.DashboardLayout')
<style>
    * {
        box-sizing: border-box;
        /* overflow-x:  hidden !important; */
    }
    .sec-5-form {
        background-color: #ffffff;
        border-radius: 20px;
        padding: 30px;
    }
    .sec-5-form input {
        width: 100%;
        border: 0;
        height: 50px;
        border-radius: 15px;
        color: black;
        border: 1px solid black !important;
    }

    input:focus-visible {
        outline: 0px !important;
        border-bottom: 1px solid black !important;
    }

    .sec-5-form select {
        width: 100%;
        border: 0;
        padding: 10px;
        height: 50px;
        border-radius: 15px;
        color: black;
        border: 1px solid black !important;
    }

    select:focus-visible {
        outline: 0px !important;
        border-bottom: 1px solid black !important;
    }

    textarea:focus-visible {
        outline: 0px !important;
        border-bottom: 1px solid black !important;
    }

    .sec-5-form input::placeholder {
        font-weight: 400;
        font-size: 15px;
        line-height: 19px;
        color: black;
    }


    .input-group>.form-control,
    .input-group>.form-select,
    .input-group>.form-floating {
        box-shadow: none !important;
        border: none !important;
        outline: none !important;
    }

    textarea {
        width: 100%;
        border: 0;
        height: 50px;
        border-radius: 15px;
        height: 200px;
        padding: 10px;
        border: 1px solid black !important;
    }

    textarea::placeholder {
        color: black;
    }

    textPath:focus-visible {
        border: 0 !important;
        outline: 0 !important;
        border-bottom: 1px solid black !important;
    }

    .sec-5-sub {
        background-color: #0079FD;
        padding: 15px 60px;
        border: 0;
        border-radius: 15px;
        margin-top: 15px;
        font-weight: bold;
        color: white;
    }
    .CodeMirror-scroll{
        min-height: 100px !important;
    }

    @media screen and (max-width: 800px) {
        .sec-5-form {
            padding: 10px;
        }
    }
</style>
@section('dashboardContent')
<div class="container">
    <div class="row align-items-center">

            <div class="sec-5-form" id="sec-5-form">
                <form class="sec-5-form" action="https://theproviderssolutions.com/contactformsubmit" method="POST">

                    <div class="box"></div>
                        <input type="hidden" name="_token" value="KQCswTWgUXOeEokNLhbYL7pI89sc73TwgKGsxPog">
                        <div class="row">
                            <h3 class="fw-bold fw-bold">Edit User: <span>Huzaifa</span></h3>
                            <div class="col-md-6 my-4">
                                <input value="huzaifa" class="px-3" required="" placeholder="Enter Your Name" type="text"
                                    name="fname" value="">
                            </div>
                            <div class="col-md-6 my-4">
                                <input value="huzaifa@gmai.com" class="px-3" placeholder="Enter Your Email" required="" type="text"
                                    name="lname" value="">
                            </div>
                            <div class="col-md-6 my-4">
                                <input value="20/20/2003" class="px-3" placeholder="Select DOB" type="date" required="" name="email"
                                    value="">
                            </div>
                            <div class="col-md-6 my-4">
                               <select class="" name="" id="">
                                <option value=""  disabled>Your Qualification</option>
                                <option value="No formal education">No formal education</option>
                                <option value="Primary education">Primary education</option>
                                <option value="Secondary education">Secondary education or high school</option>
                                <option selected value="GED">Diploma</option>
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
                                <option selected value="">Monthly</option>
                               </select>
                            </div>
                            <div class="col-md-6 my-4">
                               <select class="" name="" id="">
                                <option value="" selected disabled>Select Course</option>
                                <option selected value="">html</option>
                                <option value="">css</option>
                                <option value="">JavaScript</option>
                                <option value="">Laravel</option>
                               </select>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Enter Your Massage Here...." class="" name="message" required="">The Old Massage From Huzaifa
                                </textarea>
                            </div>
                            <div class="col-12 mt-5 pt-3">
                                <button type="submit" class="btn btn-outline-dark mt-4">Update User</button>
                            </div>
                        </div>
                    </form>

                </div>

        </div>
    </div>
@endsection

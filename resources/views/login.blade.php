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
                            <h2 class=" fw-bold fw-bold">Login: The Providers Solution Courses</h2>
                            <div class="col-md-12 my-4">
                                <input class="px-3" placeholder="Enter Your Email" required="" type="text"
                                    name="lname" value="">
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="px-3" placeholder="Enter Your Password" required="" type="text"
                                    name="lname" value="">
                            </div>

                        </div>
                        <button type="submit" class="sec-5-sub">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

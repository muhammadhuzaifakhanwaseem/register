@extends('Layout.HomeLayout')
<style>
    .sec-5-form input{
        height: auto !important;
    }
    .sec-5-form input::placeholder{color: rgb(85, 85, 85) !important}
    
</style>
@section('homeContent')
<div class="container">
    <div class="row align-items-center my-5">
        <div class="col-md-12 w-100-1100 my-3">
            <div class="sec-5-form" id="sec-5-form">
                <form action="" class="sec-5-form"  method="POST">

                    @csrf

                    <div class="box"></div>

                   
                        <div class="row justify-content-center">
                            <h2 class="display-4 fw-bold fw-bold">Upload Fee Voucher</h2>
                            <p>The Providers Solutions | Upload Fee Voucher</p>
                            <div class="col-md-12 my-3">
                                <label for="stid">Student Id</label>
                                <input id="stid" class="px-3 py-2 form-control" placeholder="Enter Student Id" required="" type="text"
                                name="stid" value="">
                            </div>
                            <div class="col-md-12 my-3">
                                <label for="stid">Fee Voucher</label>
                                <input class="px-3 py-2 form-control" required="" type="file"
                                    name="email" value="">
                            </div>
                          
                           
                            <div class="col-12">
                                <button type="submit" class=" btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <br>
                        {{-- @if (session()->has('status'))
                            <div class="alert alert-danger ">{{session()->get('status')}}</div>
                        @endif --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

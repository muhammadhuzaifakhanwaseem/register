@extends('Layout.DashboardLayout')
@section('dashboardContent')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="my-3 fw-bold">Copmpose Email</h2>
        </div>
       <div class="col-12 my-3">
        <select class="js-example-basic-multiple form-select" name="states[]" multiple="multiple">
            <option selected>farhan@gmail.com</option>
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
          </select>
       </div>
       <div class="col-12 my-3">
        <textarea placeholder="Write mail here..."></textarea>
       </div>
       <div class="col-12">
        <button class="btn btn-primary">Send</button>
       </div>
    </div>
</div>

@endsection

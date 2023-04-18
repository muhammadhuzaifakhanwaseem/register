@extends('Layout.DashboardLayout')
@section('dashboardContent')
<div class="container">
    <div class="row">
        <h3 class="my-3 fw-bold">Dashboard</h3>
        <div class="col-md-4">
            <div class="card m-2 p-4">
                <h3 class="text-dark">Users List</h3>
                <p class="text-dark">110</p>
                <button class="btn btn-outline-dark">See All Users</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card m-2 p-4">
                <h3 class="text-dark">Courses</h3>
                <p class="text-dark">110</p>
                <button class="btn btn-outline-dark">See All Course</button>
            </div>
        </div>

    </div>
</div>
@endsection

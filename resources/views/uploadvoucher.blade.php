@extends('Layout.DashboardLayout')
<style>
    .form-control:focus {
    color: var(--bs-body-color);
    background-color: var(--bs-form-control-bg);
    border-color: #86b6fe00 !important;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 109, 253, 0) !important;
    border-bottom: 1px solid rgb(61, 61, 61) !important;
}
</style>
@section('dashboardContent')
<div class="container">
    <form action="">
        <h3 class="my-3 fw-bold">Upload Fee Voucher</h3>
        <div class="row my-3">
            <div class="col-6 my-3">
                <label for="">Voucher ID</label>
                <input type="text" class="form-control border-secondary border">
            </div>
            <div class="col-6 my-3">
                <label for="">Voucher</label>
                <input type="file" class="form-control border-secondary border">
            </div>
            <div class="col-12 my-1">
                <button class="btn btn-outline-dark btn-sm" type="submit">Add Fee Voucher</button>
            </div>
        </div>
    </form>
</div>
@endsection

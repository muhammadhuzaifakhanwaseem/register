@extends('Layout.HomeLayout')

@section('homeContent')

  <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h3 class="my-4 fw-bold">Recommanded Course</h3>
        </div>
        {{-- card start --}}
        <div class="col-3">
            <div class="m-2 card rounded shadow rounded-3">
                <img src="https://img.freepik.com/free-photo/web-design-technology-browsing-programming-concept_53876-163260.jpg?size=626&ext=jpg&ga=GA1.2.2026739464.1672684122&semt=ais" class="img-fluid rounded rounded-3" style="height: 250px;" alt="">
                <div class="p-3">
                    <h5>HTML / CSS Full Course for Beginners</h5>
                    <a href="/coursedetail" class="btn btn-danger my-3 text-white">More Info</a>
                </div>
            </div>
        </div>
        {{-- card end --}}
        {{-- card start --}}
        <div class="col-3">
            <div class="m-2 card rounded shadow rounded-3">
                <img src="https://img.freepik.com/free-photo/close-up-image-programer-working-his-desk-office_1098-18707.jpg?size=626&ext=jpg&ga=GA1.2.2026739464.1672684122&semt=ais" class="img-fluid rounded rounded-3" style="height: 250px;" alt="">
                <div class="p-3">
                    <h5>Advance JavaScript Course for Beginners</h5>
                    <a href="/coursedetail" class="btn btn-danger my-3 text-white">More Info</a>
                </div>
            </div>
        </div>
        {{-- card end --}}
    </div>
  </div>
  <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h3 class="my-4 fw-bold">Youtube Video Courses</h3>
        </div>
        {{-- card start --}}
        <div class="col-3">
            <div class="m-2 card rounded shadow rounded-3">
                <img src="https://i.ytimg.com/vi/PtxuWSQ3vII/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLChjE252y1lHE-CAByC6cLIMVUDeg" class="img-fluid rounded rounded-3" style="height: 250px;" alt="">
                <div class="p-3">
                    <h5>Deploay Laravel Project on Hostinger</h5>

                    <a href="https://youtube.com" class="btn btn-danger my-3 text-white">Watch Now</a>
                </div>
            </div>
        </div>
        {{-- card end --}}
    </div>
  </div>
@endsection

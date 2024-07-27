@extends('layout.app')
@section('title','Employee Dashboard')
@section('content')
<section>
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="container-fluid" >
        <div class="row bg-primary">
            <div class="col-md-12">
                <h5 class="text-end" style="color: rgb(238, 255, 0)">#Please keep update your #Attendance, #Leave Wthin</h5>
            </div>
        </div>
        <div class="row bg-primary mt-1">
            <div class="col-md-9">
                <form action="" class="bg-white" style="border-radius: 5px">
                    <div class="form m-2 p-2">
                        <input type="radio" name="" id="leave_approve">
                        <label for="leave_approve" class="me-2">Leave Approval</label>
                        <input type="radio" name="" id="my_attendance">
                        <label for="my_attendance" class="me-2">My Attendance</label>
                        <input type="radio" name="" id="notification">
                        <label for="notification" class="me-2">Notification Approval</label>
                        <input type="radio" name="" id="movement">
                        <label for="movement">Movement Approval</label>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <p class="text-end m-2 fw-bold" style="color: rgb(238, 255, 0)">Leave Approval</p>
            </div>
        </div>
        <div class="row mt-1" style="background-color: rgb(171, 212, 213,1)">
            <div class="col-md-10">
                <form action="">
                    <div class="form-group my-1">
                        <input type="text" name="" id="" class="form-control" placeholder="Search by Employee ID, Name, Designation ..." style="height: 30px">
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <button type="submit" class="bg-primary my-1 text-center px-4 fw-bold" style="border-radius: 10px; color: rgb(238, 255, 0)">Approve all</button>
            </div>
        </div>
    </div>
</section>
@endsection
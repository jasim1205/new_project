@extends('layout.app')
@section('title',trans('Employee'))
@section('page',trans('Apply Leave'))
@section('content')
<style>
.profile .profile-card img {
  max-width: 120px;
}

.profile .profile-card h2 {
  font-size: 24px;
  font-weight: 700;
  color: #2c384e;
  margin: 10px 0 0 0;
}

.profile .profile-card h3 {
  font-size: 18px;
}

.profile .profile-card .social-links a {
  font-size: 20px;
  display: inline-block;
  color: rgba(1, 41, 112, 0.5);
  line-height: 0;
  margin-right: 10px;
  transition: 0.3s;
}

.profile .profile-card .social-links a:hover {
  color: #012970;
}

.profile .profile-overview .row {
  margin-bottom: 20px;
  font-size: 15px;
}

.profile .profile-overview .card-title {
  color: #012970;
}

.profile .profile-overview .label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit img {
  max-width: 120px;
}
.heading{
    background-color: rgb(201, 200, 195);
}
.middle{
    border: 1px solid blue;
    padding: 10px;
}
.form-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 300px; /* Adjust the width as needed */
}
.form-group {
    width: 100%;
    margin-bottom: 10px;
}
.form-group label {
    width: 35%;
    margin-bottom: 5px;
}
.form-group input,
.form-group select,
.form-group button 
.form-group textarea {
    width: calc(35% - 10px); /* Adjust width to account for padding or margins */
}
.form-group button {
    width: auto;
}
.img{
    border: 7px solid rgb(73, 145, 73);
}
.btn-primary{
    background-color: #2b47ac;
    border-radius: 8px;
}
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="" >
    <div class="">
        <div class="page-title">
            
            <form action="">
            <div class="row mt-2">
                <div class="col-md-6 middle">
                    <div class="mt-2 mb-2" style="border-bottom: 2px solid blue;">
                        <div class="form-group my-0">
                            <label for="employee_id">Employee ID</label>
                            <input type="text" id="employee_id" name="employee_id"  value="SPL-007055">
                        </div>

                        <!-- Employee Name -->
                        <div class="form-group my-0">
                            <label for="employee_name">Employee Name</label>
                            <input type="text" id="employee_name" name="employee_name"  value="Utpal Biswas" class="">
                        </div>
                        <div class="form-group my-0">
                            <label for="employee_name">Short Name</label>
                            <input type="text" id="short_name" name="short_name"  value="Utpal Biswas" >
                        </div>
                        <div class="form-group my-0">
                            <label for="employee_name">Father's Name</label>
                            <input type="text" id="father_name" name="father_name">
                        </div>
                        <div class="form-group my-0">
                            <label for="employee_name">Mother's Name</label>
                            <input type="text" id="mother_name" name="mother_name">
                        </div>
                        

                        <!-- Purpose Details -->
                        <div class="form-group my-0">
                            <label for="purpose_details">Present Address</label>
                            <textarea name="" id="" cols="30"></textarea>
                            {{-- <input type="text" id="purpose_details" name="purpose_details" > --}}
                        </div>

                        <!-- Address On Leave -->
                        <div class="form-group my-0">
                            <label for="address_on_leave">Parmanent Address</label>
                            <textarea name="" id="" cols="30"></textarea>
                            {{-- <input type="text" id="address_on_leave" name="address_on_leave" > --}}
                        </div>
                        <!-- Status -->
                        <div class="form-group my-0 mb-2">
                            <label for="status">Current Status</label>
                            <input type="text" id="status" name="status">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded text-center py-1 px-5">Update</button>
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="ms-5">
                        <img src="{{ asset('public/uploads/employee/' . $employee->image) }}" alt="Profile" class="rounded img" width="250px">
                    </div>
                </div>
            </div>
            </form>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <a href="#" class="btn btn-primary  px-4 py-1 m-1">Edit Additional Info</a>
                        <a href="#" class="btn btn-primary  px-4 py-1 m-1">View Official Info</a>
                        <a href="#" class="btn btn-primary  px-4 py-1 m-1">Edit Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

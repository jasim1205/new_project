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
    width: calc(35% - 10px); Adjust width to account for padding or margins
}
.form-group button {
    width: auto;
}
.text-red{
    color: red;
}
.header_button{
    border-bottom: 1px solid blue; 
    justify-content:center;
}


</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="" >
    <div class="page-heading">
        <div class="page-title">
            <div class="row heading">
                <div class="col-md-12">
                    <div class="d-flex flex-wrap">
                        <span>Leave Type</span><input type="text" name="" id="" class="mx-3 text-center" value="0" style="width: 75px">
                        <span>Allocated</span><input type="text" name="" id="" class="mx-3 text-center" value="0" style="width: 100px">
                        <span>Consumed</span><input type="text" name="" id="" class="mx-3 text-center" value="0" style="width: 100px">
                        <span>Pending</span><input type="text" name="" id="" class="mx-3 text-center" value="0" style="width: 100px">
                        <span>Available</span><input type="text" name="" id="" class="ms-4 text-center" value="0" style="width: 100px">
                    </div>
                </div>
            </div>
            <form action="">
            <div class="row mt-2">
                <div class="col-md-12 middle">
                    <div class="d-flex flex-wrap header_button">
                        <a href="" class="btn btn-primary rounded mx-1 my-3 px-5">Apply</a>
                        <a href="" class="btn btn-primary rounded mx-1 my-3 px-5">Update</a>
                        <a href="" class="btn btn-primary rounded mx-1 my-3 px-5">Delete</a>
                        <a href="" class="btn btn-primary rounded mx-1 my-3 px-5">Clear</a>
                        <a href="" class="btn btn-primary rounded mx-1 my-3 px-5">
                            <input type="checkbox" name="" id="" class="m-1"><span>send email</span>
                        </a>
                    </div>
                    <div class="mt-2">
                        <div class="form-group my-0">
                            <label for="employee_id">Employee ID</label>
                            <input type="text" id="employee_id" name="employee_id"  value="SPL-007055" readonly>
                            <button type="button" class="btn btn-primary rounded py-0" onclick="print()">Print</button>
                        </div>

                        <!-- Employee Name -->
                        <div class="form-group my-0">
                            <label for="employee_name">Employee Name</label>
                            <input type="text" id="employee_name" name="employee_name"  value="Utpal Biswas" readonly>
                        </div>

                        <!-- Leave Type -->
                        <div class="form-group my-0">
                            <label for="leave_type" class="text-red">Leave Type</label>
                            <select id="leave_type" name="leave_type" >
                                <option value="">-- Select --</option>
                                <option value="">CL</option>
                                <option value="">SL</option>
                                <option value="">Others</option>
                                <!-- Add leave type options here -->
                            </select>
                            <button type="button" class="btn btn-primary rounded py-0">Leave Chart</button>
                        </div>

                        <!-- Day Type -->
                        <div class="form-group my-0">
                            <label for="day_type" class="text-red">Day Type</label>
                            <input type="text" id="day_type" name="day_type" >
                        </div>

                        <!-- Application Date -->
                        <div class="form-group my-0">
                            <label for="application_date">Application Date</label>
                            <input type="date" id="application_date" name="application_date">
                        </div>

                        <!-- Leave Start Date -->
                        <div class="form-group my-0">
                            <label for="leave_start_date" class="text-red">Leave Start Date</label>
                            <input type="date" id="leave_start_date" name="leave_start_date">
                        </div>

                        <!-- Leave End Date -->
                        <div class="form-group my-0">
                            <label for="leave_end_date" class="text-red">Leave End Date</label>
                            <input type="date" id="leave_end_date" name="leave_end_date" >
                        </div>

                        <!-- Days Request -->
                        <div class="form-group my-0">
                            <label for="days_request">Days Request</label>
                            <input type="number" id="days_request" name="days_request"  value="0">
                        </div>

                        <!-- Days Applied -->
                        <div class="form-group my-0">
                            <label for="days_applied">Days Applied</label>
                            <input type="number" id="days_applied" name="days_applied" value="0">
                        </div>

                        <!-- Responsible Handover To -->
                        <div class="form-group my-0">
                            <label for="responsible_handover_to">Resp. Handover To</label>
                            <input type="text" id="responsible_handover_to" name="responsible_handover_to" >
                        </div>

                        <!-- Name -->
                        <div class="form-group my-0">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" >
                        </div>

                        <!-- Year -->
                        <div class="form-group my-0">
                            <label for="year">Year</label>
                            <input type="text" id="year" name="year" >
                        </div>

                        <!-- Period -->
                        <div class="form-group my-0">
                            <label for="period">Period</label>
                            <input type="text" id="period" name="period" >
                        </div>

                        <!-- Purpose Details -->
                        <div class="form-group my-0">
                            <label for="purpose_details" class="text-red">Purpose Details</label>
                            <textarea name="" id="" cols="37"></textarea>
                            {{-- <input type="text" id="purpose_details" name="purpose_details" > --}}
                        </div>

                        <!-- Address On Leave -->
                        <div class="form-group my-0">
                            <label for="address_on_leave"  class="text-red">Address On Leave</label>
                            <textarea name="" id="" cols="37"></textarea>
                            {{-- <input type="text" id="address_on_leave" name="address_on_leave" > --}}
                        </div>

                        <!-- Mobile No. -->
                        <div class="form-group my-0">
                            <label for="mobile_no" class="text-red">Mobile No.</label>
                            <input type="text" id="mobile_no" name="mobile_no" >
                        </div>

                        <!-- Remarks / Details -->
                        <div class="form-group my-0">
                            <label for="remarks">Remarks / Details</label>
                            <textarea name="" id="" cols="37"></textarea>
                            {{-- <input type="text" id="remarks" name="remarks"> --}}
                        </div>

                        <!-- Type -->
                        <div class="form-group my-0">
                            <label for="type">Type</label>
                            <select id="type" name="type" >
                                <option value="">-- Select --</option>
                                <option value="FullPay">FullPay</option>
                                <!-- Add more types if needed -->
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="form-group my-0">
                            <label for="status">Status</label>
                            <input type="text" id="status" name="status">
                        </div>

                        <!-- Entered By -->
                        <div class="form-group my-0">
                            <label for="entered_by">Entered By</label>
                            <input type="text" id="entered_by" name="entered_by" >
                        </div>
                        <div class="form-group">
                            <label for="file">Select File :</label>
                            <input type="file" id="file" name="file">
                        </div>
                        <div class="form-group">
                            <label for="file_name">File Name :</label>
                            <input type="text" id="file_name" name="file_name" placeholder="File Name...">
                            <button type="submit" class="btn btn-primary py-0">Upload</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 mx-0 my-auto">
                    <div class="form-group-horizontal text-white p-1" style="background-color: #11449c">
                        <label for="file">Select File :</label>
                        <input type="file" id="file" name="file">
                    </div>
                    <div class="form-group-horizontal text-white p-1" style="background-color: #11449c">
                        <label for="file_name">File Name :</label>
                        <input type="text" id="file_name" name="file_name" placeholder="File Name...">
                        <button type="submit" class="btn btn-primary py-0">Upload</button>
                    </div>
                </div> --}}
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

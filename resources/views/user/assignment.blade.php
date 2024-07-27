@extends('layout.app')
@section('title',trans('Employee'))
@section('page',trans('Apply Leave'))
@section('content')
<style>
        .form-group {
            /* display: flex; */
            /* align-items: center;
            justify-content: center; */
            text-align: center;
            margin-bottom: 10px;
        }
        .form-group label {
            width: 150px; /* Adjust the width as needed */
            text-align: right;
            margin-right: 10px;
        }
        .form-group b {
            width: 5px; /* Adjust the width as needed */
            text-align: center;
        }
        .form-group input, 
        .form-group select{
            width: 200px;
            margin-left: 10px;
        }
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="">
    <div class="">
        <div class="page-title">
            <form action="">
                <div class="form-group text-center" style="border-bottom: 1px solid blue;">
                    <button type="submit" class="btn btn-primary rounded mb-1">Add</button>
                    <button type="submit" class="btn btn-primary rounded  mb-1">Clear</button>
                </div>
                <div class="form-group text-center">
                    <label for="" class="">From Date</label>
                    <b class="mx-3">:</b>
                    <input type="date" name="" id="" value="11/07/24">
                </div>
                <div class="form-group">
                    <label for="" class="">To Date</label>
                    <b class="mx-3">:</b>
                    <input type="date" name="" id="" value="11/07/24">
                </div>
                <div class="form-group ">
                    <label for="" class="">Total Days</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                    <button class="btn btn-primary rounded py-0">load</button>
                </div>
                <div class="form-group">
                    <label for="" class="">Employee ID</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                    <button class="btn btn-primary rounded py-0">print</button>
                </div>
                <div class="form-group">
                    <label for="" class="">Employee Name</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="" class="">Designation</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="" class="">Proximity Card No</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="" class="">Start Time</label>
                    <b class="mx-3">:</b>
                    <select name="" id="">
                        <option value="">--select--</option>
                        <option value="">11am</option>
                        <option value="">12pm</option>
                        <option value="">1 pm</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="">End Time</label>
                    <b class="mx-3">:</b>
                    <select name="" id="">
                        <option value="">--select--</option>
                        <option value="">11am</option>
                        <option value="">12pm</option>
                        <option value="">1 pm</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="">Remarks</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="" class="">Status</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="" class="">Entered by</label>
                    <b class="mx-3">:</b>
                    <input type="text" name="" id="">
                </div>
                <button class="w-100 btn btn-primary">SENT LIST(0)</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layout.app')
@section('title',trans('Employee'))
@section('page',trans('Apply Leave'))
@section('content')
<style>
      .btn{
        width: 50%
      }
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Payment Slip Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Monthly Income Tax Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Payment Slip Cumulative Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Leave Details Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Apparels Details Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Loan/Advance Details Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">JobCard Movement Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Monthwise Payment Report</a>
            </div>
            <div class="col-md-12 text-center m-1">
                <a href="#" class="btn btn-primary rounded py-2">Even Calendar</a>
            </div>
        </div>
    </div>
</div>
@endsection

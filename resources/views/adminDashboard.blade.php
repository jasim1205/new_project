@extends('layout.app')
@section('title','Admin Dashboard')
@section('content')
<style>
    .red-text {
        color: red;
    }
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Dashboard Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="p-2">
                            {{-- {{ $currentDay }} {{ $monthName }} {{ $currentYear }} --}}
                        </span>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">
                       Today Received 
                        </h6>
                        <h6 class="font-extrabold mb-0">
                            {{-- {{ $todayTotalReceived }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon blue mb-2">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="p-2">
                            {{-- {{ $currentDay }} {{ $monthName }} {{ $currentYear }} --}}
                        </span>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Today Payment </h6>
                        <h6 class="font-extrabold mb-0">
                            {{-- {{ $todayPayment }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                       <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="p-2">
                            {{-- {{ $currentDay }} {{ $monthName }} {{ $currentYear }} --}}
                        </span>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Today Balance</h6>
                        <h6 class="font-extrabold mb-0 ">
                            {{-- {{ $todayBalance }} --}}

                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="p-2">
                            {{-- {{ $monthName }} {{ $currentYear }} --}}
                        </span>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">
                        Monthly Received
                        </h6>
                        <h6 class="font-extrabold mb-0">
                            {{-- {{ $monthlyReceived }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon blue mb-2">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="p-2">
                            {{-- {{ $monthName }} {{ $currentYear }} --}}
                        </span>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Monthly Payment</h6>
                        <h6 class="font-extrabold mb-0">
                            {{-- {{ $monthlyPayment }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                        <i class="fa-regular fa-calendar"></i>
                        </div>
                        <span class="p-2">
                            {{-- {{ $monthName }} {{ $currentYear }} --}}
                        </span>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Monthly Balance</h6>
                        <h6 class="font-extrabold mb-0 ">
                            {{-- {{ $monthlyBalance }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                        {{-- <span class="p-2">
                            {{ $currentDay }} {{ $monthName }} {{ $currentYear }}
                        </span> --}}
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">
                       Total Received
                        </h6>
                        <h6 class="font-extrabold mb-0">
                            {{-- {{ $totalTotalReceived }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon blue mb-2">
                           <i class="fa-regular fa-calendar"></i>
                        </div>
                        {{-- <span class="p-2">
                            {{ $currentDay }} {{ $monthName }} {{ $currentYear }}
                        </span> --}}
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Payment</h6>
                        <h6 class="font-extrabold mb-0">
                            {{-- {{ $totalPayment }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                        <i class="fa-regular fa-calendar"></i>
                        </div>
                        {{-- <span class="p-2">
                            {{ $currentDay }} {{ $monthName }} {{ $currentYear }}
                        </span> --}}
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Balance</h6>
                        <h6 class="font-extrabold mb-0 ">
                            {{-- {{ $totalBalance }} --}}
                        </h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@extends('layout.app')
@section('title',trans('Users'))
@section('page',trans('List'))
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
             <div class="col-6 d-flex">
                <h3>Users/</h3>
                <a href="{{ route('employees') }}" class="d-inline-block">
                    <h3>Employees</h3>
                </a>
            </div>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
            <nav
                aria-label="breadcrumb"
                class="breadcrumb-header float-start float-lg-end"
            >
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    User
                </li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-primary" href="{{route('user.create')}}"><i class="fa fa-plus"></i></a>
                    </div>
                    <div class="col-6 d-flex ms-auto">
                        <label for="searchJobNumber" class="form-label px-3 fw-bold">Search :</label>
                        <input type="text" class="form-control" style="height: 35px; width:80%" id="searchInput" placeholder="Search by name">
                    </div>
                </div>
                
            </div>
            <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th scope="col">{{__('#SL')}}</th>
                        <th scope="col">{{__('Name')}}</th>
                        <th scope="col">{{__('Email')}}</th>
                        <th scope="col">{{__('Contact')}}</th>
                        <th scope="col">{{__('Role')}}</th>
                        
                        <th scope="col">{{__('Status')}}</th>
                        <th class="white-space-nowrap">{{__('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $p)
                    <tr>
                        <th scope="row">{{ ++$loop->index }}</th>
                        <td>
                            <img width="40px" src="{{asset('public/uploads/employee/'.$p->image)}}" alt="" class="rounded-circle">
                            {{$p->name}}
                        </td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->contact_no}}</td>
                        <td>{{$p->role?->name}}</td>
                        <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>
                        <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                        <td class="white-space-nowrap">
                            {{-- <a href="{{route('user.edit',encryptor('encrypt',$p->id))}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                <i class="fa fa-trash"></i>
                            </a>
                            <form id="form{{$p->id}}" action="{{route('user.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                @csrf
                                @method('delete')
                            </form> --}}
                            <div class="btn-group" role="group">   
                                <a href="{{route('user.edit',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-edit m-1"></i></a>
                                {{-- <form id="deleteForm_{{ $p->id }}" action="{{ route('user.destroy', encryptor('encrypt', $p->id)) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:void(0);" onclick="confirmDelete('{{ $p->id }}')">
                                        <i class="fa fa-trash m-1"></i>
                                    </a>
                                </form> --}}
                            </div>
                       </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="8" class="text-center">No Data Found</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
               {{-- <div class="text-end">
                    {{ $data->links() }}
                </div> --}}
            </div>
        </div>
    </section>
</div>
<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('deleteForm_' + id).submit();
        }
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('#table1 tbody tr');

        function filterRows() {
            const searchValue = searchInput.value.trim().toLowerCase();

            tableRows.forEach(row => {
                const Title = row.cells[1].textContent.trim().toLowerCase();
                if (Title.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterRows);
    });
    
</script>
@endsection

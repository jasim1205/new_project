
<ul class="menu">
    {{-- <div class="text-center">
        <img src="{{asset('public/uploads/employee/'.request()->session()->get('image'))}}" width="150px" class="rounded-circle">
        <p class="user-name mb-0">{{encryptor('decrypt',request()->session()->get('userName'))}}</p>
        <a href="{{route('employee.dashboard')}}" class='sidebar-link  border'>
            <span>Dashboard</span>
        </a>
        <a href="{{route('employee.profile')}}" class='sidebar-link border'>
            <span>Profile</span>
        </a>
        <a href="{{route('employee_leave_apply')}}" class='sidebar-link border'>
            <span>Leave Apply</span>
        </a>
        <a href="{{route('assignment')}}" class='sidebar-link border'>
            <span>Assignment</span>
        </a>
        <a href="{{route('change_password')}}" class='sidebar-link border'>
            <span>Change Password</span>
        </a>
        <a href="{{route('report_panel')}}" class='sidebar-link border'>
            <span>Report Panel</span>
        </a>
        <a href="{{route('profile_update')}}" class='sidebar-link border'>
            <span>Profile Update</span>
        </a>
        <a href="{{route('logOut')}}" class='sidebar-link border'>
            <span>Log Out</span>
        </a>
    </div> --}}
    <li class="sidebar-title">Menu</li>
    <li
        class="sidebar-item {{ isActiveRoute('employee.dashboard') }}">
        <a href="{{route('employee.dashboard')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item {{ isActiveRoute('employee.profile') }}">
        <a href="{{route('employee.profile')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="sidebar-item {{ isActiveRoute('employee_leave_apply') }}">
        <a href="{{route('employee_leave_apply')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Leave Apply</span>
        </a>
    </li>
    <li class="sidebar-item {{ isActiveRoute('assignment') }}">
        <a href="{{route('assignment')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Assignment</span>
        </a>
    </li>
    <li class="sidebar-item {{ isActiveRoute('change_password') }}">
        <a href="{{route('change_password')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Change Password</span>
        </a>
    </li>
    <li class="sidebar-item {{ isActiveRoute('report_panel') }}">
        <a href="{{route('report_panel')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Report Panel</span>
        </a>
    </li>
    <li class="sidebar-item {{ isActiveRoute('profile_update') }}">
        <a href="{{route('profile_update')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Profile Update</span>
        </a>
    </li>
    {{-- <li class="sidebar-item">
        <a href="{{route('employee.job')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Job</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{route('employee.fund')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Fund</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{route('voucher.index')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Voucher</span>
        </a>
    </li>--}}
    
    <li class="sidebar-item">
        <a href="{{route('logOut')}}" class='sidebar-link'>
            <i class="fa-solid fa-lock"></i>
            <span>Log Out</span>
        </a>
    </li> 

    {{--
   
    <li
        class="sidebar-item  ">
        <a href="table.html" class='sidebar-link'>
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Table</span>
        </a>
    </li>
    <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
            <span>Datatables</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="table-datatable.html">Datatable</a>
            </li>
            <li class="submenu-item ">
                <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
            </li>
        </ul>
    </li>
   
    <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-egg-fill"></i>
            <span>Icons</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
            </li>
            <li class="submenu-item ">
                <a href="ui-icons-fontawesome.html">Fontawesome</a>
            </li>
            <li class="submenu-item ">
                <a href="ui-icons-dripicons.html">Dripicons</a>
            </li>
        </ul>
    </li>
    --}}
</ul>
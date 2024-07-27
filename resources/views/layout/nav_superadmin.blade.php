<ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li
            class="sidebar-item">
            <a href="{{route('dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
         <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>ACL</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('user.index')}}">User</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('role.index')}}">Role</a>
                </li>
            </ul>
        </li>
         <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Components</span>
            </a>
            <ul class="submenu ">
                {{-- <li class="submenu-item ">
                    <a href="{{route('department.index')}}">Department</a>
                </li> --}}
                <li class="submenu-item ">
                    <a href="{{route('container.index')}}">Container</a>
                </li>
                {{-- <li class="submenu-item ">
                    <a href="{{route('jobhead.index')}}">JobHead</a>
                </li> --}}
                <li class="submenu-item ">
                    <a href="{{route('document-category.index')}}">Documents Type</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('packing.index')}}">Pack type</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('description.index')}}">Description</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('sheedyard.index')}}">Sheed/Yard</a>
                </li>
                 {{-- <li class="submenu-item ">
                    <a href="{{route('fundreceivecategory.index')}}">Fund Receive Category</a>
                </li> --}}
            </ul>
        </li>
        
        <li class="sidebar-item">
            <a href="{{route('customer.index')}}" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>Customer</span>
            </a>
        </li>
       
        {{-- <li class="sidebar-item">
            <a href="{{route('job.index')}}" class='sidebar-link'>
                <i class="bi bi-list-task"></i>
                <span>Job</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('job_delivery_complete')}}" class='sidebar-link'>
                <i class="bi bi-list-task"></i>
                <span>Delivery Complete</span>
            </a>
        </li> --}}
        
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-list-task"></i>
                <span>JOB</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('job.index')}}">Job List</a>
                </li>
                {{-- <li class="submenu-item ">
                    <a href="{{route('job_delivery_complete')}}">Delivery Complete Job</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('job_pending')}}">Pending Document Job</a>
                </li> --}}
                {{-- <li class="submenu-item ">
                    <a href="{{route('job_solkaiyon_list')}}">Job Solkaiyon List</a>
                </li> --}}
            </ul>
        </li>
        {{-- <li class="sidebar-item">
            <a href="{{route('job_solkaiyon_list')}}" class='sidebar-link'>
                <i class="bi bi-list-task"></i>
                <span>Job Solkaiyon List</span>
            </a>
        </li> --}}
         {{-- <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Fund</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('fund_receive.index')}}">Receive</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('fund_distribution.index')}}">Distribution</a>
                </li>
                 <li class="submenu-item ">
                    <a href="{{route('export_expense.index')}}">Export Expense</a>
                </li>
            </ul>
        </li> --}}
         
        <li class="sidebar-item">
            <a href="{{route('logOut')}}" class='sidebar-link'>
                <i class="fa-solid fa-lock"></i>
                <span>Log Out</span>
            </a>
        </li>
        
</ul>
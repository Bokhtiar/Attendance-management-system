<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->




        @isset(auth()->user()->role->permission['permission']['department']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#department" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Department</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="department" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="@route('department.index')">
                            <i class="bi bi-circle"></i><span>Department</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Department Nav -->
        @endisset

        @isset(auth()->user()->role->permission['permission']['designation']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#designation" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Designation</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="designation" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="@route('designation.index')">
                            <i class="bi bi-circle"></i><span>Designation</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End designation Nav -->
        @endisset

        @isset(auth()->user()->role->permission['permission']['user']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Bed-manager-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Bed-manager-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @isset(auth()->user()->role->permission['permission']['user']['list'])
                        <li>
                            <a href="@route('user.index')">
                                <i class="bi bi-circle"></i><span>Employee</span>
                            </a>
                        </li>
                    @endisset
                    @isset(auth()->user()->role->permission['permission']['user']['add'])
                        <li>
                            <a href="@route('user.create')">
                                <i class="bi bi-circle"></i><span>Employee Create</span>
                            </a>
                        </li>
                    @endisset
                </ul>
            </li><!-- End employee Nav -->
        @endisset


        @isset(auth()->user()->role->permission['permission']['attendance']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#attendance" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="attendance" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @isset(auth()->user()->role->permission['permission']['attendance']['list'])
                        <li>
                            <a href="@route('attendance.index')">
                                <i class="bi bi-circle"></i><span>Attendance</span>
                            </a>
                        </li>
                    @endisset
                    @isset(auth()->user()->role->permission['permission']['attendance']['add'])
                        <li>
                            <a href="@route('attendance.create')">
                                <i class="bi bi-circle"></i><span>Attendance Create</span>
                            </a>
                        </li>
                    @endisset
                </ul>
            </li><!-- End designation Nav -->
        @endisset




        @isset(auth()->user()->role->permission['permission']['leave']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#leave" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Leave Application</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="leave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @isset(auth()->user()->role->permission['permission']['leave']['list'])
                        <li>
                            <a href="@route('leave.index')">
                                <i class="bi bi-circle"></i><span>Leave application list</span>
                            </a>
                        </li>
                    @endisset
                    @isset(auth()->user()->role->permission['permission']['leave']['add'])
                        <li>
                            <a href="@route('leave.create')">
                                <i class="bi bi-circle"></i><span>Leave application</span>
                            </a>
                        </li>
                    @endisset
                </ul>
            </li><!-- End Report Nav -->
        @endisset


        @isset(auth()->user()->role->permission['permission']['salary']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#salary" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Salary</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="salary" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @isset(auth()->user()->role->permission['permission']['salary']['list'])
                        <li>
                            <a href="@route('salary.index')">
                                <i class="bi bi-circle"></i><span>Salary list</span>
                            </a>
                        </li>
                    @endisset
                    @isset(auth()->user()->role->permission['permission']['salary']['add'])
                        <li>
                            <a href="@route('salary.create')">
                                <i class="bi bi-circle"></i><span>Salary Create</span>
                            </a>
                        </li>
                    @endisset
                </ul>
            </li><!-- End Report Nav -->
        @endisset






        @isset(auth()->user()->role->permission['permission']['notice']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#notice" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Notice</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="notice" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="@route('notice.index')">
                            <i class="bi bi-circle"></i><span>Notice list</span>
                        </a>
                    </li>

                    <li>
                        <a href="@route('notice.create')">
                            <i class="bi bi-circle"></i><span>Notice Create</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Report Nav -->
        @endisset


        @isset(auth()->user()->role->permission['permission']['report']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#report" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="report" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="@route('report.individual')">
                            <i class="bi bi-circle"></i><span>Individual report</span>
                        </a>
                    </li>

                    <li>
                        <a href="@route('report.summary')">
                            <i class="bi bi-circle"></i><span>Summary report</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Report Nav -->
        @endisset


        @isset(auth()->user()->role->permission['permission']['permission']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#setting" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Setting's</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="setting" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @isset(auth()->user()->role->permission['permission']['role']['list'])
                        <li>
                            <a href="@route('role.index')">
                                <i class="bi bi-circle"></i><span>Role</span>
                            </a>
                        </li>
                    @endisset

                    @isset(auth()->user()->role->permission['permission']['permission']['list'])
                        <li>
                            <a href="@route('permission.index')">
                                <i class="bi bi-circle"></i><span>Permission</span>
                            </a>
                        </li>
                    @endisset

                </ul>
            </li><!-- End setting Nav -->
        @endisset


        <li class="nav-item">
            <a class="nav-link " href="{{ url('logouts') }}">
                <i class="bi bi-grid"></i>
                <span>Logout</span>
            </a>
        </li><!-- End side Nav -->
    </ul>
</aside>

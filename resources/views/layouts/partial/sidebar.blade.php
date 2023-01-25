<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
 

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Bed-manager-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Bed-manager-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('user.index')">
                        <i class="bi bi-circle"></i><span>Employee</span>
                    </a>
                </li>
                <li>
                    <a href="@route('user.create')">
                        <i class="bi bi-circle"></i><span>Employee Create</span>
                    </a>
                </li>
            </ul>
        </li><!-- End employee Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#setting" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Setting's</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="setting" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('role.index')">
                        <i class="bi bi-circle"></i><span>Role</span>
                    </a>
                </li>

                <li> 
                    <a href="@route('permission.index')">
                        <i class="bi bi-circle"></i><span>Permission</span>
                    </a>
                </li>

            </ul>
        </li><!-- End setting Nav -->

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-grid"></i>
                <span>Logout</span>
            </a>
        </li><!-- End side Nav -->
    </ul>
</aside>

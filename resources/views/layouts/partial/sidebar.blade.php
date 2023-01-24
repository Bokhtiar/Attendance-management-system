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
                <i class="bi bi-menu-button-wide"></i><span>Generate NID</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Bed-manager-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('nid.create')">
                        <i class="bi bi-circle"></i><span>Create</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Bed-manager Nav -->

        <li class="nav-item">
            <a class="nav-link " href="@route('logouts')">
                <i class="bi bi-grid"></i>
                <span>Logout</span>
            </a>
        </li><!-- End side Nav -->
    </ul>
</aside>

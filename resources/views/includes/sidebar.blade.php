<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->nick_name }}</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @php
                    $role = session('role', []);
                @endphp

                @if (in_array('Admin', $role))
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/users" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                All Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/roles" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                All Roles
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/assignedRoles" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Assigned Roles
                            </p>
                        </a>
                    </li>
                @endif

                @if (in_array('Manager', $role))
                    <li class="nav-item">
                        <a href="/manager" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Manager
                            </p>
                        </a>
                    </li>
                @endif

                @if (in_array('Volunteer', $role))
                    <li class="nav-item">
                        <a href="/volunteer" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Volunteer
                            </p>
                        </a>
                    </li>
                @endif

                @if (in_array('Doner', $role))
                    <li class="nav-item">
                        <a href="/doner" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Doner
                            </p>
                        </a>
                    </li>
                @endif

                @if (in_array('Renter', $role))
                    <li class="nav-item">
                        <a href="/renter" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Renter
                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</aside>

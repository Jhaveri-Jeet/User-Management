@include('includes.styles')
@include('includes.header')
@include('includes.sidebar')

@php
    $role = session('role', []);
    if (!in_array('Admin', $role)) {
        header('location: /');
        exit();
    }
@endphp

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Assigned Roles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Assigned Roles</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Users with its roles</h3>
                            <a href="/addUser" class="btn btn-dark float-right">Add User</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Admin</th>
                                        <th>Manager</th>
                                        <th>Volunteer</th>
                                        <th>Doner</th>
                                        <th>Renter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allUsers as $user)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                            @foreach ($roles as $role)
                                                <td>
                                                    @php
                                                        $userRole = $userRoles
                                                            ->where('user_id', $user->id)
                                                            ->where('role_id', $role->id)
                                                            ->first();
                                                    @endphp
                                                    @if ($userRole)
                                                        <a href="/unassignedUserRole/{{ $user->id }}/{{ $role->id }}"
                                                            class="btn btn-primary">Unassigned</a>
                                                    @else
                                                        <a href="/assignedUserRole/{{ $user->id }}/{{ $role->id }}"
                                                            class="btn btn-danger">Assign</a>
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('includes.footer')
@include('includes.scripts')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@include('includes.pageEnd')

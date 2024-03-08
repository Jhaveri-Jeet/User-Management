@include('includes.styles')
@include('includes.header')
@include('includes.sidebar')

@php
if (session('role') !== 'Admin') {
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
                                        <th>Doner</th>
                                        <th>Manager</th>
                                        <th>Volunteer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allUsers as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        @if($userroles->role_id > 1){
                                        <td><a href="/" class="btn btn-secondary">UnAssign</a></td>
                                       
                                        }@else{
                                            <td><a href="/assignRole/{{ $allUsers->id }}/{{ $allUsers->role_id }}" class="btn btn-success">Assign</a></td>
                                        }@endif
                                        
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
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
                    <h1>All Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Birthdate</th>
                                        <th>View</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allUsers as $user)
                                    <tr id="updateUserRow_{{ $user->id }}">
                                        <td>{{ $loop->index + 1 }}
                                        </td>
                                        <td>{{ $user->first_name. "  " .$user->last_name }}</td>
                                        <td>{{ $user->email }}
                                        </td>
                                        <td>{{ $user->birthdate }}
                                        </td>
                                        <td class="text-center"><input type="button" class="btn btn-primary" value="View" onclick="viewUser({{ $user->id }})"></td>
                                        <td class="text-center"><input type="button" class="btn btn-secondary" value="Update" onclick="sendUpdateUser({{ $user->id }})"></td>
                                        <td class="text-center"><input type="button" class="btn btn-danger" value="Delete" onclick="deleteUser({{ $user->id }})"></td>
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

    function viewUser(id) {
        window.location.href = '/viewUser/' + id;
    }

    function deleteUser(id) {

        if (confirm('Are you sure you want to delete this user?')) {
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'DELETE',
                url: '/deleteUser/' + id,
                data: {
                    '_token': csrfToken,
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    if (response['success'])
                        window.location.href = '/users';
                    else
                        alert('Failed to delete user');
                }
            });
        }
    }

    function sendUpdateUser(id) {
        window.location.href = '/updateUser/' + id;
    }
</script>

@include('includes.pageEnd')
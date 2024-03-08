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
                    <h1>All Roles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Roles</li>
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
                            <h3 class="card-title">All Roles</h3>
                            <a href="/addRole" class="btn btn-dark float-right">Add Role</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Role Name</th>
                                        <th>Role Status</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr id="updateRoleRow_{{ $role->id }}">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <input type="text" class="inputUpdateRoleName"
                                                    value="{{ $role->name }}" disabled
                                                    onblur="updateRole({{ $role->id }})"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td>{{ $role->status }}</td>
                                            <td><input type="submit" value="Update"
                                                    onclick="sendUpdateRole({{ $role->id }})"></td>
                                            <td><input type="submit" value="Delete"
                                                    onclick="deleteRole({{ $role->id }})"></td>
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

    function deleteRole(id) {

        if (confirm('Are you sure you want to delete this role?')) {
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'DELETE',
                url: '/deleteRole/' + id,
                data: {
                    '_token': csrfToken,
                },
                success: function(response) {
                    console.log(response);
                    if (response['success'])
                        window.location.href = '/roles';
                    else
                        alert('Failed to delete user');
                }
            });
        }
    }

    function sendUpdateRole(id) {
        var row = $('#updateRoleRow_' + id);

        var inputElement = row.find('.inputUpdateRoleName');
        inputElement.prop('disabled', false);
        inputElement.focus();
    }

    function updateRole(id) {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');

        var row = $('#updateRoleRow_' + id);

        var inputElement = row.find('.inputUpdateRoleName');
        inputElement.prop('disabled', true);

        $.ajax({
            type: 'PUT',
            url: '/updateRole/' + id,
            data: {
                '_token': csrfToken,
                'name': inputElement.val(),
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (!response['success'])
                    alert('Failed to update role');
            }
        });
    }
</script>

@include('includes.pageEnd')

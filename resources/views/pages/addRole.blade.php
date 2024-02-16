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
                    <h1>Role Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
                        <li class="breadcrumb-item active">Role Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputRoleName">Role Name</label>
                                        <input type="text" id="inputRoleName" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <a href="/roles" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Role" onclick="insertRole()"
                    class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
    <br>
</div>
<!-- /.content-wrapper -->

@include('includes.footer')
@include('includes.scripts')

<script>
    function insertRole() {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let data = {
            '_token': csrfToken,
            'name': $('#inputRoleName').val(),
        }
        $.ajax({
            type: 'POST',
            url: '/insertRole',
            data: data,
            dataType: 'json',
            success: function(response) {
                if (response['success'])
                    window.location.href = '/roles';
                else
                    window.location.href = '/addRole';
            }
        });
    }
</script>

@include('includes.pageEnd')

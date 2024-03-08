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
                    <h1>User Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/users">Users</a></li>
                        <li class="breadcrumb-item active">User Add</li>
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
                                        <label for="selectRole">Select Role To Assign</label>
                                        <select id="selectRole" class="form-control" autofocus>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFirstName">First Name</label>
                                        <input type="text" id="inputFirstName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputLastName">Last Name</label>
                                        <input type="text" id="inputLastName" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputMobile">Mobile</label>
                                        <input type="text" id="inputMobile" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" id="inputPassword" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNickName">Nick Name</label>
                                        <input type="text" id="inputNickName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAddress1">Address 1</label>
                                        <input type="text" id="inputAddress1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" id="inputAddress2" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputArea">Area</label>
                                        <input type="text" id="inputArea" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPincode">Pincode</label>
                                        <input type="text" id="inputPincode" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCity">City</label>
                                        <input type="text" id="inputCity" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputState">State</label>
                                        <input type="text" id="inputState" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCountry">Country</label>
                                        <input type="text" id="inputCountry" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" id="inputEmail" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSecondNumber">Second Number</label>
                                        <input type="text" id="inputSecondNumber" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputBirthdate">Birthdate</label>
                                        <input type="date" id="inputBirthdate" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAnniversaryDate">Anniversary Date</label>
                                        <input type="date" id="inputAnniversaryDate" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseFirstName">Spouse First Name</label>
                                        <input type="text" id="inputSpouseFirstName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseLastName">Spouse Last Name</label>
                                        <input type="text" id="inputSpouseLastName" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseBirthdate">Spouse Birthdate</label>
                                        <input type="date" id="inputSpouseBirthdate" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseNickName">Spouse Nickname</label>
                                        <input type="text" id="inputSpouseNickName" class="form-control">
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
                <a href="/users" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new User" onclick="insertUser()"
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
    function insertUser() {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let data = {
            '_token': csrfToken,
            'selectedRole': $('#selectRole').val(),
            'firstName': $('#inputFirstName').val(),
            'lastName': $('#inputLastName').val(),
            'mobile': $('#inputMobile').val(),
            'password': $('#inputPassword').val(),
            'nickName': $('#inputNickName').val(),
            'address1': $('#inputAddress1').val(),
            'address2': $('#inputAddress2').val(),
            'area': $('#inputArea').val(),
            'pincode': $('#inputPincode').val(),
            'city': $('#inputCity').val(),
            'state': $('#inputState').val(),
            'country': $('#inputCountry').val(),
            'email': $('#inputEmail').val(),
            'secondNumber': $('#inputSecondNumber').val(),
            'birthdate': $('#inputBirthdate').val(),
            'anniversaryDate': $('#inputAnniversaryDate').val(),
            'spouseFirstName': $('#inputSpouseFirstName').val(),
            'spouseLastName': $('#inputSpouseLastName').val(),
            'spouseBirthdate': $('#inputSpouseBirthdate').val(),
            'spouseNickName': $('#inputSpouseNickName').val(),
        }
        $.ajax({
            type: 'POST',
            url: '/insertUser',
            data: data,
            dataType: 'json',
            success: function(response) {
                if (response['success'])
                    window.location.href = '/users';
                else
                    window.location.href = '/addUser';
            }
        });
    }
</script>

@include('includes.pageEnd')

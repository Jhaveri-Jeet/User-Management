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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Nick Name</th>
                                        <th>Address 1</th>
                                        <th>Address 2</th>
                                        <th>Area</th>
                                        <th>Pincode</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Email</th>
                                        <th>Second Number</th>
                                        <th>Birthdate</th>
                                        <th>Anniversary Date</th>
                                        <th>Spouse First Name</th>
                                        <th>Spouse Last Name</th>
                                        <th>Spouse Birthdate</th>
                                        <th>Spouse Nickname</th>
                                        <th>Mobile Verified</th>
                                        <th>Email Verified</th>
                                        <th>User Status</th>
                                        <th>Optin Status</th>
                                        <th>Reference By</th>
                                        <th>Created By</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr id="updateUserRow_{{ $user->id }}">
                                            <td><input type="text" value="{{ $loop->index + 1 }}" disabled
                                                    class="inputIndex"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->first_name }}" disabled
                                                    class="inputFirstName"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->last_name }}" disabled
                                                    class="inputLastName"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->nick_name }}" disabled
                                                    class="inputNickName"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->address_1 }}" disabled
                                                    class="inputAddress1"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->address_2 }}" disabled
                                                    class="inputAddress2"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->area }}" disabled
                                                    class="inputArea"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->pincode }}" disabled
                                                    class="inputPincode"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->city }}" disabled
                                                    class="inputCity"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->state }}" disabled
                                                    class="inputState"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->country }}" disabled
                                                    class="inputCountry"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->email }}" disabled
                                                    class="inputEmail"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->second_number }}" disabled
                                                    class="inputSecondNumber"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->birthdate }}" disabled
                                                    class="inputBirthdate"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->anniversary_date }}" disabled
                                                    class="inputAnniversaryDate"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->spouse_first_name }}" disabled
                                                    class="inputSpouseFirstName"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->spouse_last_name }}" disabled
                                                    class="inputSpouseLastName"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->spouse_birthdate }}" disabled
                                                    class="inputSpouseBirthdate"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->spouse_nick_name }}" disabled
                                                    class="inputSpouseNickName"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->mobile_verified }}" disabled
                                                    class="inputMobileVerified"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->email_verified }}" disabled
                                                    class="inputEmailVerified"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->user_status }}" disabled
                                                    class="inputUserStatus"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->optin_status }}" disabled
                                                    class="inputOptinStatus"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->reference_by }}" disabled
                                                    class="inputReferenceBy"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->created_by }}" disabled
                                                    class="inputCreatedBy"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->created_at }}" disabled
                                                    class="inputCreatedAt"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="text" value="{{ $user->updated_at }}" disabled
                                                    class="inputUpdatedAt"
                                                    style="background-color: transparent; border: none; color: black">
                                            </td>
                                            <td><input type="button" value="Update"
                                                    onclick="sendUpdateUser({{ $user->id }})"></td>
                                            <td><input type="button" value="Delete"
                                                    onclick="deleteUser({{ $user->id }})"></td>
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
        var row = $('#updateUserRow_' + id);

        row.find('.inputFirstName').prop('disabled', false).focus();
        row.find('.inputLastName').prop('disabled', false);
        row.find('.inputNickName').prop('disabled', false);
        row.find('.inputAddress1').prop('disabled', false);
        row.find('.inputAddress2').prop('disabled', false);
        row.find('.inputArea').prop('disabled', false);
        row.find('.inputPincode').prop('disabled', false);
        row.find('.inputCity').prop('disabled', false);
        row.find('.inputState').prop('disabled', false);
        row.find('.inputCountry').prop('disabled', false);
        row.find('.inputEmail').prop('disabled', false);
        row.find('.inputSecondNumber').prop('disabled', false);
        row.find('.inputBirthdate').prop('disabled', false);
        row.find('.inputAnniversaryDate').prop('disabled', false);
        row.find('.inputSpouseFirstName').prop('disabled', false);
        row.find('.inputSpouseLastName').prop('disabled', false);
        row.find('.inputSpouseBirthdate').prop('disabled', false);
        row.find('.inputSpouseNickName').prop('disabled', false);
        row.find('.inputMobileVerified').prop('disabled', false);
        row.find('.inputEmailVerified').prop('disabled', false);
        row.find('.inputUserStatus').prop('disabled', false);
        row.find('.inputOptinStatus').prop('disabled', false);
        row.find('.inputReferenceBy').prop('disabled', false);
        row.find('.inputCreatedBy').prop('disabled', false);
        row.find('.inputCreatedAt').prop('disabled', false);
        row.find('.inputUpdatedAt').prop('disabled', false);
    }
</script>

@include('includes.pageEnd')

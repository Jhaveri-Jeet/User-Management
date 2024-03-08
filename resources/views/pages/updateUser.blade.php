@include('includes.styles')
@include('includes.header')
@include('includes.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/users">Users</a></li>
                        <li class="breadcrumb-item active">Update User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.card-header -->
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" id="userId"  name="id" value="{{ $users->id }}">
                                        <label for="inputFirstName">Full Name</label>
                                        <input type="text"  id="inputFirstName" value="{{ $users->first_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputLastName">Last Name</label>
                                        <input type="text"  id="inputLastName" value="{{ $users->last_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputLastName">Mobile Number</label>
                                        <input type="text"  id="inputMobile" value="{{ $users->mobile }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNickName">Nick Name</label>
                                        <input type="text"  id="inputNickName" value="{{ $users->nick_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAddress1">Address 1</label>
                                        <input type="text"  id="inputAddress1" value="{{ $users->address_1 }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text"  id="inputAddress2" value="{{ $users->address_2 }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputArea">Area</label>
                                        <input type="text"  id="inputArea" value="{{ $users->area }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPincode">Pincode</label>
                                        <input type="text"  id="inputPincode" value="{{ $users->pincode }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCity">City</label>
                                        <input type="text"  id="inputCity" value="{{ $users->city }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputState">State</label>
                                        <input type="text"  id="inputState" value="{{ $users->state }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCountry">Country</label>
                                        <input type="text"  id="inputCountry" value="{{ $users->country }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email"  id="inputEmail" value="{{ $users->email }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSecondNumber">Second Number</label>
                                        <input type="text"  id="inputSecondNumber" value="{{ $users->second_number }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputBirthdate">Birthdate</label>
                                        <input type="date"  id="inputBirthdate" value="{{ $users->birthdate }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAnniversaryDate">Anniversary Date</label>
                                        <input type="date"  id="inputAnniversaryDate" value="{{ $users->anniversary_date }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseFirstName">Spouse First Name</label>
                                        <input type="text"  id="inputSpouseFirstName" value="{{ $users->spouse_first_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseLastName">Spouse Last Name</label>
                                        <input type="text"  id="inputSpouseLastName" value="{{ $users->spouse_last_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseBirthdate">Spouse Birthdate</label>
                                        <input type="date"  id="inputSpouseBirthdate" value="{{ $users->spouse_birthdate }}" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="inputSpouseNickName">Spouse Nickname</label>
                                        <input type="text"  id="inputSpouseNickName" value="{{ $users->sopuse_nick_name }}" class="form-control">
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
                <input type="submit" value="Update User" onclick="updateUser()"
                    class="btn btn-success float-right">
            </div>
        </div>
    </section>
</div>
<script>
    function updateUser() {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let data = {
            '_token': csrfToken,
            'id': $('#userId').val(),
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
            type: 'PUT',
            url: '/updateUserData/' + $('#userId').val(), 
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
@include('includes.footer')
@include('includes.scripts')
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

<div class="content-wrapper">
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="selectRole">Roles</label>
                                        @foreach ($user_roles as $user_role)
                                            <input type="text" disabled id="inputFirstName"
                                                value="{{ $user_role->role->name }}" class="form-control mb-2">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFirstName">Full Name</label>
                                        <input type="text" disabled id="inputFirstName"
                                            value="{{ $users->first_name . ' ' . $users->last_name }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputLastName">Mobile Number</label>
                                        <input type="text" disabled id="inputLastName" value="{{ $users->mobile }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNickName">Nick Name</label>
                                        <input type="text" disabled id="inputNickName"
                                            value="{{ $users->nick_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAddress1">Address 1</label>
                                        <input type="text" disabled id="inputAddress1"
                                            value="{{ $users->address_1 }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" disabled id="inputAddress2"
                                            value="{{ $users->address_2 }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputArea">Area</label>
                                        <input type="text" disabled id="inputArea" value="{{ $users->area }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPincode">Pincode</label>
                                        <input type="text" disabled id="inputPincode" value="{{ $users->pincode }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCity">City</label>
                                        <input type="text" disabled id="inputCity" value="{{ $users->city }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputState">State</label>
                                        <input type="text" disabled id="inputState" value="{{ $users->state }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCountry">Country</label>
                                        <input type="text" disabled id="inputCountry"
                                            value="{{ $users->country }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" disabled id="inputEmail" value="{{ $users->email }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSecondNumber">Second Number</label>
                                        <input type="text" disabled id="inputSecondNumber"
                                            value="{{ $users->second_number }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputBirthdate">Birthdate</label>
                                        <input type="date" disabled id="inputBirthdate"
                                            value="{{ $users->birthdate }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAnniversaryDate">Anniversary Date</label>
                                        <input type="date" disabled id="inputAnniversaryDate"
                                            value="{{ $users->anniversary_date }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseFirstName">Spouse First Name</label>
                                        <input type="text" disabled id="inputSpouseFirstName"
                                            value="{{ $users->spouse_first_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseLastName">Spouse Last Name</label>
                                        <input type="text" disabled id="inputSpouseLastName"
                                            value="{{ $users->spouse_last_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseBirthdate">Spouse Birthdate</label>
                                        <input type="date" disabled id="inputSpouseBirthdate"
                                            value="{{ $users->spouse_birthdate }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSpouseNickName">Spouse Nickname</label>
                                        <input type="text" disabled id="inputSpouseNickName"
                                            value="{{ $users->sopuse_nick_name }}" class="form-control">
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

            </div>
        </div>
    </section>
</div>
@include('includes.footer')
@include('includes.scripts')

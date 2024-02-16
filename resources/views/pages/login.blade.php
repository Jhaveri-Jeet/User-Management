@include('includes.styles')

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Admin</b>Panel</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign In</p>

                <form>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="button" class="btn btn-primary btn-block" onclick="checkUser()">Sign
                                In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->


    @include('includes.scripts')

    <script>
        function checkUser() {
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: '/checkUser',
                data: {
                    email: $('#email').val(),
                    password: $('#password').val(),
                    '_token': csrfToken,
                },
                dataType: 'json',
                success: function(response) {
                    if (response['error'])
                        alert('Wrong Credentials');

                    window.location.href = '/';
                }
            });
        }
    </script>
    @include('includes.pageEnd')

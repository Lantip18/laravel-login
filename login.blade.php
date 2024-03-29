<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<!-- <div class="card"> 
    <div class="body">
    @if(Session::has('pesan'))
        <div class="alert alert-danger">
            {{ Session('pesan') }}
        </div>
    @endif
        <form action="{{ url('login/cek') }}" method="POST">
        {{ csrf_field() }}
        <div class="msg">
            Sign in to start your session
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">Person</i>
            </span>
            <div class="form-line">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">Lock</i>
            </span>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 p-t-5">
                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                <label for="rememberme">Remember Me</label>
            </div>
            <div class="col-xs-4">
                <button class="btn btn-black bg-pink waves-effect" type="submit">SIGN IN</button>
            </div>
        </div>
        <div class="row m-t-15 m-b--20">
            <div class="col-xs-6">
                <a href="sign-up.html">Register Now!</a>
            </div>
            <div class="col-xs-6 align-right">
                <a href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
        </form>
    </div>
</div> -->

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form action="{{ url('login/cek') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    
                    <button class="btn btn-primary btn-user btn-block" type="submit">SIGN IN</button>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
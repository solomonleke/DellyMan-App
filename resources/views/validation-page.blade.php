
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign up</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
  {{-- verification block --}}
  @if($message = Session::get('success'))
  
  <p id="success">{{$message}}</p>
  <style>
    #success{
      font-size: 25px;
      text-transform: uppercase;
    }
  </style>
  @endif

 
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Sign-up</b>Successful</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Please verify your Mail</p>
  
        <form action="" method="post">
        @if($message = Session::get('error'))
          <p> {{$message}}</p>
        @endif
          @csrf
         
            <div class="input-group mb-3">
            <input type="text" name="coupon" class="form-control" placeholder="Please input code sent to your mail">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope-open-text"></span>
              </div>
            </div>
          </div>

        
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
               
                <label for="agreeTerms">
                <p>Didn't get a code ?</p>
                <a href="#"> Resend  code</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
      
  
      
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>





<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

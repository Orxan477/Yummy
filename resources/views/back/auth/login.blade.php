<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{('/back/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{('/back/css/styles.min.css')}}" />
  <style>.logo{
    font-size: 28px;
    font-weight: 700;
    color: #000;
    margin: 0;
    font-family: var(--font-secondary);
  }
  .logo span{
    color: rgb(206, 18, 18);
  } </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <h1 class="logo">Yummy<span>.</span></h1>
                </a>
                <form method="POST" action="{{route('loginPost') }}">
                    @csrf
                    <ul style="list-style:disc;">
                    @error('general')
                        <li class="error text-danger">{{ $message }}</li>
                    @enderror  
                </ul>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}" />
                    @error('email')
                        <p class="error text-danger">{{ $message }}</p>
                    @enderror    
                </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('password')
                        <p class="error text-danger">{{ $message }}</p>
                    @enderror  
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" name="remember" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{('/back/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{('/back/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
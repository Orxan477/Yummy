<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{('/back/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{('/back/css/styles.min.css')}}" />
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
                  <img src="{{('/back/images/logos/dark-logo.svg')}}" width="180" alt="">
                </a>
                <form method="POST" action="{{ route('registerPost') }}">
                @csrf
                
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">FullName</label>
                    <input type="text" class="form-control" name="name" id="exampleInputtext1" aria-describedby="textHelp">
                    @error('name')
                        <p class="error text-danger">{{ $message }}</p>
                    @enderror  
                </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="string" name="email" class="form-control">
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
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</a>
                  <div class="d-flex align-items-center justify-content-center">
                  </div>
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

<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>register</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashassets/css/phoenix.min.css')}} " rel="stylesheet" id="style-default">
    <link href=" {{asset('dashassets/css/user.min.css')}} " rel="stylesheet" id="user-style-default">
	<style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <div class="container">
          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                <div class="d-flex align-items-center"><img src="/assets/img5.png" alt="phoenix" width="58"></div>
              </a>
              <div class="text-center mb-7">
                <h3>Sign Up</h3>
                <p class="text-700">Create your account today</p>
              </div>
              <div class="position-relative mt-4">
                <hr class="bg-200">
                <div class="divider-content-center">or use email</div>
              </div>
              <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  class="form-control" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  class="form-control"  required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control"  required><br><br>
        <button  type="submit" class="btn btn-primary w-100 mb-3">Sign up</button>
    </form>
			  @if (session('status'))
				<a href="#" >{{session('status')}}</a>
				@endif

            </div>
          </div>
        </div>
      </div>
    </main>
    <script src=" {{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="  {{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>

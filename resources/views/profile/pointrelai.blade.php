
<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MyApp</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
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
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link active" href="/profile/client">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">commande P.relais</span></div>
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">commande a domicile</span></div>                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/profile/livreur">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">livreur</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/profile/pointrelai">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">point de relais</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/profile/garcon">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">garcon</span></div>
                  </a></li>



              </ul>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">


                </div>
              </div>
            </a></div>
            <div class="collapse navbar-collapse">

            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
             </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">








                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l status-online  me-4">
                <div class="avatar-name rounded-circle"><span>{{ strtoupper(substr($user->email, 0, 1)) }}</span></div>
             </div>                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-l status-online  me-4">
                <div class="avatar-name rounded-circle"><span>{{ strtoupper(substr($user->email, 0, 1)) }}</span></div>
             </div>
              <p> {{ $user->email }}</p>
                      </div>

                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="{{ url('/profile') }}"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>

                      </ul>
                    </div>


                    <div class="px-3">
                        <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                        <form action="{{ route('logout') }}" method="post">
                        @csrf
                            <button type="submit"> <span class="me-2" data-feather="log-out"></span>Sign out</button>
                             </form>
                           </a></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content">
        <div class="position-relative mt-4">
                <hr class="bg-200">
                <div class="divider-content-center">P.relais</div>
              </div>
          <div class="pb-5">
            <div class="row g-5">
              <div>
                <br/>
              <form method="post" action="/pointrelai/formulaire/traitement">
			  @csrf
                <div class="row g-3 mb-3">
                  <div class="col-md-6"><label class="form-label">Nom</label>
                  <input class="form-control form-icon-input" type="text" name="nom" placeholder="Nom" required></div>
                  <div class="col-md-6"><label class="form-label" >Responsable</label>
                  <input class="form-control form-icon-input" type="text" name="responsable" placeholder="responsable" required></div>
				  <div class="col-md-6"><label class="form-label">Numero</label>
          <input class="form-control form-icon-input" type="text" name="numero" placeholder="numero" required></div>
                  <div class="col-md-6"><label class="form-label" >Matricule</label>
                  <input class="form-control form-icon-input" type="text" name="matricule" placeholder="matricule" required></div>
				  <div class="col-md-6"><label class="form-label">adresse</label>
          <input class="form-control form-icon-input" type="text" name="adresse" placeholder="adresse" required></div>
                  <div class="col-md-6"><label class="form-label" >Houvert</label>
                  <input class="form-control form-icon-input" type="text" name="Houvert" placeholder="Houvert" required></div>
				  <div class="col-md-6"><label class="form-label" >Hfermeture</label>
          <input class="form-control form-icon-input" type="text" name="Hfermeture" placeholder="Hfermeture" required></div>
          <div class="col-md-6"><label class="form-label" >journnée</label>
          <input class="form-control form-icon-input" type="text" name="journnée" placeholder="journnée" required></div>


				  <div class="col-md-6">
					<label class="form-label" >typeprelais</label>
					<select class="form-select" aria-label="Default select example" type="text" name="typeprelais" placeholder="typeprelais" required>

                    	<option value="Librairie">Librairie</option>
 						 <option value="kiosque shop">kiosque shop</option>
 					 	<option value="autre kiosque">autre kiosque</option>
					</select>


                </div>

</div>

                  <button class="btn btn-primary w-100 mb-3">Sign up</button>

              </form>
<div class="mt-3">


</div>




              </div>




            </div>
          </div>

        </div>
      </div>
    </main>




    <script src=" {{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="  {{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>

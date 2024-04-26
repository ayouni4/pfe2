<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Point relais</title>
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
                
              </a>
              <div class="text-center mb-7">
                <h3>DEVENIR POINT RELAIS</h3>
              
              </div>
              <div class="position-relative mt-4">
                <hr class="bg-200">
                <div class="divider-content-center">Point relais</div>
              </div>
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
              <!--  <div class="col-md-6">
    <label class="form-label">Jours de travail</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="jour_travail[]" id="lundi">
        <label class="form-check-label" for="lundi">Lundi</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="jour_travail[]" id="mardi">
        <label class="form-check-label" for="mardi">Mardi</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="jour_travail[]" id="mercredi">
        <label class="form-check-label" for="mercredi">Mercredi</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="jour_travail[]" id="jeudi">
        <label class="form-check-label" for="jeudi">Jeudi</label>
    </div>-->
</div>

                  <button class="btn btn-primary w-100 mb-3">Sign up</button>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
	<script src=" {{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="  {{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>
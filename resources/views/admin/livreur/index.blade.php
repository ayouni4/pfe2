
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
              <li class="nav-item"><a class="nav-link active" href="/admin/client">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">commande P.relais</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link active" href="/admin/domicile">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">commande a domicile</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/admin/livreur">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">livreur</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/admin/pointrelai">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">point de relais</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/admin/garcon">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">garcon</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/permissions">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">permission</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/roles">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">role</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/users">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">user</span></div>
                  </a></li>



              </ul>
            </div>
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="#!"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Settings</span></a></div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">

                <a href="/admin/dashbord">
                  <p class="logo-text ms-2 d-none d-sm-block">MyApp</p>
                </a>
                </div>
              </div>
            </a></div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block" style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/behance.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-cloud.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/slack.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/github.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/bitbucket.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-drive.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/trello.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/figma.png" alt="" width="20">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/twitter.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/pinterest.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/linkedin.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-maps.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-photos.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/spotify.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l status-online  me-4">
                <div class="avatar-name rounded-circle"><span>A</span></div>
             </div>                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-l status-online  me-4">
                <div class="avatar-name rounded-circle"><span>A</span></div>
             </div>                        <h6 class="mt-2">admin</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" placeholder="Update your status"></div>
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="{{ url('/home') }}"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/dashbord') }}"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>

                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="{{ url('/registeer') }}"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr>
                      <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
              <div>
              <h1>liste des livreurs</h1>
              <hr/>
              <a  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3">Ajouter</a>
<div class="mt-3">
<div id="tableExample2" data-list='{"valueNames":["nom","prenom","trajectoire","typedetransport","numero","matricule","actions"],"page":5,"pagination":true}'>
  <div class="table-responsive scrollbar">
    <table class="table table-bordered table-striped fs--1 mb-0">
      <thead class="bg-200 text-900">
        <tr>
        <th class="sort" data-sort="name">#</th>
          <th class="sort" data-sort="nom">nom</th>
          <th class="sort" data-sort="prenom">prenom</th>

          <th class="sort" data-sort="numero">numero</th>
          <th class="sort" data-sort="trajectoire">trajectoire</th>
          <th class="sort" data-sort="typedetransport">typedetransport</th>
          <th class="sort" data-sort="matricule">matricule</th>
          <th class="sort" data-sort="actions">actions</th>
        </tr>
      </thead>
      <tbody class="list">
      @foreach($livreurs  as $index =>$c)
    <tr>
      <th scope="row">{{ $index }}</th>
      <td>{{ $c->nom }}</td>
       <td>{{ $c->prenom }}</td>
       <td>{{ $c->numero }}</td>
      <td>{{ $c->trajectoire }}</td>
      <td>{{ $c->typedetransport }}</td>
    <td>{{ $c->matricule }}</td>
    <td>
    <a  data-bs-toggle="modal" data-bs-target="#editLivreur{{ $c->id}}" ><span class="badge fs--1 bg-secondary">modifier</span></a>

    <a onclick="return confirm('voulez-vous vraiment supprimer?') " href="/admin/livreur/{{ $c->id}}/delete"><span class="badge fs--1 bg-danger">supprimer</span></a>


    </td>

</tr>
@endforeach



      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
    <ul class="pagination mb-0"></ul>
    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
  </div>
</div>
</div>




              </div>




            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>


    <!-- modal ajouter-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Livreur</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <form action="/formulaire/traitement" method="post">
        @csrf
      <div class="modal-body">

        <div class="mb-3">
    <input class="form-control form-control-lg" type="text" name="nom" placeholder="Nom" required>

    </div>
    <div class="mb-3">
    <input class="form-control form-control" type="text" name="prenom" placeholder="Prénom" required>
    </div>
   <div class="mb-3">
    <input class="form-control form-control" type="text" name="numero" placeholder="numero" required>
   </div>
   <div class="mb-3">
   <input class="form-control form-control" name="trajectoire" placeholder="trajectoire" required>
    </div>

     <select class="form-select" aria-label="Default select example" name="typedetransport" placeholder="typedetransport" required>
     <option selected="">typedetransport</option>
    <option value="voiture">voiture</option>
     <option value="camion">camion</option>

      </select>


      <div class="mb-3">
    <input class="form-control form-control" name="matricule" placeholder="matricule" required>
       </div>



      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Okay</button>
        <p class="alert alert-danger">{{session('status')}}</p>
        </div>
    </div>
    </form>
      </div>
</div>


@foreach($livreurs  as $index =>$c)

    <!-- modal modifier-->
    <div class="modal fade" id="editLivreur{{ $c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modifier Livreur :<span class="text-primary">{{ $c->nom }}</span></h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <form action="/admin/livreur/{id}/update" method="post">
        @csrf
      <div class="modal-body">

        <div class="mb-3">
    <input class="form-control form-control-lg" type="text" name="nom" value="{{$c->nom}}" placeholder="Nom" required>

    </div>
    <div class="mb-3">
    <input class="form-control form-control" type="text" name="prenom" value="{{$c->prenom}}" placeholder="Prénom" required>
    </div>
   <div class="mb-3">
    <input class="form-control form-control" type="text" name="numero"  value="{{$c->numero}}"  placeholder="numero" required>
   </div>
   <div class="mb-3">
   <input class="form-control form-control" name="trajectoire"  value="{{$c->trajectoire}}" placeholder="trajectoire" required>
    </div>

     <select class="form-select" aria-label="Default select example" name="typedetransport"  value="{{$c->typedetransport}}"  placeholder="typedetransport" required>
     <option selected="">typedetransport</option>
    <option value="voiture">voiture</option>
     <option value="camion">camion</option>

      </select>


      <div class="mb-3">
    <input class="form-control form-control" name="matricule"  value="{{$c->matricule}}" placeholder="matricule" required>
       </div>
       <input type="hidden" value="{{ $c->id}}" name="id_livreur">


      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Okay</button>
        <p class="alert alert-danger">{{session('status')}}</p>
        </div>
    </div>
    </form>
      </div>
</div>

@endforeach
    <script src=" {{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="  {{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/images.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('client')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">CLIENT</span>
              </a>
            </li>
          
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('owner') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">PROPRIETAIRE</span>
              </a>
            </li>
          
          
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">

      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            @auth
              {{ Illuminate\Support\Facades\Auth::User()->name }}
            @endauth


              {{-- <a href="#" target="_blank" class="btn btn-primary">Download Free</a> --}}
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    @auth 
                      <form method='POST' action="{{route('logout')}}">
                        @csrf
                        <button type='submit'  class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button >
                      </form>
                    @endauth
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
      <div class="container">
<!-- client inscription -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms de Client</h5>
            
            @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <form method="post" action="{{route('clientregister')}}">
            @csrf
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nom</label>
                <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name')is-invalid @enderror" id="exampleInputPassword1">
                 @error('name')
                  <div class="alert alert-danger">{{ $message="Votre nom est trop long" }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                  <div class="alert alert-danger">{{ $message="Votre email est incorrecte" }}</div>
                @enderror
                
              </div>
              
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') @enderror" id="exampleInputPassword1">
                @error('password')
                  <div class="alert alert-danger">{{ $message="Le mot de passe doit contenir  au moins 8 caractères qui contiennent un caratère spéciale, une majiscule, une minuscule et un chiffre" }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Photo</label>
                <input type="file" value="{{old('photo')}}"  name="photo" class="form-control" id="exampleInputPassword1">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
<!-- end client inscription -->

<!-- Recent client -->
        <div class="col d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Recent clients</h5>
                @if(session('delete'))
                  <div class="alert alert-success">
                    {{session('delete')}}
                  </div>
                @endif

                @if(session('update'))
                  <div class="alert alert-warning">
                    {{session('update')}}
                  </div>
                @endif


              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Name</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Email</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Password</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Actions</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                       
                    @foreach ($list as $product )
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"> {{$product->id}} </h6></td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"> {{ $product->name }} </p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"> {{$product->email}} </p>
                        </td>
                        
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"> {{$product->password}} </p>
                        </td>

                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <a class="btn btn-warning" href=" /update/{{$product->id}}  " role="button">
                              <span class="badge bg-warning rounded-3 fw-semibold"> <i class="ti ti-edit"></i> </span>
                            </a>
                            
                            <a class="btn btn-danger" href="/delete/{{$product->id}}" role="button">
                              <span class="badge bg-danger rounded-3 fw-semibold"> <i class="ti ti-trash"></i> </span>
                            </a>
                          </div>
                        </td>
                      </tr> 
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<!-- end recent client -->
      </div>
     
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
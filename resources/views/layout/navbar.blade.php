 <!--Navbar Start-->
 <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="navbar">
     <div class="container">
         <!-- LOGO -->
         <a class="navbar-brand logo" href="{{route('index')}}">
            <h3 class="bg-dark text-white px-3 py-1 rounded-3">Vibrant Tees</h3>
             {{-- <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="logo-dark" height="24" />
             <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="logo-light" height="24" /> --}}
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
             aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <i class="mdi mdi-menu"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav mx-auto navbar-center" id="navbar-navlist">
                 <li class="nav-item">
                     <a data-scroll href="{{ route('index') }}" class="nav-link">Home</a>
                 </li>
                 <li class="nav-item">
                     <a data-scroll href="{{ route('index') . '#about' }}" class="nav-link">About</a>
                 </li>
                 <li class="nav-item">
                     <a data-scroll href="{{ route('contact.index') }}" class="nav-link">Contact</a>
                 </li>
                 <li class="nav-item">
                     <a data-scroll href="{{ route('catalog.index') }}" class="nav-link">Catalog</a>
                 </li>
                 <li class="nav-item">
                    <a data-scroll href="{{ route('collections.index') }}" class="nav-link">Collections</a>
                </li>
                 @auth
                     <li class="nav-item">
                        <a data-scroll href="{{ route('orders.index') }}" class="nav-link">Orders</a>
                    </li>
                 @endauth
             </ul>
             <ul class="navbar-nav navbar-center">
                @auth
                    <li class="nav-item">
                       
                            <a href="{{route('logout')}}" class="btn btn-link nav-link">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModalCenter-1">Register</a>
                    </li>
                @endauth
            </ul>
         </div>
     </div>
 </nav>
 <!-- Navbar End -->
 <!-- login Modal Start -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content login-page">
             <div class="modal-body">
                 <div class="text-center">
                     <h3 class="title mb-4">Welcome To Vibrant Tees</h3>
                     <h4 class="text-uppercase text-primary"><b>Login</b></h4>
                 </div>
                 <div class="login-form mt-4">
                     <form action="{{ route('login') }}" method="POST">
                         @csrf
                         <div class="form-group">
                             <label for="exampleInputUsername">Username</label>
                             <input type="text" name="name" required class="form-control"
                                 id="exampleInputUsernameONE" placeholder="Username">
                         </div>

                         <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" name="password" required class="form-control"
                                 id="exampleInputPassword1" placeholder="Password">
                         </div>
                         <div class="custom-control custom-checkbox">
                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                             <label class="custom-control-label font-size-15" for="customCheck1">Remember Me</label>
                         </div>
                         <div class="text-center mt-4">
                             <button type="submit" class="btn btn-primary">Login <i class="icon-size-15 icon ms-1"
                                     data-feather="arrow-right-circle"></i></button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- login Modal End -->

 <!-- Register Modal Start-->
 <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content login-page">
             <div class="modal-body">
                 <div class="text-center">
                     <h3 class="title mb-4">Welcome To Vibrant Tees</h3>
                     <h4 class="text-uppercase text-primary"><b>Register</b></h4>
                 </div>
                 <div class="login-form mt-4">
                     <form action="{{ route('register') }}" method="POST">
                         @csrf
                         <div class="form-group">
                             <label for="exampleInputUsername">User Name</label>
                             <input type="text" name="username" class="form-control" required
                                 id="exampleInputUsernameTWO" placeholder="Enter Name">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail2">Email</label>
                             <input type="email" required name="email" class="form-control"
                                 id="exampleInputEmail2" placeholder="Youremail@gmail.com">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword2">Password</label>
                             <input type="password" required name="password" class="form-control"
                                 id="exampleInputPassword2" placeholder="Password">
                         </div>
                         <div class="custom-control custom-checkbox">
                             <input type="checkbox" class="custom-control-input" id="customCheck2">
                             <label class="custom-control-label font-size-15" for="customCheck2">Remember Me</label>
                         </div>
                         <div class="text-center mt-4">
                             <button type="submit" class="btn btn-primary">Register <i
                                     class="icon-size-15 icon ms-1" data-feather="arrow-right-circle"></i></button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>

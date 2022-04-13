<!-- code cho nut like share facebook  -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

<!-- header -->
<nav class="navbar navbar-expand-md bg-white navbar-light">
    <div class="container">
        <!-- logo  -->
        <a class="navbar-brand" href="/" style="color: #CF111A;"><b>Buy</b>.qq</a>

        <!-- navbar-toggler  -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <!-- form tìm kiếm  -->
            <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                <div class="input-group" style="width: 520px;">
                    <input type="text" class="form-control" aria-label="Small" placeholder="Nhập sản phẩm cần tìm kiếm...">
                    <div class="input-group-append">
                        <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
            <ul class="navbar-nav mb-1 ml-auto">
                <div class="dropdown">
                    <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        @if(Auth::check())
                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">{{auth()->user()->name}}</a> @else
                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">account</a> @endif

                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if(Auth::check())
                        <a class="dropdown-item nutdangky text-center mb-2" href="/logout">Logout</a> @else
                        <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal" data-target="#formdangky">Register</a>
                        <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal" data-target="#formdangnhap">Login</a> @endif
                    </div>
                </div>
                <li class="nav-item giohang">
                    <a href="gio-hang.html" class="btn btn-secondary rounded-circle">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="cart-amount">0</div>
                    </a>
                    <a class="nav-link text-dark giohang text-uppercase" href="{{url('cart')}}" style="display:inline-block">cart</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- form dang ky khi click vao button tren header-->
<div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                    <li class="tab tab-dangnhap text-center">
                        <a class=" text-decoration-none">Login</a>
                        <hr>
                    </li>
                    <li class="tab tab-dangky text-center">
                        <a class="text-decoration-none">Register</a>
                        <hr>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="register-test" id="form-signup" class="form-signin mt-2" method="post">
                    @csrf
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="username... " name="name" required autofocus>
                    </div>
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="email... " name="email" required>
                    </div>
                    <div class="form-label-group">
                        <input type="password" class="form-control" placeholder="password.... " name="password" required>
                    </div>
            </div>
            <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit" style="background: #F5A623">Register</button>

            <div class="custom-control custom-checkbox">
                <p class="text-center"></p>
            </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- form dang nhap khi click vao button tren header-->
<div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1" aria-labelledby="dangnhap_tieude" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                    <li class="tab tab-dangnhap text-center">
                        <a class=" text-decoration-none">Login</a>
                        <hr>
                    </li>
                    <li class="tab tab-dangky text-center">
                        <a class="text-decoration-none">Register</a>
                        <hr>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/login-test" id="form-signin" class="form-signin mt-2" method="post">
                    @csrf
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Email..." name="email" required autofocus>
                    </div>

                    <div class="form-label-group">
                        <input type="password" class="form-control" placeholder="Password..." name="password" required>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                        <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Remember password</a>
                    </div>

                    <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit" style="background: #F5A623">Login</button>
                    <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                            class="fab fa-google mr-2"></i> Sign in with Google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                            class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                </form>
            </div>
        </div>
    </div>
</div>
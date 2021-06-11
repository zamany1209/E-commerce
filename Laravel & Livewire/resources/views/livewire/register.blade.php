    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="login" class="btn_3">Login an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="{{ route('auth.create') }}" method="post">
                                @csrf
                                <p class="danger">
                                @if(Session::get('Success'))
                                    {{ Session::get('Success') }}
                                @endif
                                @if(Session::get('false'))
                                    {{ Session::get('false') }}
                                @endif
                                @if(Session::get('error_password'))
                                    {{ Session::get('error_password') }}
                                @endif
                                </p>
                                <div class="col-md-12 form-group p_star">
                                    <span>@error('name') {{ $message }} @enderror</span>
                                    <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}" placeholder="Name">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <span>@error('family') {{ $message }} @enderror</span>
                                    <input type="text" class="form-control" name="family" id="" value="{{ old('family') }}" placeholder="Family">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <span>@error('phone') {{ $message }} @enderror</span>
                                    <input type="text" class="form-control" name="phone" id="" value="{{ old('phone') }}" placeholder="Phone">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <span>@error('email') {{ $message }} @enderror</span>
                                    <input type="email" class="form-control" name="email" id="" placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" name="password" id="" placeholder="password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" name="password_2" id="" placeholder="re_password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

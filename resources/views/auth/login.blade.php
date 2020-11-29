@extends('layouts.front')
@section('title', 'Login')
@section('content')

  <div class="page-breadcrumb">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <ul class="page-breadcrumb__menu">
                      <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                      <li class="page-breadcrumb__nav active">Login</li>
                  </ul>
              </div>
          </div>
      </div>
  </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->
  <!-- ::::::  Start  Main Container Section  ::::::  -->
  <main id="main-container" class="main-container">
      <div class="container justify-content-between align-items-center">
          <div class="row">
              <div class="col-12">
                  <div class="section-content m-b-40">
                      <h5 class="section-content__title text-center">My account</h5>
                  </div>
              </div>
              <!-- Start Login Area -->
              <div class="col-lg-6 col-12">
                  <div class="login-form-container ">
                      <h5 class="sidebar__title">Login</h5>
                      <div class="login-register-form">
                          <form action="{{ route('login') }}" method="post">
                              @csrf
                              <div class="form-box__single-group">
                                  <label for="email">Email address *</label>
                                  <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    autocomplete="email" placeholder="Username" required>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-box__single-group">
                                  <label for="password">Password *</label>
                                  <div class="password__toggle">
                                      <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror"
                                        autocomplete="current-password" placeholder="Enter password" required>
                                      <span data-toggle="#password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                                  </div>
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                  <label for="remember">
                                      <input type="checkbox" name="remember" id="remember">
                                      <span>Remember me</span>
                                  </label>
                                  <a class="link--gray" href="">Forgot Password?</a>
                              </div>
                              <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">LOGIN</button>
                          </form>
                          <br />
                          <p>Do have an account yet? <a href="{{ route('register') }}">Sign Up</a></p>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection
{{--
<div class="col-lg-6 col-12">
    <div class="login-form-container">
        <h5 class="sidebar__title">Register</h5>
        <div class="login-register-form">
            <form action="#" method="post">
                @csrf
                <div class="form-box__single-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-box__single-group">
                    <label for="username">Username *</label>
                    <input type="text" id="username" name="username" class="@error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" required>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-box__single-group">
                    <label for="form-uregister-sername-email">Email address *</label>
                    <input type="email" id="form-uregister-sername-email" placeholder="Enter email" required>
                </div>
                <div class="form-box__single-group m-b-20">
                    <label for="form-register-username-password">Password *</label>
                    <div class="password__toggle">
                        <input type="password" id="form-register-username-password" placeholder="Enter password" required>
                        <span data-toggle="#form-register-username-password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                    </div>
                </div>
                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">REGISTER</button>
            </form>
        </div>
    </div>
</div>   --}}

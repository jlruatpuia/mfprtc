@extends('layouts.front')
@section('title', 'Register')
@section('content')

  <div class="page-breadcrumb">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <ul class="page-breadcrumb__menu">
                      <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                      <li class="page-breadcrumb__nav active">Register</li>
                  </ul>
              </div>
          </div>
      </div>
  </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->
  <!-- ::::::  Start  Main Container Section  ::::::  -->
  <main id="main-container" class="main-container">
      <div class="container d-flex justify-content-center">
          <div class="row">
              <div class="col-12">
                  <div class="section-content m-b-40">
                      <h5 class="section-content__title text-center">My account</h5>
                  </div>
              </div>

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
                                  <label for="email">Email address *</label>
                                  <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email" required>
                              </div>
                              <div class="form-box__single-group m-b-20">
                                  <label for="password">Password *</label>
                                  <div class="password__toggle">
                                      <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" autocomplete="new-password" placeholder="Enter password" required>
                                      <span data-toggle="#form-register-username-password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                                  </div>
                              </div>
                              <div class="form-box__single-group m-b-20">
                                  <label for="password-confirm">Confirm Password *</label>
                                  <input type="password" id="password-confirm" name="password-confirmation" class="@error('password') is-invalid @enderror" autocomplete="new-password" placeholder="Confirm password" required>
                              </div>
                              <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">REGISTER</button>
                          </form>
                          <br />
                          <p>Already registered? <a href="{{ route('login') }}">Login</a></p>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection

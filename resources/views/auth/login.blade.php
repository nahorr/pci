@extends('layouts.app')
@section('content')

    <!-- Login -->
    <section class="g-bg-gray-light-v5">
        <div class="container g-py-150">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-5">
              <div class="u-shadow-v21 g-bg-white rounded g-py-40 g-px-30">
                <header class="text-center mb-4">
                  <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                </header>

                <!-- Form -->
                <form class="g-py-15" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email:</label>
                        <input id="email" type="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" placeholder="Your Email" required>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="g-mb-35">
                        <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                        <input id="password" type="password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3 @error('password') is-invalid @enderror" name="password" placeholder="Password" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="row justify-content-between">
                            <div class="col align-self-center">
                                <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                    <i class="fa" data-check-icon="&#xf00c"></i>
                                </div>
                                    Keep signed in
                                </label>
                            </div>
                            <div class="col align-self-center text-right">
                                @if (Route::has('password.request'))
                                    <a class="g-font-size-12" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Login</button>
                    </div>
                </form>
                <!-- End Form -->

                <footer class="text-center">
                  <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a class="g-font-weight-600" href="{{route('register')}}">signup</a>
                  </p>
                </footer>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End Login -->

@endsection

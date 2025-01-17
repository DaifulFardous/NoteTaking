<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Registration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">


<link href="{{ asset('assets') }}/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets') }}/login/signin.css" rel="stylesheet">
  </head>
  <body class="text-center text-bg-dark">

<main class="form-signin w-100 m-auto">
  <form action="{{ url('register') }}" method="POST">
    @csrf
    <h1 class="text-white">SimpleNotes</h1>
    <h4 class="h3 mb-3 fw-normal">Please sign up</h4>

    <div class="form-floating">
        <input class="form-control" id="floatingInput" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
        <label for="floatingInput" class="text-dark">Name</label>
        @if ($errors->has('name'))
        <div class="alert alert-danger" role="alert">
            <x-input-error :messages="$errors->get('name')" />
        </div>
    @endif
      </div>
    <div class="form-floating">
      <input class="form-control" id="floatingInput" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
      <label for="floatingInput" class="text-dark">Email address</label>
      @if ($errors->has('email'))
      <div class="alert alert-danger" role="alert">
          <x-input-error :messages="$errors->get('email')" />
      </div>
  @endif
    </div>
    <div class="form-floating">
      <input class="form-control" id="floatingPassword"  type="password"
      name="password"
      required autocomplete="current-password">
      <label for="floatingPassword" class="text-dark">Password</label>
      @if ($errors->has('password'))
      <div class="alert alert-danger" role="alert">
          <x-input-error :messages="$errors->get('password')" />
      </div>
  @endif
    </div>
    <div class="form-floating">
      <input class="form-control" id="floatingPassword"  type="password"
      name="password_confirmation" required autocomplete="new-password">
      <label for="floatingPassword" class="text-dark">Password Confirmation</label>
      @if ($errors->has('password_confirmation'))
      <div class="alert alert-danger" role="alert">
          <x-input-error :messages="$errors->get('password_confirmation')" />
      </div>
  @endif
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>



  </body>
</html>

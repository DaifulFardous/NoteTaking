<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    @if(Request::is('dashboard'))
     <title>Dashboard</title>
    @elseif (Request::is('create/note'))
     <title>Create Note</title>
    @elseif(Request::is('note/list'))
     <title>All Notes</title>
    @elseif(Request::is('edit/note/{id}'))
     <title>Edit Notes</title>
    @elseif(Request::is('notes/search'))
     <title>Search Notes</title>
    @endif

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">





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

    <link href="{{ asset('assets') }}/dashboard/dashboard.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

  </head>
  <body>
<form action="{{ route('notes.search') }}" method="POST">
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ url('/') }}">SimpleNotes</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" name="query" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">Search</button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    </form>
      <form class="nav-link px-3" method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    </div>
  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link @if(Request::is('dashboard')) active @endif" aria-current="page" href="{{ route('dashboard') }}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Your Notes</span>
          </h6>
       <ul>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('create/note')) active @endif" href="{{ route('create') }}">
              <span data-feather="file" class="align-text-bottom"></span>
             Create New Note
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('note/list')) active @endif" href="{{ route('note.list') }}">
              <span data-feather="file" class="align-text-bottom"></span>
             All Notes
            </a>
          </li>
        </ul>
      </div>
    </nav>
 @yield('content')
  </div>
</div>

    <script src="{{ asset('assets') }}/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script></script>
  </body>
</html>
@extends('master')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
    </div>
    <!-- Welcome message -->
<div class="alert alert-info" role="alert">
    <strong>Welcome back,{{ Auth::user()->name }}!</strong>
</div>

<!-- Get Started section -->
<h2>Get Started</h2>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Create a New Note</h5>
        <p class="card-text">Start jotting down your thoughts, ideas, or to-do lists by creating a new note. Click on the "New Note" button to begin.</p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Organize Your Notes</h5>
        <p class="card-text">Stay organized by categorizing your notes into different notebooks or categories. Use tags, colors, or labels to easily identify and sort your notes.</p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Search Your Notes</h5>
        <p class="card-text">Looking for something specific? Use the search bar to quickly find notes by title, content, or tags.</p>
    </div>
</div>

  </main>
@endsection

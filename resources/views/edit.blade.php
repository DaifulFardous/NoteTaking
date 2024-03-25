@extends('master')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Note</h1>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                 @endif
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Take Note</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.note') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="note_title" class="font-weight-bold h4">Title</label>
                                <input type="text" class="form-control form-control-lg" id="note_title" name="title" placeholder="Enter note title" value="{{ $note->title }}">
                                <input type="hidden" class="form-control form-control-lg" id="note_title" name="id" value="{{ $note->id }}>
                            </div>
                            <div class="form-group">
                                <label for="note_content" class="font-weight-bold h4">Content</label>
                                <textarea class="form-control form-control-lg" id="note_content" name="content" placeholder="Enter note content" rows="20">{{ $note->content }}</textarea>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary btn-lg btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    <script>
        // Initialize CKEditor 5
        ClassicEditor
            .create( document.querySelector( '#note_content' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

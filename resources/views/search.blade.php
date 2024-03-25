@extends('master')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Serach Result</h1>
    </div>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
 @endif
 @if ($notes->isEmpty())
 <div class="alert alert-warning" role="alert">
    No Search Found!
  </div>
 @else
    <div class="container mt-5">
        <h2 class="mb-3">Notes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>Last Modified</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->content }}</td>
                    <td>{{ $note->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $note->updated_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('edit.note', $note->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="" onclick="confirmDelete(event, {{ $note->id }})" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</main>
<script>
    function confirmDelete(event, noteId) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this note?')) {
            window.location.href = "{{ url('destroy/note') }}/" + noteId;
        }
    }
</script>
@endsection

@extends('layout.default')

@section('content')
    <h1>Pending Comments</h1>

    <div class="comments">
        @if ($comments->isEmpty())
            <p>No pending comments.</p>
        @else
            <ul>
                @foreach ($comments as $comment)

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comment->name }}</h5>
                        <p class="card-text">{{ $comment->text }}</p>
                    </div>
                    <form action="{{ route('comments.approve', $comment) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn mt-2 btn-outline-success">Approve</button>
                    </form>
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn mt-2 btn-outline-danger">Delete</button>
                    </form>                    
                </div>

                @endforeach
            </ul>
        @endif
    </div>
@endsection

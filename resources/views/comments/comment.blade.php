<div class="row mt-5">
    <div class="col-lg-6">
        @if ($comments->count() === 0)
            <p>No comments yet.</p>
        @else
        @foreach ($comments as $comment)
        @if ($comment->approved)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $comment->name }}</h5>
                    <p class="card-text">{{ $comment->text }}</p>
                </div>
            </div>
        @endif
        @endforeach
        @endif
    </div>
</div>
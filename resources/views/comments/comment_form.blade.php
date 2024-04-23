<div class="row">
    <div class="col-lg-6">
        <h2>Leave a Comment</h2>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea name="text" id="text" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn mt-2 btn-primary">Submit Comment</button>
        </form>
    </div>
</div>
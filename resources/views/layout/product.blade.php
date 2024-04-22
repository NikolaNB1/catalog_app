<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <img class="card-img-top" src="{{ $product->image_url }}" alt="{{ $product->title }}">
        <div class="card-body">
            <h3 class="card-title">Title: {{ $product->title }}</h3>
            <p class="card-text">Description: {{ $product->description }}</p>
        </div>
    </div>
</div>
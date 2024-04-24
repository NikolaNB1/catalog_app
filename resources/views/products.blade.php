@extends('layout.default')

@section('content')
<div class="row">
    @foreach ($products as $product)
        @include('layout.product')
    @endforeach
    <div class="mt-5 mb-5">
        {{ $products->links() }}
    </div>
    @include('comments.comment_form')
    @include('comments.comment')
</div>
@endsection

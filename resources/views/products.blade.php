@extends('layout.default')

@section('content')
<div class="row">
    @foreach ($products as $product)
        @include('layout.product')
    @endforeach
    @include('comments.comment_form')
    @include('comments.comment')
</div>
@endsection

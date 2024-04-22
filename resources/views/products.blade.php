@extends('layout.default')

@section('content')
<div class="row">
    @foreach ($products as $product)
        @include('layout.product')
    @endforeach
</div>
@endsection

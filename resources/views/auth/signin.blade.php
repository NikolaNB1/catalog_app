@extends('layout.default')


@section('content')
<div class="form-signin m-auto container w-25">
    <form action="{{url('signin')}}" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal m-2">Sign In</h1>
      <div class="form-floating m-2">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating m-2 mb-3">
        <input id="floatingInput" type="password" class="form-control" placeholder="Password" name="password" required>
        <label for="floatingInput">Password</label>
      </div>
      <button type="submit" class="btn btn-lg btn-outline-info m-2">Sign in</button>
    </form>
    @include('layout.errors')
    @include('layout.session')
</div>
@endsection 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">Catalog</a>
      @if(!auth()->check())
        <a class="nav-link" aria-current="page" href="/signin">Sign in</a>
      @endif
      @auth
        <a class="nav-link" aria-current="page" href="{{ route('comments.pending') }}">Pending comments</a>
        <a class="nav-link" aria-current="page" href="/signout">Logout</a>
      @endauth
    </div>
</nav>
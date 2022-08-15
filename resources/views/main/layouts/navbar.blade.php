<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/home"><img src="/assets/img/logo-text-3.png" style="max-width: 120px;" alt="Stagram"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active me-2" href="/home"><i class="bi bi-house bold"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" href="/post/create"><i class="bi bi-plus-square"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu rounded-1">
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out </button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
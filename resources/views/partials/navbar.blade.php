<nav class="navbar navbar-expand-lg bg-nav">
    <div class="container-fluid px-3 py-2">
      <span class="navbar-brand mb-0"><a href="/dashboard/posts" class="text-decoration-none text-dark fw-bold me-3">Rifki Codepolitan Blog</a></span>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</i></a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</i></a>
          </li>
          <li class="nav-item">
            <a href="/posts" class="nav-link {{ Request::is('posts') ? 'active' : '' }}">Blog</i></a>
          </li>
        </ul>
        @can('admin')
          <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('dashboard/categories') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrator
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/categories">Categories</a></li>
            </ul>
          </li>
          </ul>
        @endcan
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back!, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/posts"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a href="/register" class="nav-link {{ Request::is('register') ? 'active' : '' }}">Register <i class="bi bi-person-add"></i></a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link {{ Request::is('login')  ? 'active' : '' }}">Login <i class="bi bi-box-arrow-in-right"></i></a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
</nav>
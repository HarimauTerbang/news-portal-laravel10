<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard/posts*') ? 'active' : '' }}"  href="/dashboard/posts">
            <span data-feather="file"></span>
            BERITA
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard/announcements*') ? 'active' : '' }}" href="/dashboard/announcements">
            <span data-feather="file-text"></span>
            PENGUMUMAN
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard/massages*') ? 'active' : '' }}" href="/dashboard/massages">
            <span data-feather="message-circle"></span>
            PESAN
          </a>
        </li>
      </ul>
  </nav>
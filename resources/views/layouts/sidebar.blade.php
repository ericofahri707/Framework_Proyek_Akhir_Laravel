      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('mahasiswa') ? 'active' : '' }}" href="/mahasiswa">
                <span data-feather="users"></span>
                Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" {{ Request::is('dosen') ? 'active' : '' }}" href="/dosen">
                <span data-feather="users"></span>
                Dosen
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" {{ Request::is('matakuliah') ? 'active' : '' }}" href="/matakuliah">
                <span data-feather="file"></span>
                Matakuliah
              </a>
            </li>
          </ul>
        </div>
      </nav>
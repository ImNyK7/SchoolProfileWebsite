<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/">
              <span data-feather="file" class="align-text-bottom"></span>
              Beranda
            </a>
          </li>  
        <li class="nav-item">
            <a class="nav-link {{ Request::is('datasekolah') ? 'active' : '' }}" aria-current="page" href="/datasekolah">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('datasekolah/datasiswa*') ? 'active' : '' }}" href="/datasekolah/datasiswa">
              <span data-feather="file" class="align-text-bottom"></span>
              Data Siswa
            </a>
          </li>
        </ul>
      </div>
    </nav>
<nav>
            <a href="index.html"><img src="img/logo.png"></a>
            <div class="nav-links" >
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/about">Tentang</a></li>
                    <li><a href="/jurusan">Jurusan</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    @auth
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
                        </form>
                    <li><a href="/datasekolah"><i class="bi bi-table"></i>DataSekolah</a></li>
                    @else
                    <li><a href="/login"><i class="bi bi-person-circle"></i>Login</a></li>
                    @endauth
                </ul>

            </div>
        </nav>
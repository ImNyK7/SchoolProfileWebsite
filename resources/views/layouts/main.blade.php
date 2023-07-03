<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>SMK JATINEGARA 7 GRESIK</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <section class="header">
        
    @include('partials.navbar')
    
    <div class="container">
        @yield('container')
    </div>
    </section>

    <!---------Jurusan---------->

    @include('partials.jurusan')

    <!------ Fasilitas ------->

    <selection class="Fasilitas">
        <h1>Fasilitas Kami</h1>
        <p>Sekolah kami dilengkapi fasilitas-fasilitas yang lengkap dan dapat membuat siswa-siswa nyaman disekolah.</p>
        <div class="row">
            <div class="fasilitas-col">
                <img src="img/perpus.jpg">
                <h3>Perpustakaan</h3>
                <p>Perpustakaan yang nyaman dilengkapi AC yang sejuk, dan buku yang lengkap.</p>
            </div>
            <div class="fasilitas-col">
                <img src="img/lapangan.jpg">
                <h3>Lapangan Olahraga</h3>
                <p>Kami memiliki lapangan olahraga yang cukup luas dan lengkap untuk bermain beberapa olahraga.</p>
            </div>
            <div class="fasilitas-col">
                <img src="img/kantin.jpg">
                <h3>Kantin</h3>
                <p>Menyediakan kantin yang nyaman dan luas, berbagai macam makanan yang sehat dan bergizi.</p>
            </div>
        </div>
    </selection>


    <!--------Review-------->

    <section class="Review">
        <h1>Testimoni</h1>
        <p>Berikut adalah apa yang dikatakan para almuni pada sekolah kami.</p>

        <div class="row">
            <div class="review-col">
                <img src="img/person1.jpg">
                <div>
                    <p>Sekolah ini merupakan sekolah terfavorit di kota,
                        memiliki banyak guru yang ramah dan pintar, serta fasilitas yang lengkap.</p>
                        <h3>Putri Anggun</h3> 
                </div>
            </div>
            <div class="review-col">
                <img src="img/person2.jpg">
                <div>
                    <p>Menimbah ilmu disekolah ini adalah keputusan yang Terbaik
                        dalam hidup saya, saya disini dapat memiliki banyak teman yang baik.</p>
                        <h3>Andi Wijaya</h3>
                </div>
            </div>
        </div>
    </section>

    <!----Call---->

    <section class="call">
        <h1>Hubungi Kami Darimanapun</h1>
        <a href="" class="hero-btn">Hubungi Kami</a>
    </section>

    @include('partials.footer')

</body>
</html>
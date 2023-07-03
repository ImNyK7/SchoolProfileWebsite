@extends('layouts.sub')

@section('container')
        <h1>Pilihan Jurusan</h1>
    </section>
    <!----Jurusan---->
    @include('partials.jurusan')
    <!----Fasilitas---->

    <selection class="Fasilitas">
        <h1>Jurusan</h1>
        <p>Jurusan sekolah kami meliputi Multimedia, Akuntansi, dan permesinan.</p>
        <div class="row">
            <div class="fasilitas-col">
                <img src="img/multimedia.jpg">
                <h3>Multimedia</h3>
                <p>Belajar multimedia di SMK berarti kita belajar bagaimana menyajikan data dalam bentuk suara, animasi, teks, gambar, maupun video.</p>
            </div>
            <div class="fasilitas-col">
                <img src="img/akuntansi.jpg">
                <h3>Akuntansi</h3>
                <p>Jurusan Akuntansi adalah bidang studi yang mempelajari materi terkait metode pencatatan dan penyusunan laporan keuangan yang berguna membantu pemangku kepentingan dalam proses pengambilan keputusan.</p>
            </div>
            <div class="fasilitas-col">
                <img src="img/permesinan.jpg">
                <h3>Permesinan</h3>
                <p>Permesinan adalah suatu disiplin ilmu teknik yang menggabungkan fisika teknik dan prinsip-prinsip matematika dengan ilmu material (bahan) untuk mendesain, menganalisa, dan membuat serta mempertahankan sistem mekanis.</p>
            </div>
        </div>
    </selection>

    @include('partials.footer')
        
@endsection
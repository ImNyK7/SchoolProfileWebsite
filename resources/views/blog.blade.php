@extends('layouts.sub')

@section('container')
        <h1>Program Unggulan & Program Online Tahun 2022</h1>
    </section>

    <!----Blog---->
    <section class = "blog-content">
      
        <div class = "row">
            <div class="blog-left">
        <img src="img/blog.jpg">
        <h2>Program Unggulan & Program Online Tahun 2022</h2>
        <p> Program unggulan adalah sejumlah siswa yang karena prestasinya menonjol, 
            dikelompokan dalam satu kelas khusus. Sistem pelaksanaan 
            pembelajaranya dengan menerapkan kurikulum plus ditambah pendalaman materi Bahasa Indonesia, 
            Bahasa Inggris, Matematika, IPA 
            dan beberapa ekstra kurikuler untuk mengembangkan minat, bakat 
            dan kemampuan para siswa. Pembelajaran unggul dapat memudahkan 
            dalam membina dan mengembangkan kecerdasan, keterampilan, kemampuan,
            bakat, minat, sikap dan perilaku siswa agar siswa memiliki indikator prestasi 
            yang tinggi dan unggul sesuai dengan potensinya.</p>
        <br>
        <p>Demi memfasilitasi pembelajaran dari rumah, platform pembelajaran blended learning di Sekolah kami menyatakan kesiapannya berkontribusi dalam penyediaan program belajar berbasis digital bagi semua siswa,
             guru, dan orangtua di setiap jenjang pendidikan di Indonesia.</p>
            
             <div class = "comment-box">
                 <h3>Kritik dan Saran</h3>
                 <form class="comment-form">
                     <input type="text" placeholder="Nama">
                     <input type="email" placeholder ="Email">
                     <textarea rows="5" placeholder="Your Comment">
                     </textarea>
                     <button type="submit" class = "hero-btn red-btn">KIRIM</button>
                 </form>
             </div>
           
            </div>
        <div class = "blog-right">
            <h3>Jumlah Peraih Prestasi</h3>
            <div>
                <span>Multimedia</span>
                <span>40</span>
                <div>
                </div>
                <span>Akuntansi</span>
                <span>67</span>
                <div>
                </div>
                <span>Permesinan</span>
                <span>89</span>
            </div>
        </div>
     </div>
 </section>
   

    <!----Footer---->
    @include('partials.footer')
    
@endsection
@extends('layouts.sub')

@section('container')
        <h1>Hubungi Kami</h1>
    </section>
   
    <!----Contact Us---->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31669.30257757428!2d112.6529375!3d-7.164921449999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800504acb3253%3A0x25d71798cd652fb9!2sGresik%2C%20Gresik%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1650770886346!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-us">
  
    <div class = "row">
        <div class ="contact-col">
            <div>
            <i class="fa fa-home"></i>
            <span>
                <h5>XYZ Road, ABC Building</h5>
                <p>Jl.Jaksa Agung Suprapto,Gresik</p>
            </span>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <span>
                <h5>+62, 08123456789</h5>
                <p>Senin Hingga Sabtu</p>
            </span>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <span>
                <h5>info@Smk7jatinegara</h5>
                <p>Email Kami</p>
            </span>
        </div>
    </div>
    <div class ="contact-col">

        <form action="">
            <input type="text" placeholder="Nama"required>
            <input type="email" placeholder="Email"required>
            <input type="text" placeholder="Subjek"required>
            <textarea  rows="8" placeholder="Pesan" required></textarea>
            <button type="submit" class="hero-btn red-btn">Kirim</button>
        </form>

    </div>
    </div>
</section>
@include('partials.footer')
        
@endsection
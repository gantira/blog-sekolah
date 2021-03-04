<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a>
            <i class="icofont-phone"></i> {{ env('PHONE') }}
        </div>
        <div class="social-links">
            {{-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> --}}
            <a href="{{ env('FACEBOOK') }}" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="{{ env('INSTAGRAM') }}" class="instagram"><i class="icofont-instagram"></i></a>
            {{-- <a href="#" class="skype"><i class="icofont-skype"></i></a> --}}
            {{-- <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> --}}
        </div>
    </div>
</section>

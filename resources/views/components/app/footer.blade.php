<footer id="footer">

    {{-- <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contacts.index') }}">Contact</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('galleries.index') }}">Gallery</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('articles.index') }}">Articles</a>
                        </li>
                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div> --}}

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        {{ env('ADDRESS')}} <br><br>
                        <strong>Phone:</strong> {{ env('PHONE') }}<br>
                        <strong>Email:</strong> {{ env('EMAIL') }}<br>
                    </p>

                </div>

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>About</h3>
                    <p>SMP Mazaya Islamic Boarding School mengutamakan Al-Quran dan Al-Hadist sebagai pondasi utama
                        pendidikan yang mengintegrasikan pendidikan formal dengan pendidikan karakter bela agama</p>
                    <div class="social-links mt-3">
                        {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                        <a href="{{ env('FACEBOOK') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{ env('INSTAGRAM') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                        {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>

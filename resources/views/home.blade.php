<x-guest-layout>

    <x-slot name="hero">
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background: url(eterna/img/slide/slide-1.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">
                                        <span>{{ config('app.name') }}</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">SMP Mazaya Islamic Boarding School
                                        mengutamakan Al-Qur'an dan Al-Hadist sebagai pondasi utama pendidikan yang
                                        mengintegrasikan pendidikan formal dengan pendidikan karakter bela negara.</p>
                                    <a href="http://ppdb.smpmazayaibs.sch.id/"
                                        class="btn-get-started animate__animated animate__fadeInUp">Daftar</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background: url(eterna/img/slide/slide-2.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid
                                        qui
                                        aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias
                                        dolorem
                                        mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus
                                        deleniti
                                        vel. Minus et tempore modi architecto.</p>
                                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background: url(eterna/img/slide/slide-3.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime Lara</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid
                                        qui
                                        aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias
                                        dolorem
                                        mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus
                                        deleniti
                                        vel. Minus et tempore modi architecto.</p>
                                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </section>
    </x-slot>

    <main id="main">

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <i class="icofont-computer"></i>
                            <h3><a href="">Character</a></h3>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-image"></i>
                            <h3><a href="">Integrity</a></h3>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-tasks-alt"></i>
                            <h3><a href="">Competence</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('eterna/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Hatam makna Al-Qur'an dan 20 Himpunan</li>
                            <li><i class="icofont-check-circled"></i> Tahfidz 7 Juz (Juz 30, 1-5 dan surat-surat
                                pilihan)</li>
                            <li><i class="icofont-check-circled"></i> Pengaturan & Pengawasan Jadwal Kegiatan 24 Jam
                            </li>
                            <li><i class="icofont-check-circled"></i> Lingkungan yang kondusif</li>
                            <li><i class="icofont-check-circled"></i> Pembentukan kemandirian dan evaluasi dengan ujian
                                kemandirian</li>
                            <li><i class="icofont-check-circled"></i> Evaluasi pembelajaran KBM & Boarding dilakukan
                                secara berkala</li>
                            <li><i class="icofont-check-circled"></i> Pendidikan formal yang berintegrasi dengan
                                pendidikan agama</li>
                            <li><i class="icofont-check-circled"></i> Sistem small class (1 kelas maksimal 25 orang)
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Prestasi</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Juara 1 Tahfidz</a></h4>
                            <p>(Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi)</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Juara 1 MHQ</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Juara 1 Speech Contest</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Juara 1 Pengetahuan Seni Budaya</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">10 Medali Emas</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <x-app.section-clients />
        <!-- End Clients Section -->
    </main>
</x-guest-layout>

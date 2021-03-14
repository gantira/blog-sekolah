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
                                    <h2 class="animate__animated fanimate__adeInDown"><span>Fasilitas</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        Mesjid, Asrama Putra, Asrama Putri, Gedung Sekolah, Lapangan Olahraga, Lab IPA, Lab Komputer, Ruang Makan, Ruang Laundry, Koperasi, Taman dan Gazebo, Gedung Serbaguna, Perpustakaan, Unit Kesehatan Siswa
                                    </p>
                                    {{-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background: url(eterna/img/slide/slide-3.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown"><span>Fasilitas</span> Pelayanan
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        Laundry, Makan 3x sehari, Keamanan (Security 24 Jam), Kesehatan, Bimbingan konseling
                                    </p>
                                    {{-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> --}}
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
                    @foreach ($posts as $item)
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <blockquote>
                                <h3><a href="{{ route('articles.show', $item->slug) }}">{{ \Str::limit($item->title, 55) }}</a></h3>
                            </blockquote>
                            <p>{!! \Str::limit(strip_tags($item->body), 30) !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Featured Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('banner.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Kenapa harus memilih SMP Mazaya Islamic Boarding School?</h3>
                        <p class="font-italic">
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
                        {{-- <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p> --}}
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
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Juara 1 Tahfidz</a></h4>
                            <p>(1 Juz Musabaqoh)</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Juara 1 MHQ</a></h4>
                            <p>(Pentas PAI Putra Musabaqoh Hifdzin Qur'an)</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Juara 1 Speech Contest</a></h4>
                            <p>SMANSA English Contest</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Juara 1 Pengetahuan Seni Budaya</a></h4>
                            <p>PRATAMA BN 666 Cup</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">10 Medali Emas</a></h4>
                            <p>Pakubumi Cup Asia Eropa 2017</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        {{-- <x-app.section-clients /> --}}
        <!-- End Clients Section -->
    </main>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('eterna/img/banner.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <a href="http://ppdb.smpmazayaibs.sch.id/" class="btn btn-success btn-block">DAFTAR</a>
                </div>
            </div>
        </div>
    </div>

    {{-- @push('js')
    <script>
        $(document).ready(function() {
            $('#myModal').modal('show')
        });
    </script>
    @endpush --}}


</x-guest-layout>

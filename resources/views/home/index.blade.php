@extends('layouts.frontend.app', [
    'title' => 'Home',
])
@section('content')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/bg') }}/alr.jpeg); background-position: center; background-size: cover;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <!-- Hero Content -->
                    <div class="hero-content animated fadeIn">
                        <h1 class="display-4 text-white font-weight-bold mb-4">Selamat Datang di Masjid</h1>
                        <a href="#" class="btn btn-primary btn-lg px-4 py-3 rounded-pill shadow">Jelajahi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- About Mosque Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                        <div class="card-header bg-primary text-white py-3">
                            <h3 class="mb-0 text-center"><i class="fas fa-mosque mr-2"></i> Tentang Masjid Kami</h3>
                        </div>
                        <div class="card-body p-4 p-md-5">
                            <p class="lead text-muted text-center mb-4">
                                "Dan masjid-masjid adalah milik Allah, maka janganlah kamu menyembah selain Allah sesuatu
                                pun." (QS. Al-Jinn: 18)
                            </p>
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <img src="{{ asset('img/bg/alr.jpeg') }}" alt="Mosque Illustration"
                                        class="img-fluid rounded-lg shadow">
                                </div>
                                <div class="col-md-6">
                                    <p class="text-justify">
                                        Masjid Sekolah Elit merupakan pusat kegiatan ibadah dan pendidikan Islam yang
                                        modern.
                                        Kami menyediakan berbagai program untuk seluruh umur, mulai dari TPA untuk
                                        anak-anak,
                                        kajian rutin untuk remaja dan dewasa, hingga kegiatan sosial kemasyarakatan.
                                    </p>
                                    <p class="text-justify">
                                        Dengan fasilitas yang nyaman dan lingkungan yang kondusif, kami berkomitmen untuk
                                        menciptakan atmosfer spiritual yang mendukung tumbuhnya iman dan takwa.
                                    </p>
                                    <div class="mt-4 text-center text-md-left">
                                        <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($pengumuman->count() > 0)
        <!-- Announcements Section -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title mb-3">Pengumuman Terbaru</h2>
                        <p class="lead text-muted">Informasi terkini seputar kegiatan masjid</p>
                        <div class="divider mx-auto bg-primary"></div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($pengumuman as $pn)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div
                                class="card announcement-card h-100 border-0 shadow-sm rounded-lg overflow-hidden transition">
                                <div class="card-img-top position-relative">
                                    <img src="{{ asset('img/bg/pengumuman.png') }}" class="img-fluid w-100" alt="Pengumuman"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="date-badge bg-primary text-white px-3 py-1 rounded-pill">
                                        {{ $pn->tgl }}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">{{ $pn->judul }}</h5>
                                    <p class="card-text text-muted small mb-2">
                                        <i class="fas fa-user mr-1"></i> {{ $pn->user->name }}
                                    </p>
                                    <p class="card-text text-truncate">{{ Str::limit($pn->isi, 100) }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <a href="{{ route('pengumuman.show', $pn->slug) }}"
                                        class="btn btn-sm btn-block btn-outline-primary">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('pengumuman') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                            <i class="fas fa-list mr-2"></i> Lihat Semua Pengumuman
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($artikel->count() > 0)
        <!-- Articles Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title mb-3">Artikel Islami</h2>
                        <p class="lead text-muted">Kajian dan tulisan untuk menambah wawasan keislaman</p>
                        <div class="divider mx-auto bg-primary"></div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($artikel as $art)
                        <div class="col-lg-6 mb-4">
                            <div class="card article-card h-100 border-0 shadow-sm rounded-lg overflow-hidden transition">
                                <div class="row no-gutters h-100">
                                    <div class="col-md-5">
                                        <img src="{{ asset($art->getThumbnail()) }}" class="img-fluid h-100 w-100"
                                            style="object-fit: cover;" alt="{{ $art->judul }}">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body d-flex flex-column h-100">
                                            <div class="mb-2">
                                                <span
                                                    class="badge badge-primary">{{ $art->kategoriArtikel->nama_kategori }}</span>
                                            </div>
                                            <h5 class="card-title font-weight-bold">{{ $art->judul }}</h5>
                                            <p class="card-text text-muted small mb-2">
                                                <i class="fas fa-user mr-1"></i> {{ $art->user->name }}
                                            </p>
                                            <p class="card-text text-truncate">
                                                {{ Str::limit(strip_tags($art->deskripsi), 120) }}</p>
                                            <div class="mt-auto pt-3">
                                                <a href="{{ route('artikel.show', $art->slug) }}"
                                                    class="btn btn-sm btn-outline-primary">
                                                    Baca Artikel <i class="fas fa-book-open ml-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('artikel') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                            <i class="fas fa-newspaper mr-2"></i> Lihat Semua Artikel
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Prayer Times Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Jadwal Sholat</h2>
                    <p class="lead text-muted">Waktu-waktu sholat hari ini</p>
                    <div class="divider mx-auto bg-primary"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th class="text-center py-3">Subuh</th>
                                            <th class="text-center py-3">Dzuhur</th>
                                            <th class="text-center py-3">Ashar</th>
                                            <th class="text-center py-3">Maghrib</th>
                                            <th class="text-center py-3">Isya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center py-4">04:30</td>
                                            <td class="text-center py-4">12:15</td>
                                            <td class="text-center py-4">15:30</td>
                                            <td class="text-center py-4">18:15</td>
                                            <td class="text-center py-4">19:30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="font-weight-bold mb-4">Hubungi Kami</h2>
                    <p class="text-muted mb-4">Untuk informasi lebih lanjut tentang kegiatan masjid, silakan hubungi kami
                        melalui kontak berikut:</p>

                    <div class="contact-info mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle bg-primary text-white mr-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Alamat</h6>
                                <p class="mb-0 text-muted">Jl. Pendidikan No. 123, Kota Bandung</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle bg-primary text-white mr-3">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Telepon</h6>
                                <p class="mb-0 text-muted">(022) 1234567</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-primary text-white mr-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0 text-muted">info@masjidsekolah.elit</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm rounded-lg">
                        <div class="card-body p-4 p-md-5">
                            <h5 class="card-title text-center mb-4">Kirim Pesan</h5>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Alamat Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subjek">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Pesan Anda"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <style>
        /* Custom Styles */
        .hero-area {
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: #4e73df;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .divider {
            width: 80px;
            height: 3px;
            margin: 15px auto;
        }

        .icon-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .date-badge {
            position: absolute;
            bottom: 15px;
            left: 15px;
            font-size: 12px;
        }

        .announcement-card:hover,
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .transition {
            transition: all 0.3s ease;
        }

        /* Prayer Times Table */
        .table-hover tbody tr:hover {
            background-color: rgba(78, 115, 223, 0.05);
        }

        @media (max-width: 768px) {
            .hero-area {
                height: 70vh;
                min-height: 500px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }
        }
    </style>
@endpush

@push('js')
    <script>
        // Animation on scroll
        $(document).ready(function() {
            $('.animated').each(function() {
                $(this).css('opacity', '0');
            });

            $(window).scroll(function() {
                $('.animated').each(function() {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();

                    if (scroll + windowHeight > position) {
                        $(this).addClass('fadeIn');
                        $(this).css('opacity', '1');
                    }
                });
            });
        });
    </script>
@endpush

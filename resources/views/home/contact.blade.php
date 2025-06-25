@extends('layouts.frontend.app', [
    'title' => 'Contact',
])

@section('content')
    <section class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Struktur Organisasi (Top Section) -->
                <div class="col-12 col-lg-10">
                    <div class="contact--info mt-50">
                        <div class="text-center mb-4">
                        <img src="/storage/organisasi/BbHKlg497WJ3vb1LQIep1CZdJeSEf5DjJ3Hha6vq.png">
                        </div>
                        <h4 class="text-center mb-5">Struktur Organisasi</h4>
                        <div class="row">
                            @foreach ($organisasi as $org)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="organisasi-member text-center p-3">
                                        @if ($org->image)
                                            <div class="organisasi-photo-container">
                                                <img src="{{ asset('storage/' . $org->image) }}"
                                                    class="organisasi-photo mb-3" alt="{{ $org->name }}">
                                            </div>
                                        @else
                                            <div
                                                class="organisasi-photo-initial mb-3 d-flex align-items-center justify-content-center">
                                                {{ substr($org->name, 0, 1) }}
                                            </div>
                                        @endif
                                        <h5 class="mb-1">{{ $org->name }}</h5>
                                        <p class="text-muted small mb-2">{{ $org->jabatan }}</p>
                                        <a href="tel:{{ $org->hp }}" class="btn btn-sm btn-outline-primary py-0 px-2">
                                            <i class="fa fa-phone-alt mr-1"></i> {{ $org->hp }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            <div class="row justify-content-center">
                <!-- Struktur Organisasi (Top Section) -->
                <div class="col-12 col-lg-10">
                    <div class="contact--info mt-50">
                        <div class="text-center mb-4">
                        {{-- <img src="/storage/organisasi/BbHKlg497WJ3vb1LQIep1CZdJeSEf5DjJ3Hha6vq.png"> --}}
                        </div>
                        <h4 class="text-center mb-5">Struktur Organisasi</h4>
                        <div class="row">
                            @foreach ($organisasi as $org)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="organisasi-member text-center p-3">
                                        @if ($org->image)
                                            <div class="organisasi-photo-container">
                                                <img src="{{ asset('storage/' . $org->image) }}"
                                                    class="organisasi-photo mb-3" alt="{{ $org->name }}">
                                            </div>
                                        @else
                                            <div
                                                class="organisasi-photo-initial mb-3 d-flex align-items-center justify-content-center">
                                                {{ substr($org->name, 0, 1) }}
                                            </div>
                                        @endif
                                        <h5 class="mb-1">{{ $org->name }}</h5>
                                        <p class="text-muted small mb-2">{{ $org->jabatan }}</p>
                                        <a href="tel:{{ $org->hp }}" class="btn btn-sm btn-outline-primary py-0 px-2">
                                            <i class="fa fa-phone-alt mr-1"></i> {{ $org->hp }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Info Kontak (Bottom Section) -->
                <div class="col-12 col-lg-8">
                    <div class="contact--info mt-5 mb-50 p-4 bg-white rounded shadow-sm">
                        <h4 class="text-center mb-4">Info Kontak</h4>
                        <ul class="contact-list list-unstyled">
                            <li class="mb-3 p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o fa-fw mr-3 fs-5" aria-hidden="true"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Jam Masuk</h6>
                                        <p class="mb-0">9:00 WIB - 17:00 WIB</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3 p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-phone fa-fw mr-3 fs-5" aria-hidden="true"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">No Telp</h6>
                                        <p class="mb-0">+1 123 321 456 654</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3 p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-envelope fa-fw mr-3 fs-5" aria-hidden="true"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Email</h6>
                                        <p class="mb-0">masjid@example.com</p>
                                    </div>
                                </div>
                            </li>
                            <li class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-map-marker fa-fw mr-3 fs-5" aria-hidden="true"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Alamat</h6>
                                        <p class="mb-0">Berlin, Germany</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@push('css')
    <style>
        /* Organisasi Photo Container - Taller Version */
        .organisasi-photo-container {
            width: 100%;
            height: 0;
            padding-bottom: 120%;
            /* Taller aspect ratio (about 5:6) */
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            border: 2px solid #f0f0f0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #f8f9fa;
        }

        .organisasi-photo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .organisasi-photo:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .organisasi-photo-initial {
            width: 100%;
            height: 0;
            padding-bottom: 120%;
            /* Matches photo aspect ratio */
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 8px;
            font-size: 5rem;
            font-weight: bold;
            color: #555;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #aaa;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsive adjustments */
        @media (min-width: 1200px) {

            .organisasi-photo-container,
            .organisasi-photo-initial {
                padding-bottom: 110%;
                /* Slightly less tall on extra large screens */
            }
        }

        @media (max-width: 992px) {

            .organisasi-photo-container,
            .organisasi-photo-initial {
                padding-bottom: 130%;
                /* Slightly taller on tablets */
            }

            .organisasi-photo-initial {
                font-size: 4rem;
            }
        }

        @media (max-width: 768px) {

            .organisasi-photo-container,
            .organisasi-photo-initial {
                padding-bottom: 140%;
                /* Taller on mobile */
            }

            .organisasi-photo-initial {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 576px) {
            .organisasi-photo-initial {
                font-size: 3rem;
            }
        }
    </style>
@endpush

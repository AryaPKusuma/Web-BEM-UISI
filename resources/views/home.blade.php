@extends('layout.app')

@section('tittle', 'Home')

@section('content')
    <style>
        /* Default height for small devices */
        #intro-example {
            height: 400px;
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 600px;
            }
        }
    </style>

    <div id="intro-example" class="p-5 text-center bg-image"
        style="background-image: url('{{ asset('image/uisi_01.jpg') }}');">
        <div class="mask mb-5" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h5 class="mb-2 text-uppercase" style="font-size: 1rem">
                        Selamat Datang di
                    </h5>
                    <strong class="mb-3 text-capitalize" style="font-size: 3.5rem">BEM UISI <span id=year></span></strong>
                    <h5 class="mb-3 text-uppercase" style="font-size: 1rem">kabinet reformasi</h5>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container mt-5">
            <header>
                <h2 class="my-5 text-center" style="color: #146C94"><strong>Tujuan</strong></h2>
            </header>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card hover-shadow" style="height: 260px;">
                        <div class="card-body text-center">
                            <div class="mb-4"><i class="fas fa-2x fa-people-carry-box" style="color: #146C94"></i></div>
                            <h5 class="card-title"><strong>Eksistensi Mahasiswa</strong></h5>
                            <br>
                            <p class="card-text">Aktif berpartisipasi dalam pembangunan lingkungan kampus dan masyarakat sekitar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card hover-shadow" style="height: 260px;">
                        <div class="card-body text-center">
                            <div class="mb-4"><i class="fas fa-2x fa-handshake-angle" style="color: #146C94"></i></div>
                            <h5 class="card-title"><strong>Meningkatkan Kesejahteraan Bersama</strong></h5>
                            <p class="card-text">Berkontribusi dalam menciptakan kesejahteraan masyarakat dan
                                mahasiswa dengan kepedulian dan kerjasama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card hover-shadow" style="height: 260px;">
                        <div class="card-body text-center">
                            <div class="mb-4"><i class="fas fa-2x fa-book-open" style="color: #146C94"></i></div>
                            <h5 class="card-title"><strong>Civitas Akademika Unggul dan Bertakwa</strong></h5>
                            <p class="card-text">Membentuk komunitas akademis yang unggul, berintegritas,
                                dan bertaqwa kepada Tuhan Yang Maha Esa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-0 text-center m-2">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </section>

    <section>



        <div class="content" style="">
            <div class="container my-5">
              <div class=" my-1 owl-carousel slide-one-item">
                @foreach ($members as $member)
                <div class="d-md-flex testimony-29101 align-items-stretch">
                  <div class="image" style="background-image: url('{{ asset('storage/photo/'.basename($member->photo)) }}');"></div>
                  <div class="text">
                    <blockquote>
                      <h1>{{ $member->name }}</h1>
                      <h4>{{ $member->position->name }}</h5>
                      {{-- <div class="author">
                        <a href="#" class="author text-dark"><i class="fab fa-2x fa-instagram"></i></a>
                      </div> --}}
                    </blockquote>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
    </section>


    <section>
        @foreach ($kabinet as $kabin)
        <div class="container my-5">
            <h2 class="my-6 text-center" style="color: #146C94"><strong>Kabinet</strong></h2>
            <div class="text-center">
                <img src="{{ asset('storage/logo/'.basename($kabin->logo)) }}" width="150px" alt="">
            </div>
            <hr class="hr hr-blurry" />
            <header class="mb-3">
                <h4 style="color: #0098df"><strong>Visi</strong></h4>
                <ul class="list-group list-group-light">
                    <li class="list-group-item border-0">{!! $kabin->vision !!}</li>
                  </ul>
            </header>
            <header class="mb-5">
                <h4 style="color: #0098df"><strong>Misi</strong></h4>
                <ol class="list-group list-group-light list-group-numbered">
                    {!! $kabin->mission !!}
                </ol>
            </header>
        </div>
        @endforeach
    </section>

    <section>
        <div class="container mb-5">
            <h5 class="mt-5 text-center" style="color: #0098df">Daftar</h5>
            <h2 class="mb-5 text-center" style="color: #146C94"><strong>Kementrian</strong></h2>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5 justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <a class="text-dark" href="#"><strong>Dalam Negeri</strong></a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <a class="text-dark" href="#"><strong>Sosial dan Masyarakat</strong></a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <div class="card-body text-center">
                            <a class="text-dark" href="#"><strong>Riset dan Keilmuan</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <div class="card-body text-center">
                            <a class="text-dark" href="#"><strong>Kajian Strategis</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <div class="card-body text-center">
                            <a class="text-dark" href="#"><strong>Ekonomi Kreatif</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <div class="card-body text-center">
                            <a class="text-dark" href="#"><strong>Pengembangan Sumber Daya Mahasiswa</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <div class="card-body text-center">
                            <a class="text-dark" href="#"><strong>Advokasi dan Kesejahteraan Mahasiswa</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card shadow-5  justify-content-center text-center mb-5" style="height: 70px; border-left: 8px solid #2BABD1">
                        <div class="card-body text-center">
                            <a class="text-dark" href="#"><strong>Komunikasi dan Informasi</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">

                @foreach ($beritaTerbaru as $berita)

                <div class="col-md-4 col-lg-3 col-sm-6">
                    <!-- Featured image -->
                    <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                        <img src="{{ asset('storage/uploads/'.basename($berita->gambar)) }}" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <a href="berita/{{ $berita->id }}" class="text-dark">
                        <h5><strong>{{ $berita->judul }}</strong></h5>
                        <small>{{ $berita->updated_at }}</small>
                        {!! \Illuminate\Support\Str::limit($berita->isi, 100) !!}
                    </a>
                </div>

                @endforeach

                </div>
        </div>
    </section>


    <script>
        const currentYear = new Date().getFullYear();
        document.getElementById('year').innerHTML = currentYear;
        document.getElementById('footer-year').innerHTML = currentYear;
    </script>
@endsection

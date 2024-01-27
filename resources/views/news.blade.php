
@extends('layout.app')

@section('tittle', 'Berita')

@section('content')

    <style>
        #intro-example {
            height: 200px;
        }

        @media (min-width: 992px) {
            #intro-example {
                height: 300px;
            }
        }
    </style>

    <div id="intro-example" class="p-5 text-center bg-image"
        style="background-image: url('{{ asset('image/uisi_01.jpg') }}');">
        <div class="mask mb-5" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <strong class="mb-3 text-capitalize" style="font-size: 3.5rem">Berita</strong>
                </div>
            </div>
        </div>
    </div>

    <!--Main layout-->
    <div class="container mt-5">
        <!--Section: News of the day-->
        <section class="border-bottom pb-4 mb-5">
            @foreach($beritaTerbaru as $berita)
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="{{ asset('storage/uploads/'.basename($berita->gambar)) }}" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Terbaru</span>
                    <h4><strong>{{ $berita->judul }}</strong></h4>
                    <p class="text-muted">
                        {{ \Illuminate\Support\Str::limit($berita->isi, 200) }}
                    </p>
                    <a href="" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </section>
        <!--Section: News of the day-->



        <!--Section: Content-->
        <section>
            <div class="row">
                @foreach($beritas as $berita)
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
                        <p class="text-muted">
                            {{ \Illuminate\Support\Str::limit($berita->isi, 100) }}
                        </p>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
        <!--Section: Content-->

        <!-- Pagination -->
        <nav class="my-4" aria-label="...">
            <ul class="pagination pagination-circle justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--Main layout-->

@endsection

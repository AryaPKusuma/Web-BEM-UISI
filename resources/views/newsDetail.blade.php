@extends('layout.app')

@section('tittle', 'Berita')

@section('content')

<style>
    /* Default height for small devices */
    #intro-example {
        height: 200px;
    }

    /* Height for devices larger than 992px */
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

<section>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5"><strong>{{ $berita->judul }}</strong></h1>
                <span class=" mb-4 text-muted" >Upload at {{ $berita->updated_at }}</span>
            </div>
            <div class="col-md-12">
                <div class="bg-image text-center hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                    <img src="{{ asset('storage/uploads/'.basename($berita->gambar)) }}" class="img-fluid" />
                </div>
                <div class="my-5">
                    {!! $berita->isi !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

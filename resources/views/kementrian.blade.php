@extends('layout.app')

@section('tittle', 'Kementrian')

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
                <strong class="mb-3 text-capitalize" style="font-size: 3.5rem">Kementrian Lorem Ipsum</strong>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <table class="table table-borderless my-5">
            <thead>
              <tr>
                <th scope="col"><strong>Nama Program</strong></th>
                <th scope="col"><strong>Deskripsi</strong></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jual Anak</td>
                <td>Menjual anak kepada orang yang membutuhkan anak</td>
              </tr>
              <tr>
                <td>Info</td>
                <td>Memberikan informasi</td>
              </tr>
            </tbody>
          </table>
    </div>
</section>

@section('content')

@endsection

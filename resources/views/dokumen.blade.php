@extends('layout.app')

@section('tittle', 'Dokumen')

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('image/banner_dokumen.webp') }}');
       height: 480px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="container d-flex justify-content-start align-items-center h-100">
                <div class="text-white">
                    <strong class="mb-3 text-capitalize" style="font-size: 3.5rem">DOKUMEN</strong>
                    <h5 class="mb-3 text-uppercase" style="font-size: 1rem">cari dan download dokumen yang kamu butuhkan</h5>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mt-5 mb-5">
            <div class="input-group p-4">
                <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="form1" class="form-control" />
                    <label class="form-label" for="form1">Search</label>
                </div>
                <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <table class="table mt-2">
                <tbody>
                    @foreach ($documents as $doc)
                    <tr>
                        <td colspan="3">{{ $doc->name }}</td>
                        <td class="text-end">
                            <a type="button" href="{{ $doc->url }}" class="btn btn-primary"><i
                            class="fas fa-download"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection

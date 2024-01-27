@extends('layout.app')

@section('tittle', 'Arsip')

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
                <strong class="mb-3 text-capitalize" style="font-size: 3.5rem">Arsip Kabinet</strong>
            </div>
        </div>
    </div>
</div>


<section>

    <div class="container py-5">
        <div class="row">
          <div class="col-md-12">
            <div id="content">
              <ul class="timeline-1 text-black">
                @foreach ($kabinets as $kabinet )


                <li class="event" data-date="2023">
                    <a href="">
                        <h4 class="mb-3">{{ $kabinet->name }}</h4>
                    </a>
                  <p>{!! $kabinet->vision !!}</p>
                </li>

                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

</section>
@endsection

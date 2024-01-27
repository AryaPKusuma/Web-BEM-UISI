<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
        rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    {{--   navbar  --}}

    @include('layout.navbar')

    {{-- endnavbar --}}

    @yield('content')

    <footer>
        <div class="footer-area" style="background-color: #146C94">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-content">
                            <header>
                                {{-- <a href="https://uisi.ac.id" target="_blank">
                                    <img src="{{ asset('image/logo_uisifull.png') }}" width="200px" alt="">
                                </a> --}}
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="background-color: #146C94">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center text-white pt-2 pb-2">
                            <small>Copyright © <span id="footer-year"></span></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        document.addEventListener('scroll', function() {
        const offcanvas = document.querySelector('.offcanvas');
        const navbar = document.getElementById('navbar');
        const scrollPosition = window.scrollY;

        if (scrollPosition > 100) {
            offcanvas.style.backgroundColor = '#ffffff';
            navbar.classList.remove('navbar-dark');
            navbar.classList.add('navbar-light');
            navbar.classList.add('shadow-5');
            navbar.classList.add('bg-light');

        } else {
            offcanvas.style.backgroundColor = 'rgba(8, 8, 8, 0.85)';
            navbar.classList.remove('navbar-light');
            navbar.classList.remove('bg-light');
            navbar.classList.remove('shadow-5');
            navbar.classList.add('navbar-dark');
        }
        });

        $(function() {
            $('.slide-one-item').owlCarousel({
                center: false,
                autoplayHoverPause: true,
                items: 1,
                loop: true,
                stagePadding: 0,
                margin: 0,
                smartSpeed: 1500,
                autoplay: true,
                pauseOnHover: false,
                dots: true,
                nav: true,
                navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
            });
        })
    </script>
</body>

</html>

@extends('layouts.main')


@section('navbar')
    {{-- <h1 class="mb-5">Welcome to SIMASBAGIA!</h1> --}}
    {{-- <!doctype html>
    <html lang="en"> --}}

    {{-- <head> --}}
    {{-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Carousel · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style> --}}


    <!-- Custom styles for this template -->
    {{-- <link href="/css/carousel.css" rel="stylesheet"> --}}
    {{-- </head> --}}

    <body>

        {{-- <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Carousel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header> --}}

        <main>
            {{-- <h1>Hello, world!</h1> --}}

            {{-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> --}}
            <div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/dpmp4kb.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/magelangkota.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/magelang.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing messaging and featurettes
                                                                                                                                                                                                                                                                                                                                                                                                                                        ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <hr class="featurette-divider">
            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="mb-5">
                    <section id="menu" class="menu">
                        <h2 class="text-center mb-5">MENU</h2>
                    </section>
                    {{-- <div class="row">
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>

                            <h4>PROFIL RT</h4>
                            <p>Terdapat 1032 profil RT yang ikut dalam program pemberdayaan masyarakat maju sehat
                                bahagia
                                untuk
                                meningkatkan dan
                                mendorong peran aktif masyarakat. </p>
                            <p><a class="btn btn-secondary" href="/login">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>

                            <h4>RKM</h4>
                            <p>Rencana Kebutuhan Masyarakat (RKM) merupakan wadah bagi
                                pemerintah Kota Magelang untuk mengetahui kebutuhan masyarakat yang belum
                                terpenuhi. </p>
                            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>

                            <h4>Hasil RKM</h4>
                            <p>Hasil RKM untuk memenuhi kebutuhan Masyarakat sesuai dengan syarat dan ketentuan dari
                                pemerintah
                                Kota Magelang dengan kesepakatan dua pihak.</p>
                            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row --> --}}



                </div>


                <!-- START THE FEATURETTES -->
                <section id="berita" class="berita">
                    <hr class="featurette-divider">

                    <h2 class="text-center mb-5">BERITA TERKINI</h2>

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow
                                    your
                                    mind.</span></h2>
                            <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                                exciting prose here.</p>
                        </div>
                        <div class="col-md-5">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                                    yourself.</span></h2>
                            <p class="lead">Another featurette? Of course. More placeholder content here to give you an
                                idea
                                of how this layout would work with some actual real-world content in place.</p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span>
                            </h2>
                            <p class="lead">And yes, this is the last block of representative placeholder content. Again,
                                not
                                really intended to be actually read, simply here to give you a better view of what this
                                would
                                look like with some actual content. Your content.</p>
                        </div>
                        <div class="col-md-5">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>

                        </div>
                    </div>

                    <hr class="featurette-divider">
                </section>

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <!-- FOOTER -->
            <section id="kontak" class="kontak">

                <div class="mb-5">
                    <footer class="container">
                        <div class="max-w-7xl mx-auto md:px-7 lg:px-10">
                            <div class="bg-info overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-7 text-gray-900">
                                    <h2 class="text-center mb-5">KONTAK KAMI</h2>
                                    <div class="text-center md-5">
                                        {{-- <p class="float-end"><a href="#">OUR KONTAK</a></p> --}}
                                        {{-- <p class="float-end">OUR KONTAK</p> --}}
                                        <p class="float-end">WA :0846748839748</p>
                                        <p class="float-end">IG :@simemasbagia</p>
                                        <p class="float-end">TW :@simemasbagia</p>
                                        <p>&copy; 2021–2024 Simasbagia, Inc. &middot; <a href="#">Privacy</a> &middot;
                                            <a href="#">Terms</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>



            </section>

        </main>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>
    {{--
    </html> --}}
@endsection

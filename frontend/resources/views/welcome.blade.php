<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pandawa </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class=""></i> <a href="#" class="text-white"></a></small>
                    <small class="me-3"><i class=""></i><a href="#" class="text-white"></a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2"></small></a>
                    <a href="#" class="text-white"><small class="text-white mx-2"></small></a>
                    <a href="#" class="text-white"><small class="text-white ms-2"></small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="welcome.blade.php" class="navbar-brand">
                    <h1 class="text-primary display-6">eCatalog</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="welcome.blade.php" class="nav-item nav-link active">Beranda</a>
                        <a href="{{url('/profile')}}" class="nav-item nav-link">Profile</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">UMKM</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="{{url('/cart')}}" class="dropdown-item">Cart</a>
                                <a href="{{url('/chackout')}}" class="dropdown-item">Chackout</a>
                                <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                                <a href="{{url('/404')}}" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="{{url('/hubungi-kami')}}" class="nav-item nav-link">Hubungi kami</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">Paguyuban UMKM Desa Tladan</h4>
                    <h1 class="mb-5 display-3 text-primary">PANDAWA SAKTI</h1>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                        <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="img/hero-img-1.png" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="img/hero-img-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Vesitables</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Produk UMKM</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">Makanan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Minuman</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px;">Kerajinan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 130px;">Meat</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <!-- Tab 1: Semua Produk -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <!-- Gambar Produk -->
                                        <div class="fruite-img">
                                            <img src="{{ asset('storage/' . $product->foto_produk) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->nama_produk }}">
                                        </div>
                                        <!-- Kategori Produk -->
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                                            {{ $product->kategori->nama_kategori ?? 'Kategori' }}
                                        </div>
                                        <!-- Detail Produk -->
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>{{ $product->nama_produk }}</h4>
                                            <p>{{ Str::limit($product->deskripsi_produk, 50) }}</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                
                    <!-- Tab 2: Produk Lainnya -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{ asset('storage/' . $product->foto_produk) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->nama_produk }}">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                                            {{ $product->kategori->nama_kategori ?? 'Kategori' }}
                                        </div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>{{ $product->nama_produk }}</h4>
                                            <p>{{ Str::limit($product->deskripsi_produk, 50) }}</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->

     
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#">
                            <h1 class="text-primary mb-0">Pandhawa Sakti</h1>
                            <p class="text-secondary mb-0">UMKM Kawedanan</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Tentang Kami</h4>
                        <p class="mb-4">Pandhawa Sakti adalah komunitas UMKM di Kabupaten Magetan yang bertujuan mendukung pertumbuhan usaha lokal dengan teknologi dan inovasi.</p>
                        <a href="{{url('/profile')}}" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">   
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Hubungi Kami</h4>
                        <p>Alamat: Kawedanan, Magetan, Jawa Timur</p>
                        <p>Email: info@pandhawasakti.id</p>
                        <p>Telepon: +62 857 3565 2666</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Peta Lokasi</h4>
                        <iframe class="w-100" height="150" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.123456789012!2d111.306987654321!3d-7.737654321098765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79c01234567890%3A0x1abcde1234567890!2sKawedanan%2C%20Magetan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1691234567890"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
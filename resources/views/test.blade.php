<!doctype html>
<html lang="en-US">

<head>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="perpustakaan/style.css">

    <title>LIBRARY</title>
</head>

<body>
    @include('include.style')
    @include('include.script')


    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/page" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">LIBRARY</span>
            </a>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                    <!-- End Notification Dropdown Items -->
                </li>
                <!-- End Notification Nav -->
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>
                    <!-- End Messages Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/profile-img.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/profile-img.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/profile-img.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Lidia</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Lidia</h6>
                            <span>Student</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/users-profile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/users-profile">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/page">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- H E R O -->
        <section id="hero">
            <div class="container">
                <!-- SERIAL DUNIA PARALEL -->
                <div class="catagories ms-auto">
                    <section id="millionaire">
                        <h1 class="heading">MILLIONAIRE MINDSET</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/millionaire mindset 01.jpg" alt="">
                                <h3>MILLIONAIRE MINDSET 01</h3>
                                <p>(2019)</p>
                                <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 01.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                                {{-- <button type="button" class="btn btn-dark">
                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 01.pdf')}}" target="_blank">Read now</a>
                                </button> --}}
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/millionaire mindset 03.jpg" alt="">
                                <h3>MILLIONAIRE MINDSET 03</h3>
                                <p>(2019)</p>
                                <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 03.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                                {{-- <button type="button" class="btn btn-dark">
                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 03.pdf')}}" target="_blank">Read now</a>
                                </button> --}}

                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/millionaire mindset 04.jpg" alt="">
                                <h3>MILLIONAIRE MINDSET 04</h3>
                                <p>(2019)</p>
                                <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 04.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/millionaire mindset 06.jpg" alt="">
                                <h3>MILLIONAIRE MINDSET 06</h3>
                                <p>(2019)</p>
                                <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 06.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/millionaire mindset 07.jpg" alt="">
                                <h3>MILLIONAIRE MINDSET 09</h3>
                                <p>(2019)</p>
                                <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 07.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/buku sakti hacker.jpg" alt="">
                                <h3>BUKU SAKTI HACKER</h3>
                                <p>(2014)</p>
                                <a href="{{asset('perpustakaan/ebook/Buku Sakti Hacker by Efvy Zam.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/bob sadino.jpg" alt="">
                                <h3>BELAJAR GOBLOK DARI BOB SADINO</h3>
                                <p>(2019)</p>
                                <a href="{{asset('perpustakaan/ebook/bob sadino.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                        </div>
                    </section>
                    <section id="serial">
                        <h1 class="heading">SERIAL DUNIA PARALEL</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/Bumi.jpg" alt="">
                                <h3>BUMI</h3>
                                <p>(2014)</p>
                                <a href="{{asset('perpustakaan/ebook/Bumi.pdf')}}" target="_blank" class="btn btn-success"> Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/bulan.jpg" alt="">
                                <h3>BULAN</h3>
                                <p>(2015)</p>
                                <a href="{{asset('perpustakaan/ebook/.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/matahari.jpg" alt="">
                                <h3>MATAHARI</h3>
                                <p>(2016)</p>
                                <a href="{{asset('perpustakaan/ebook/matahari.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/bintang.jpg" alt="">
                                <h3>BINTANG</h3>
                                <p>(2017)</p>
                                <a href="{{asset('perpustakaan/ebook/Bintang.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/ceros dan batozar.jpg" alt="">
                                <h3>CEROS DAN BATOZAR</h3>
                                <p>(2018)</p>
                                <a href="{{asset('perpustakaan/ebook/ceros dan batozar.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/komet.jpg" alt="">
                                <h3>KOMET</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/komet minor.jpg" alt="">
                                <h3>KOMET MINOR</h3>
                                <p>(2019)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/Selena.jpeg" alt="">
                                <h3>SELENA</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box col-mg-">
                                <img src="perpustakaan/cover/Nebula.jpg" alt="">
                                <h3>NEBULA</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si putih.jpg" alt="">
                                <h3>SI PUTIH</h3>
                                <p>(2021)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/lumpu.jpg" alt="">
                                <h3>LUMPU</h3>
                                <p>(2021)</p>
                                <a href="{{asset('perpustakaan/ebook/lumpu.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/bibi gill.jpg" alt="">
                                <h3>BIBI GILL</h3>
                                <p>(2022)</p>
                                <a href="{{asset('perpustakaan/ebook/Bibi Gill.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/sagaras.jpg" alt="">
                                <h3>SAGARAS</h3>
                                <p>(2022)</p>
                                <a href="{{asset('perpustakaan/ebook/Sagaras.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                        </div>
                        <!-- SERIAL ANAK MAMAK -->
                        <h1 class="heading">SERIAL ANAK MAMAK</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/burlian.jpg" alt="">
                                <h3>BURLIAN</h3>
                                <p>(2009)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/pukat.jpg" alt="">
                                <h3>PUKAT</h3>
                                <p>(2010)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/eliana.jpg" alt="">
                                <h3>ELIANA</h3>
                                <p>(2011)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/amelia.jpg" alt="">
                                <h3>AMELIA</h3>
                                <p>(2013)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                        </div>

                        <!-- SERIAL ANAK NUSANTARA -->
                        <h1 class="heading">SERIAL ANAK NUSANTARA</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/si anak kuat.jpg" alt="">
                                <h3>SI ANAK KUAT</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak spesial.jpg" alt="">
                                <h3>SI ANAK SPESIAL</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak pintar.jpg" alt="">
                                <h3>SI ANAK PINTAR</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak pemberani.jpg" alt="">
                                <h3>SI ANAK PEMBERANI</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak cahaya.jpg" alt="">
                                <h3>SI ANAK CAHAYA</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak badai.jpg" alt="">
                                <h3>SI ANAK BADAI</h3>
                                <p>(2019)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak pelangi.jpg" alt="">
                                <h3>SI ANAK PELANGI</h3>
                                <p>(2019)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/si anak savana.jpg" alt="">
                                <h3>SI ANAK SAVANA</h3>
                                <p>(2022)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                        </div>
                    </section>
                    <section id="cerpen">
                        <h1 class="heading">CERPEN</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/hafalan sholat delisa.jpg" alt="">
                                <h3>HAFALAN SHOLAT DELISA</h3>
                                <p>(2005)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/negeri para bedebah.jpg" alt="">
                                <h3>NEGERI PARA BEDEBAH</h3>
                                <p>(2012)</p>
                                <a href="{{asset('perpustakaan/ebook/Negeri Para bedebah.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/bidadari-bidadari surga.jpg" alt="">
                                <h3>BIDADARI BIDADARI SURGA</h3>
                                <p>(2008)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/daun yang jatuh tak pernah membenci angin.jpg" alt="">
                                <h3>DAUN YANG JATUH TIDAK PERNAH MEMBENCI ANGIN</h3>
                                <p>(2014)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/berjuta rasanya.jpg" alt="">
                                <h3>BERJUTA RASANYA</h3>
                                <p>(2012)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/sepotong hati yang baru.jpg" alt="">
                                <h3>SEPOTONG HATI YANG BARU</h3>
                                <p>(2012)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                        </div>
                    </section>
                    <section id="puisi">
                        <h1 class="heading">PUISI</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/dikatakan atau tidak dikatakan itu tetap cinta.jpg" alt="">
                                <h3>DIKATAKAN ATAU TIDAK DIKATAKAN ITU TETAP CINTA</h3>
                                <p>(2014)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/sungguh kau boleh pergi.jpg" alt="">
                                <h3>SUNGGUH KAU BOLEH PERGI</h3>
                                <p>(2019)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                        </div>
                    </section>
                    <section>

                        <h1 class="heading" id="non-kategori">NON-KATEGORI</h1>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/moga bunda disayang allah.jpg" alt="">
                                <h3>MOGA BUNDA DISAYANG ALLAH</h3>
                                <p>(2013)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover//dia adalah kakakku.jpg" alt="">
                                <h3>DIA ADALAH KAKAKKU</h3>
                                <p>(2018)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/sunset bersama rosie.jpg" alt="">
                                <h3>SUNSET BERSAMA ROSIE</h3>
                                <p>(2011)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/harga sebuah percaya.jpg" alt="">
                                <h3>HARGA SEBUAH PERCAYA</h3>
                                <p>(2006) </p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                        </div>
                        <div class="box-container">
                            <div class="box">
                                <img src="perpustakaan/cover/jengki.jpg" alt="">
                                <h3>JENGKI</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/selamat tinggal.jpg" alt="">
                                <h3>SELAMAT TINGGAL</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/tentang kamu.jpg" alt="">
                                <h3>TENTANG KAMU</h3>
                                <p>(2016)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/hujan.jpg" alt="">
                                <h3>HUJAN</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/janji.jpeg" alt="">
                                <h3>JANJI</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/ayahku bukan pembohong.jpg" alt="">
                                <h3>AYAHKU BUKAN PEMBOHONG</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/bedebah di ujung tanduk.jpg" alt="">
                                <h3>BEDEBAH DI UJUNG TANDUK</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/negeri di ujung tanduk.jpg" alt="">
                                <h3>NEGERI DI UJUNG TANDUK</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/hello.jpg" alt="">
                                <h3>HELLO</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/pergi.jpg" alt="">
                                <h3>PERGI</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/pulang.jpg" alt="">
                                <h3>PULANG</h3>
                                <p>(2020)</p>
                                <a href="{{asset('perpustakaan/ebook/Pulang.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/rasa.jpg" alt="">
                                <h3>RASA</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/rindu.jpg" alt="">
                                <h3>RINDU</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/selamat tinggal.jpg" alt="">
                                <h3>SELAMAT TINGGAL</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/sesuk.jpg" alt="">
                                <h3>SESUK</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                            <div class="box">
                                <img src="perpustakaan/cover/tentang kamu.jpg" alt="">
                                <h3>TENTANG KAMU</h3>
                                <p>(2020)</p>
                                <a href="#" class="btn btn-success">Read now</a>
                            </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Absen</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Agama</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->kelas }}</td>
                                        <td>{{ $user->jenis_kelamin }}</td>
                                        <td>{{ $user->agama }}</td>
                                        <td><button type="button" class="btn btn-warning"><a href="/edit/{{$user->id}}">Edit</a></button>
                                            <button type="button" class="btn btn-outline-danger"><a href="/delete/{{$user->id}}">Delete</a></button>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('include.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('include.script')

</body>

</html>


<!-- <div class="categories">
    <div class="box-container">
        @foreach ($ebooks as $ebook)
        <div class="box">
            <img src="{{asset('perpustakaan/cover'.$ebook->cover)}}">
            <h3>{{ $ebook->judul }}</h3>
            <p>{{ $ebook->tahun_terbit }}</p>
            <a href="{{ asset('perpustakaan/ebook/'.$ebooks->pdf)}}" target="blank" class="btn btn-success">Read now</a>
        </div>
        @endforeach
    </div>
</div> -->

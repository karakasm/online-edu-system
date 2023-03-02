<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Student - ÇES</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    @yield('scripts')
</head>
<body>

<!--navbar starts-->
<nav class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <!--offcanvas trigger starts-->
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <span class="navbar-toggler-icon" data-bs-target="#offcanvasScrolling"></span>
        </button>
        <!--offcanvas trigger ends-->
        <a class="navbar-brand me-auto fs-5" href="{{ route('instructor.index') }}">
            Çevrimiçi Eğitim
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item dropdown mt-3 mt-lg-0">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                        <span style="font-size:14px;">
                            @if(session()->has('user'))
                                {{ session('user.username') }}
                            @else
                                Kullanıcı Ad Soyadı
                            @endif
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button">Bildirimler <span class="badge text-bg-primary">4</span></button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('handle.logout') }}" role="button">Çıkış <i class="uil uil-signout" style="color: var(--red);"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--navbar ends-->

<!--offcanvas starts-->
<div class="offcanvas offcanvas-start bg-black text-white sidebar-nav" data-bs-scroll="true" data-bs-backdrop="true"
     tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-body">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <a href="#" class="nav-link px-3 active">
                        <span class="me-2 link-icon"><i class="uil uil-estate"></i></span>
                        <span class="link-name">Panel</span>
                    </a>
                </li>
                <li class="mt-4">
                    <div class="small fw-bold" style="color: var(--gray-600);">Sınıflar</div>
                </li>
                <li>
                    <div class="px-3 d-flex align-items-center sidebar-link">
                        <span class="me-3 link-icon"><i class="uil uil-subject"></i></span>
                        <span class="link-name">Sınıf Adı 1</span>
                    </div>
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="link-icon"><i class="uil uil-navigator"></i></span>
                                <span class="link-name">Kod:652</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="px-3 d-flex align-items-center sidebar-link">
                        <span class="me-3 link-icon"><i class="uil uil-subject"></i></span>
                        <span class="link-name">Sınıf Adı 2</span>
                    </div>
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="link-icon"><i class="uil uil-navigator"></i></span>
                                <span class="link-name">Kod:388E</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="px-3 d-flex align-items-center sidebar-link">
                        <span class="me-3 link-icon"><i class="uil uil-subject"></i></span>
                        <span class="link-name">Sınıf Adı 3</span>
                    </div>
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="link-icon"><i class="uil uil-navigator"></i></span>
                                <span class="link-name">Kod:235</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--offcanvas ends-->

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>

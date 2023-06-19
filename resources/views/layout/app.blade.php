<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ config('app.name') }}</title>
</head>

<style>
    body {
        min-height: 100vh;
        min-height: -webkit-fill-available;
    }

    html {
        height: -webkit-fill-available;
    }

    main {
        height: 100vh;
        height: -webkit-fill-available;
        overflow-x: auto;
        overflow-y: hidden;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }


    .bd-mode-toggle {
        z-index: 1500;
    }



    .dropdown-toggle {
        outline: 0;
    }

    .btn-toggle {
        padding: .25rem .5rem;
        font-weight: 600;
    }


    .btn-toggle::before {
        width: 1.25em;
        line-height: 0;
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        transition: transform .35s ease;
        transform-origin: .5em 50%;
    }




    .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
    }

    .btn-toggle-nav a {
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
    }



    .scrollarea {
        overflow-y: auto;
    }

    .scrollable-content {
        max-height: calc(100vh - 11rem);
        /* 3rem adalah tinggi padding dari div */
        overflow-y: auto;
    }

    .btn-primary.hover:hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
            transition: all 0.3s ease-in-out
        }





    .btn-danger.hover:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        transition: all 0.3s ease-in-out
    }
</style>

</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand">APPS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/' }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/' }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="d-flex flex-nowrap h-100">
        <div class="flex-shrink-0 p-3 h-100 py-3" style="width: 280px;"> {{-- div ini di jadikan max tingginya 100vh --}}
            <a href="/"
                class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                <span class="fs-5 fw-semibold">MY APPS</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                        Home
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ '/' }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Cars</a>
                            </li>
                            <li><a href="{{ route('peminjaman.index') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Menu
                                    Peminjaman </a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Menu
                                    Pengembalian</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Dashboard
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('dashboard.index') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        Orders
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                    class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                            <li><a href="#"
                                    class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                            <li><a href="#"
                                    class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign
                                    out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container scrollable-content py-3">{{-- div ini di jadikan scroll jika tingginya > 100vh --}}
            @yield('content')
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-1 mt-5 fixed-bottom" style="width: 100%">
        &copy; 2023 Ahmad Fauzan Abdurrohman
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

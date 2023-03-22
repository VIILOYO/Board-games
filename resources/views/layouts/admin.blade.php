<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="" class="nav-link align-middle px-0 ">
                                <i class="fa-solid fa-book-open"></i> <span class="ms-1 d-none d-sm-inline">Пользовательский сайт</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-book-open"></i> <span class="ms-1 d-none d-sm-inline">Пользовательский сайт</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-book-open"></i> <span class="ms-1 d-none d-sm-inline">Пользовательский сайт</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-book-open"></i> <span class="ms-1 d-none d-sm-inline">Пользовательский сайт</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
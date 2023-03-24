<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/af104dbd7e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end vh-100 shadow-sm">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0">
                        <div class="p-2">
                            <h4>Хромой мипл</h4>
                        </div>
                        <form class="d-flex p-2">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ route('news.index') }}" class="text-decoration-none text-black">
                                Главная страница</a>
                            </li>
                            <li class="list-group-item"> <a href="{{ route('admin.index') }}" class="text-decoration-none text-black">
                                Общая статистика</a>
                            </li>
                            <li class="list-group-item"> <a href="#" class="text-decoration-none text-black">
                                Blogs</a>
                            </li>
                            <li class="list-group-item" aria-current="true"> <a href="#" class="text-decoration-none text-black">
                                Inbox</a>
                            </li>
                            <li class="list-group-item"> <a href="#" class="text-decoration-none text-black">
                                Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>
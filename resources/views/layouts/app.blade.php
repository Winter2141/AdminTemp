<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

@yield('head')

<!-- App css -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="small-navigation2">
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-between">
                    Settings
                    <a class="btn-sidebar-close" href="#">
                        <i class="ti-close"></i>
                    </a>
                </h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

    <!-- BEGIN: Chat List -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-between">
                    Chats
                    <a class="btn-sidebar-close" href="#">
                        <i class="ti-close"></i>
                    </a>
                </h6>
                <div class="list-group list-group-flush">
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-start">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-start">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Chat List -->

</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img class="logo" src="{{ url('assets/media/image/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>

            <div class="header-body">
                <div class="header-body-left">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3">
                            <div class="header-search-form">
                                <form>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn header-search-close-btn">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">Apps</a>
                            <div class="dropdown-menu dropdown-menu-big">
                                <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between">
                                    <h5 class="mb-0">Apps</h5>
                                </div>
                                <div class="p-3">
                                    <div class="row row-xs">
                                        <div class="col-6">
                                            <a href="{{ route('chat') }}">
                                                <div class="border-radius-1 text-center mb-3">
                                                    <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-primary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="message-circle"></i>
                                                </span>
                                                    </figure>
                                                    <div class="mt-2">Chat</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('mail') }}">
                                                <div class="border-radius-1 text-center mb-3">
                                                    <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-secondary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="mail"></i>
                                                </span>
                                                    </figure>
                                                    <div class="mt-2">Mail</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('todo-list') }}">
                                                <div class="border-radius-1 text-center">
                                                    <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-info text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="check-circle"></i>
                                                </span>
                                                    </figure>
                                                    <div class="mt-2">Todo List</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('file-manager') }}">
                                                <div class="border-radius-1 text-center">
                                                    <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-warning text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="file"></i>
                                                </span>
                                                    </figure>
                                                    <div class="mt-2">File Manager</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Actions" data-toggle="dropdown">Create</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Add Products</a>
                                <a href="#" class="dropdown-item">Add Category</a>
                                <a href="#" class="dropdown-item">Add Report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Reports</a>
                                <a href="#" class="dropdown-item">Customers</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                <i data-feather="search"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                <i class="maximize" data-feather="maximize"></i>
                                <i class="minimize" data-feather="minimize"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link nav-link-notify" title="Chats" data-sidebar-target="#chat-list">
                                <i data-feather="message-circle"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                                <i data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div
                                    class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Notifications</h5>
                                    <small class="opacity-7">2   unread notifications</small>
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                        <li class="px-4 py-2 text-center small text-muted bg-light">Today</li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-circle">
                                                            <i class="ti-lock"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        2 steps verification
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">20 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                            <i class="ti-server"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Storage is running low!
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">45 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-2 text-center small text-muted bg-light">Old Notifications</li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                            <i class="ti-file"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        1 person sent a file
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">Yesterday</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="ti-download"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Reports ready to download
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">Yesterday</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span class="avatar-title bg-primary-bright text-primary rounded-circle">
                                                            <i class="ti-arrow-top-right"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        The invitation has been sent.
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">Last Week</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="px-4 py-3 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="#">Mark All Read</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                                <i data-feather="shopping-bag"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div
                                    class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Cart</h5>
                                    <small class="opacity-7">4 products</small>
                                </div>
                                <div class="dropdown-scroll">
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="px-4 py-3 list-group-item d-flex">
                                            <div class="flex-shrink-0">
                                                <figure class="avatar mr-3">
                                                    <img class="rounded" src="{{ url('assets/media/image/products/product6.png') }}"
                                                         alt="Canon 4000D 18-55 MM">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Canon 4000D 18-55 MM
                                                    <i title="Close" data-toggle="tooltip"
                                                       class="hide-show-toggler-item small ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $1,200</span>
                                            </div>
                                        </a>
                                        <a href="#" class="px-4 py-3 list-group-item d-flex">
                                            <div class="flex-shrink-0">
                                                <figure class="avatar mr-3">
                                                    <img class="rounded" src="{{ url('assets/media/image/products/product3.png') }}"
                                                         alt="pineapple">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Snopy SN-BT96 Pretty
                                                    <i title="Close" data-toggle="tooltip"
                                                       class="hide-show-toggler-item small ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $250</span>
                                            </div>
                                        </a>
                                        <a href="#" class="px-4 py-3 list-group-item d-flex">
                                            <div class="flex-shrink-0">
                                                <figure class="avatar mr-3">
                                                    <img src="{{ url('assets/media/image/products/product7.png') }}"
                                                         class="rounded" alt="pineapple">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Lenovo Tab E10 TB-X104F 32GB
                                                    <i title="Close" data-toggle="tooltip"
                                                       class="hide-show-toggler-item small ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $100</span>
                                            </div>
                                        </a>
                                        <a href="#" class="px-4 py-3 list-group-item d-flex">
                                            <div class="flex-shrink-0">
                                                <figure class="avatar mr-3">
                                                    <img class="rounded" src="{{ url('assets/media/image/products/product6.png') }}"
                                                         alt="Canon 4000D 18-55 MM">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Canon 4000D 18-55 MM
                                                    <i title="Close" data-toggle="tooltip"
                                                       class="hide-show-toggler-item small ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $1,200</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top text-right small">
                                    <p class="d-flex justify-content-between align-items-center mb-1">
                                        <span>Sub Total</span>
                                        <span>$1,650</span>
                                    </p>
                                    <p class="d-flex justify-content-between align-items-center mb-1">
                                        <span>Taxes</span>
                                        <span>$15</span>
                                    </p>
                                    <p class="d-flex justify-content-between align-items-center mb-1 font-weight-bold">
                                        <span>Total</span>
                                        <span>$1,665</span>
                                    </p>
                                    <button class="btn btn-primary btn-block mt-2">
                                        Order and Payment <i class="ti-arrow-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                                <i data-feather="settings"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                <figure class="avatar avatar-sm">
                                    <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                         class="rounded-circle"
                                         alt="avatar">
                                </figure>
                                <span class="ml-2 d-sm-inline d-none">Bony Gidden</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="text-center">Bony Gidden</h5>
                                    <div class="mb-3 small text-center text-muted">@bonygidden</div>
                                    <a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
                                </div>
                                <div class="list-group">
                                    <a href="{{ route('profile') }}" class="list-group-item">View Profile</a>
                                    <a href="http://bifor.laborasyon.com/login" class="list-group-item text-danger"
                                       data-sidebar-target="#settings">Sign Out!</a>
                                </div>
                                <div class="p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Storage
                                            <span>%25</span>
                                        </h6>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 40%;"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <p class="small mb-0">
                                        <a href="#">Privacy policy</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-header">
                <span>Navigation</span>
                <a href="#">
                    <i class="ti-close"></i>
                </a>
            </div>
            <div class="navigation-menu-body">
                <ul>
                    <li>
                        <a @if(!request()->segment(1)) class="active" @endif href="{{ route('dashboard') }}">
                    <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'chat') class="active"
                           @endif href="{{ route('chat') }}">
                    <span class="nav-link-icon">
                        <i data-feather="message-circle"></i>
                    </span>
                            <span>Chat</span>
                            <span class="badge badge-danger">5</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'mail') class="active"
                           @endif href="{{ route('mail') }}">
                    <span class="nav-link-icon">
                        <i data-feather="mail"></i>
                    </span>
                            <span>Mail</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'todo-list') class="active"
                           @endif href="{{ route('todo-list') }}">
                    <span class="nav-link-icon">
                        <i data-feather="check-square"></i>
                    </span>
                            <span>Todo List</span>
                            <span class="badge badge-warning">2</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'file-manager') class="active"
                           @endif href="{{ route('file-manager') }}">
                    <span class="nav-link-icon">
                        <i data-feather="file-plus"></i>
                    </span>
                            <span>File Manager</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'calendar') class="active"
                           @endif href="{{ route('calendar') }}">
                    <span class="nav-link-icon">
                        <i data-feather="calendar"></i>
                    </span>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'gallery') class="active"
                           @endif href="{{ route('gallery') }}">
                    <span class="nav-link-icon">
                        <i data-feather="image"></i>
                    </span>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'invoice') class="active"
                           @endif href="{{ route('invoice') }}">
                    <span class="nav-link-icon">
                        <i data-feather="file-text"></i>
                    </span>
                            <span>Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="shopping-cart"></i>
                    </span>
                            <span>E-commerce</span>
                        </a>
                        <ul>
                            <li>
                                <a @if(request()->segment(1) == 'orders') class="active"
                                   @endif href="{{ route('orders') }}">Orders</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'products') class="active"
                                   @endif href="{{ route('products') }}">Products</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'product-detail') class="active"
                                   @endif href="{{ route('product-detail') }}">Product Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="edit-3"></i>
                    </span>
                            <span>Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a @if(request()->segment(1) == 'basic-forms') class="active"
                                   @endif href="{{ route('basic-forms') }}">Basic Forms</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'custom-forms') class="active"
                                   @endif href="{{ route('custom-forms') }}">Custom Forms</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'advanced-forms') class="active"
                                   @endif href="{{ route('advanced-forms') }}">Advanced Forms</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'form-validation') class="active"
                                   @endif href="{{ route('form-validation') }}">Form Validation</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'form-wizard') class="active"
                                   @endif href="{{ route('form-wizard') }}">Form Wizard</a>
                            </li>

                            <li>
                                <a @if(request()->segment(1) == 'form-repeater') class="active"
                                   @endif href="{{ route('form-repeater') }}">Form Repeater</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'file-upload') class="active"
                                   @endif href="{{ route('file-upload') }}">File Upload</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'ckeditor') class="active"
                                   @endif href="{{ route('ckeditor') }}">CKEditor</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'datepicker') class="active"
                                   @endif href="{{ route('datepicker') }}">Datepicker</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'timepicker') class="active"
                                   @endif href="{{ route('timepicker') }}">Timepicker</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'colorpicker') class="active"
                                   @endif href="{{ route('colorpicker') }}">Colorpicker</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="layers"></i>
                    </span>
                            <span>Components</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">Elements</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'alert') class="active"
                                           @endif href="{{ route('alert') }}">Alerts</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'accordion') class="active"
                                           @endif href="{{ route('accordion') }}">Accordion</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'buttons') class="active"
                                           @endif href="{{ route('buttons') }}">Buttons</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'dropdown') class="active"
                                           @endif href="{{ route('dropdown') }}">Dropdown</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'list-group') class="active"
                                           @endif href="{{ route('list-group') }}">List Group</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'pagination') class="active"
                                           @endif href="{{ route('pagination') }}">Pagination</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'typography') class="active"
                                           @endif href="{{ route('typography') }}">Typography</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'media-object') class="active"
                                           @endif href="{{ route('media-object') }}">Media Object</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'progress') class="active"
                                           @endif href="{{ route('progress') }}">Progress</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'modal') class="active"
                                           @endif href="{{ route('modal') }}">Modal</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'spinners') class="active"
                                           @endif href="{{ route('spinners') }}">Spinners</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'navs') class="active"
                                           @endif href="{{ route('navs') }}">Navs</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'tab') class="active"
                                           @endif href="{{ route('tab') }}">Tab</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'tooltip') class="active"
                                           @endif href="{{ route('tooltip') }}">Tooltip</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'popovers') class="active"
                                           @endif href="{{ route('popovers') }}">Popovers</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Cards</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'basic-cards') class="active"
                                           @endif href="{{ route('basic-cards') }}">Basic Cards </a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'image-cards') class="active"
                                           @endif href="{{ route('image-cards') }}">Image Cards </a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'scroll-cards') class="active"
                                           @endif href="{{ route('scroll-cards') }}">Scroll Cards </a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'other-cards') class="active"
                                           @endif href="{{ route('other-cards') }}">Others Cards</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'basic-tables') class="active"
                                           @endif href="{{ route('basic-tables') }}">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'dataTable') class="active"
                                           @endif href="{{ route('dataTable') }}">Datatable</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'responsive-tables') class="active"
                                           @endif href="{{ route('responsive-tables') }}">Responsive Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Charts</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'apexchart') class="active"
                                           @endif href="{{ route('apexchart') }}">Apex Chart</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'chartjs') class="active"
                                           @endif href="{{ route('chartjs') }}">Chartjs</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'justgage') class="active"
                                           @endif href="{{ route('justgage') }}">Justgage</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'morsis') class="active"
                                           @endif href="{{ route('morsis') }}">Morsis</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'peity') class="active"
                                           @endif href="{{ route('peity') }}">Peity</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Maps</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'google-map') class="active"
                                           @endif href="{{ route('google-map') }}">Google Map</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'vector-map') class="active"
                                           @endif href="{{ route('vector-map') }}">Vector Map</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'avatar') class="active"
                                   @endif href="{{ route('avatar') }}">
                                    Avatar
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'icons') class="active"
                                   @endif href="{{ route('icons') }}">
                                    Icons
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'colors') class="active"
                                   @endif href="{{ route('colors') }}">
                                    Colors
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="gift"></i>
                    </span>
                            <span>Plugins</span>
                        </a>
                        <ul>
                            <li>
                                <a @if(request()->segment(1) == 'sweet-alert') class="active"
                                   @endif href="{{ route('sweet-alert') }}">Sweet Alert</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'lightbox') class="active"
                                   @endif href="{{ route('lightbox') }}">Lightbox</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'toast') class="active"
                                   @endif href="{{ route('toast') }}">Toast</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'tour') class="active"
                                   @endif href="{{ route('tour') }}">Tour</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'slick-slide') class="active"
                                   @endif href="{{ route('slick-slide') }}">Slick Slide</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'nestable') class="active"
                                   @endif href="{{ route('nestable') }}">Nestable</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="copy"></i>
                    </span>
                            <span>Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a @if(request()->segment(1) == 'profile') class="active"
                                   @endif href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'users') class="active"
                                   @endif href="{{ route('users') }}">Users</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'settings') class="active"
                                   @endif href="{{ route('settings') }}">Settings</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" target="_blank">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}" target="_blank">Register</a>
                            </li>
                            <li>
                                <a href="{{ route('recovery-password') }}" target="_blank">Recovery Password</a>
                            </li>
                            <li>
                                <a href="{{ route('lock-screen') }}" target="_blank">Lock Screen</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'timeline') class="active"
                                   @endif href="{{ route('timeline') }}">Timeline</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'pricing-table') class="active"
                                   @endif href="{{ route('pricing-table') }}">Pricing Table</a>
                            </li>

                            <li>
                                <a @if(request()->segment(1) == 'pricing-table-2') class="active"
                                   @endif href="{{ route('pricing-table-2') }}">Pricing Table 2</a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'search-result') class="active"
                                   @endif href="{{ route('search-result') }}">Search Result</a>
                            </li>
                            <li>
                                <a href="#">Error Pages</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('404') }}" target="_blank">404</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('mean-at-work') }}" target="_blank">Mean at Work</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'blank-page') class="active"
                                   @endif href="{{ route('blank-page') }}">Blank Page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'mailing') class="active"
                           @endif href="{{ route('mailing') }}">
                    <span class="nav-link-icon">
                        <i data-feather="corner-up-right"></i>
                    </span>
                            <span>Mailing</span>
                        </a>
                        <ul>
                            <li>
                                <a target="_blank" href="{{ route('email-template-basic') }}">Basic</a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ route('email-template-alert') }}">Alert</a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ route('email-template-billing') }}">Billing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="menu"></i>
                    </span>
                            <span>Menu Level</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">Menu Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Menu Level </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="disabled">
                    <span class="nav-link-icon">
                        <i data-feather="mouse-pointer"></i>
                    </span>
                            <span>Disabled</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content @yield('parentClassName')">
                @yield('content')
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© {{ date('Y') }} Gogi - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ url('vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('assets/js/app.min.js') }}"></script>
</body>
</html>
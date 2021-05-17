<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>Home - Shoebox</title>
</head>
<body>
    <!-- Big screen menu -->
    @include('includes.menu')
    
    <div id="content-wrapper">
        <div class="content">
            <div class="container">
                @include('includes.mobilemenu')
                <div class="row">
                    <!-- Content -->
                    <div class="col-md-12">
                        <div class="d-flex justify-content-end mb-0 shoebox-searchbar-flex">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2 shoebox-searchbar" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                        <section class="showcase">
                            <article>
                                <span class="image">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ URL::asset('img/packages/standard.png') }} " />
                                    </a>
                                </span>
                            </article>
                            <article>
                                <span class="image">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ URL::asset('img/packages/deluxe.png') }} " />
                                    </a>
                                </span>
                            </article>
                            <article>
                                <span class="image">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ URL::asset('img/packages/premium.png') }} " />
                                    </a>
                                </span>
                            </article>
                        </section>
                        <section class="showcase-secondary">
                            <div class="col-md">
                                <div class="menu-image d-flex align-items-center mt-5 ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                
                                    <div class="menu-text flex-grow-1 align-items-center py-4 px-2 ">
                                        <h3 class="mb-1">Alle shoeboxes bekijken?</h3>
                                        <div class="menu-content d-flex justify-content-between">
                                            <a href="{{route('products')}}">
                                                <button class="btn btn-primary btn-showcase"><h1>Bekijk boxes</h1></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="menu-image d-flex align-items-center mt-5 ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                
                                <div class="menu-text flex-grow-1 align-items-center py-4 px-2 ">
                                    <h3 class="mb-1">Meer weten over shoebox?</h3>
                                    <div class="menu-content d-flex justify-content-between">
                                        <a href="{{route('over')}}">
                                            <button class="btn btn-primary btn-showcase"><h1>Leer meer</h1></button>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ URL::asset('js/script.js') }} "></script>
</body>
</html>
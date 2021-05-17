<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>Products - Shoebox</title>
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
                            <article>
                                <span class="image mt-4 mobile-margin">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ URL::asset('img/packages/premiumxl.png') }} " />
                                    </a>
                                </span>
                            </article>
                            <article>
                                <span class="image mt-4 mobile-margin">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ URL::asset('img/packages/premiumxxl.png') }} " />
                                    </a>
                                </span>
                            </article>
                            <article>
                                <span class="image mt-4 mb-5 mobile-margin">
                                    <a href="{{ route('product') }}">
                                        <img src="{{ URL::asset('img/packages/premiumxxxl.png') }} " />
                                    </a>
                                </span>
                            </article>
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
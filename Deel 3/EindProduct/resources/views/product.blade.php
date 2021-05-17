<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Product - Shoebox</title>
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
                        <div class="d-flex align-items-center flex-xl-row flex-column mt-5 ml-auto">
                            <div class="product-images">
                                <img class="img-fluid" src="{{ URL::asset('img/packages/premium-single-product.png') }}">
                                <div class="d-flex justify-content-center small-img mt-4">
                                    <img src="{{ URL::asset('img/packages/premium-single-product-small.png') }} ">
                                    <img src="{{ URL::asset('img/packages/premium-single-product-small.png') }} ">
                                    <img src="{{ URL::asset('img/packages/premium-single-product-small.png') }} ">
                                </div>
                            </div>
                            <div class="product-info">
                                <h1>Premium Pakket</h1>
                                <p>Een uitgelicht premium pakket samengesteld door Shoebox. Twijfelt u nog? Stuur een mail met uw twijfels naar info@shoebox.nl of bel ons van 09:00 tot 17:00 via 061234678. Shoebox, uw schoenen onze box.<br><br>

                                    Materiaal : Leer & Rubber<br>
                                    Wasbaar : V<br>
                                    Waterbestendig : X
                                </p>
                                <form action="{{ route('cart') }}">
                                    <div class="form-group">
                                        <label for="size">Maat :</label>
                                        <select class="form-control" id="size" aria-describedby="sizeHelp">
                                            <option value="36">36</option>
                                            <option value="36.5">36.5</option>
                                            <option value="37">37</option>
                                            <option value="37">37.5</option>
                                            <option value="38">38</option>
                                            <option value="38.5">38.5</option>
                                            <option value="39">39</option>
                                            <option value="39.5">39.5</option>
                                            <option disabled value="40">40 (uitverkocht)</option>
                                            <option value="41">41</option>
                                            <option value="41.5">41.5</option>
                                            <option value="42">42</option>
                                            <option value="42.5">42.5</option>
                                            <option disabled value="43">43 (uitverkocht)</option>
                                            <option value="43.5">43.5</option>
                                            <option value="44">44</option>
                                            <option value="44.5">44.5</option>
                                            <option value="45">45</option>
                                            <option value="45.5">45.5</option>
                                            <option value="46">46</option>
                                            <option value="46.5">46.5</option>
                                        </select>
                                        <small id="sizeHelp" class="form-text text-muted">Maten kunnen groter uitvallen.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Geslacht</label>
                                        <select class="form-control" id="gender">
                                            <option value="male">Man</option>
                                            <option value="female">Vrouw</option>
                                            <option value="nonb">Non binair</option>
                                            <option value="none">Zeg ik liever niet</option>
                                        </select>       
                                    </div>
                                    <div class="d-flex align-items-center flex-column justify-content-center mt-5 ml-auto">
                                        <button type="submit" class="btn btn-primary btn-single-product">Abonneren</button>
                                        <button type="button" id="btn-modal" class="btn btn-primary btn-single-product mt-2 mb-3">Bekijk recensies</button>
                                    </div>
                                    </form>
                            </div>
                        </div>
                        <div id="product-modal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <span class="heading">Premium Shoebox Reviews</span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p>Gemiddeld 4.6 sterren gebaseerd op 254 reviews.</p>
                                <div class="row">
                                    <div class="side">
                                        <div>5 sterren</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="ster-5"></div>
                                        </div>
                                    </div>
                                    <div class="side text-right">
                                        <div>150</div>
                                    </div>
                                    <div class="side">
                                        <div>4 sterren</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="ster-4"></div>
                                        </div>
                                    </div>
                                    <div class="side text-right">
                                        <div>63</div>
                                    </div>
                                    <div class="side">
                                        <div>3 sterren</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="ster-3"></div>
                                        </div>
                                    </div>
                                    <div class="side text-right">
                                        <div>33</div>
                                    </div>
                                    <div class="side">
                                        <div>2 sterren</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="ster-2"></div>
                                        </div>
                                    </div>
                                    <div class="side text-right">
                                        <div>25</div>
                                    </div>
                                    <div class="side">
                                        <div>1 ster</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="ster-1"></div>
                                        </div>
                                    </div>
                                    <div class="side text-right">
                                        <div>5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ URL::asset('js/script.js') }} "></script>
</body>
</html>
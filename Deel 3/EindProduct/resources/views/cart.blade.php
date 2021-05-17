<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>Winkelwagen - Shoebox</title>
</head>
<body>
    <!-- Big screen menu -->
    @include('includes.menu')
    
    <div id="content-wrapper">
        <div class="content">
            <div class="container">
                <!-- Mobile menu -->
                @include('includes.mobilemenu')
                <div class="row">
                    <!-- Content -->
                    <div class="col-md-12">
                        <h1> Winkelwagen</h1>
                        <div class="cart-section">
                            <div class="row">
                                <div class="cart-items">
                                    <ul class="cart-list">
                                        <li class="cart-item clearfix">
                                            <div class="cart-item-info d-flex flex-row justify-content-between">
                                                <div class="cart-item-quantity">
                                                    <div class="cart-item-title">Aantal</div>
                                                </div>
                                                <div class="cart-item-name">
                                                    <div class="cart-item-title">Product Naam</div>
                                                </div>
                                                <div class="cart-item-size">
                                                    <div class="cart-item-title">Maat</div>
                                                </div>
                                                <div class="cart-item-gender">
                                                    <div class="cart-item-title">Gender</div>
                                                </div>
                                                <div class="cart-item-price">
                                                    <div class="cart-item-title">Prijs</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="cart-list-secondary">
                                        <li class="cart-item clearfix">
                                            <div class="cart-item-info d-flex flex-row justify-content-between text-left">
                                                <div class="cart-item-quantity">
                                                    <div class="cart-item-text">2</div>
                                                </div>
                                                <div class="cart-item-name">
                                                    <div class="cart-item-text">Shoebox Standaard</div>
                                                </div>
                                                <div class="cart-item-size">
                                                    <div class="cart-item-text">46</div>
                                                </div>
                                                <div class="cart-item-gender">
                                                    <div class="cart-item-text">Vrouw</div>
                                                </div>
                                                <div class="cart-item-price">
                                                    <div class="cart-item-text">€12.50,-</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item clearfix">
                                            <div class="cart-item-info d-flex flex-row justify-content-between text-left">
                                                <div class="cart-item-quantity">
                                                    <div class="cart-item-text">1</div>
                                                </div>
                                                <div class="cart-item-name">
                                                    <div class="cart-item-text">Shoebox Premium</div>
                                                </div>
                                                <div class="cart-item-size">
                                                    <div class="cart-item-text">46</div>
                                                </div>
                                                <div class="cart-item-gender">
                                                    <div class="cart-item-text">Man</div>
                                                </div>
                                                <div class="cart-item-price">
                                                    <div class="cart-item-text">€50.00,-</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button type="button" class="cart-button cart-button-checkout">Afrekenen</button>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.1/bootstrap-icons.svg">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>Home - Shoebox</title>
</head>
<body>
    @include('includes.menu')
    
    <div id="content-wrapper">
        <div class="content">
            <div class="container">
                @include('includes.mobilemenu')
                    <div class="align-items-center justify-content-center mb-3 mb-md-0 me-md-auto">
                        <form action="" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <input type="submit" value="Wijzigen" class="btn btn-primary btn-full-width" /></li>
                                <div class="form-group mt-3">
                                    <label for="name">Gebruikersnaam</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ Auth::user()->name }}" value="{{ old('name', Auth::user()->name) }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ Auth::user()->email }}" value="{{ old('email', Auth::user()->email) }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Wachtwoord</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Nieuw wachtwoord" />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password_confirmation">Bevestig Wachtwoord</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Nieuw wachtwoord" />
                                </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ URL::asset('js/script.js') }} "></script>
</body>
</html>
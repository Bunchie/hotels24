<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hostel24</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <link href={{asset('css/bootstrap-social.css')}} rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <style>

        @font-face {
            font-family: hostel24;
            src: url(/fonts/10479.ttf);
        }

        body {
            font-family: hostel24;
            font-weight: bold;
        }

        .hostel24-form {
            width: 100%;
            margin: 15px;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #424242;
            -webkit-box-shadow: 0px 0px 29px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 29px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 29px 0px rgba(0, 0, 0, 0.75);
        }

        .hostel24-form-header {
            text-align: center;
            background-color: #424242;
            border-radius: 5px 5px 0px 0px;
        }

        .hostel24-form-header-text {
            font-size: 28px;
            color: #FFFFFF;
        }

        .hostel24-form-social-icon {
            float: left;
            font-size: 1.5rem;

        }

        .hostel24-form-input {
            color: #666666;
            border: 1px solid #959595;
            border-radius: 5px;
            box-shadow: inset 2px 2px 2px 0 rgba(149, 149, 149, 0.75);
            padding-left: 4px;
        }

        @media screen and (min-width: 960px) {
            .hostel24-form {
                width: 600px;
                margin-top: 150px;
            }
        }

    </style>
</head>
<body>
<a href="/auth/login/en">
    <button>EN</button>
</a>
<a href="/auth/login/uk">
    <button>UK</button>
</a>
<a href="/auth/login/ru">
    <button>RU</button>
</a>
<section class="container">
    <form method="POST" action={{'/auth/login/' . App::getLocale()}} class='hostel24-form d-block mx-auto
    '>

    {{ csrf_field() }}

    <div class="form-group hostel24-form-header">
        <div class="hostel24-form-header-brand">
            <img src="https://hotels24.ua/images/logo-w.png" alt="Hotels24.ua"/>
        </div>
        <div class="hostel24-form-header-text">@lang('hotel24.sign_in')</div>
    </div>

    <div class="form-group hostel24-form-title">
        @lang('hotel24.title_social')
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="form-group ">
                <button type="button" class="btn btn-tw btn-block btn-twitter">
                    <i class="fa fa-twitter hostel24-form-social-icon"></i>
                    <span>@lang('hotel24.btn_twitter')</span>
                </button>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <button type="button" class="btn btn-fb btn-block btn-facebook">
                    <i class="fa fa-facebook hostel24-form-social-icon"></i>
                    <span>@lang('hotel24.btn_facebook')</span>
                </button>
            </div>
        </div>

    </div>

    <hr/>

    <div class="form-group hostel24-form-title">
        @lang('hotel24.title_details')
    </div>

    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    <div class="form-group ">
        @if($errors->first('username'))
            <div class="alert alert-danger">
                {{$errors->first('username')}}
            </div>
        @endif
        <label for="username" class="sr-only">@lang('hotel24.username')</label>
        <input type="text" class="form-control hostel24-form-input"
               placeholder=@lang('hotel24.username') name="username">
    </div>
    <div class="form-group">
        @if($errors->first('password'))
            <div class="alert alert-danger">
                {{$errors->first('password')}}
            </div>
        @endif
        <label for="password" class="sr-only">@lang('hotel24.password')</label>
        <input type="password" class="form-control hostel24-form-input"
               placeholder=@lang('hotel24.password') name="password"
        >
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-8">
                <label class="sr-only">Checkbox</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> @lang('hotel24.keep_me')
                    </label>
                </div>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-warning btn-block">@lang('hotel24.sign_in_btn')</button>
            </div>
        </div>
    </div>

    <hr/>
    <div>
        <div class="row">
            <div class="col-lg-7">
                <span>@lang('hotel24.forgot_pass')</span>
            </div>
            <div class="col-lg-5">
                <span>@lang('hotel24.dont_have_account')</span>
                <a href="/">@lang('hotel24.register_now')</a>
            </div>
        </div>
    </div>
    </form>
</section>
</body>
</html>

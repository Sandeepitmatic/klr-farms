<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KLR</title>
    <!-- Min core CSS-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('css/color.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <header id="header" class="px-5 bg-black header">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-0 w-100 justify-content-between">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url(asset('images/logo.png'))}}" alt="logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-grow-0 flex-column justify-content-end"
                 id="navbarSupportedContent">
                <ul class="text-light mb-2 contact_ul">
                    <li>
                        <a href="#" class="text-light">
                            <img src="{{url(asset('images/mail.png'))}}" alt="logo"/>
                            info@yourdomain.com
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-light">
                            <img src="{{url(asset('images/phone.png'))}}" alt="logo"/>
                            +1 292 3837 280
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto headerLeftMenu text_golden w-100 justify-content-end">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Products & Services</a></li>
                    <li><a href="#">Ordering</a></li>
                </ul>
            </div>
        </nav>
    </header>

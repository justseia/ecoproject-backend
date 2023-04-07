<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	@vite('resources/css/app.css')
	<link href="{{asset('assets/images/favicon.ico')}}" rel="shortcut icon"/>
	<link href="{{asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/css/tailwind.css')}}" rel="stylesheet"/>
</head>
<body>

<x-header/>

<main>
	@yield('content')
</main>

<x-footer/>

<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 ltr:right-5 rtl:left-5 h-9 w-9 text-center bg-green-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>

<script src="{{asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
<script src="{{asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
<script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

<script src="{{asset('assets/js/easy_background.js')}}"></script>
<script src="{{asset('assets/js/plugins.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

<script>
    easy_background("#home",
        {
            slide: [{{asset('assets/images/bg/01.jpg')}}, {{asset('assets/images/bg/02.jpg')}}, {{asset('assets/images/bg/03.jpg')}}],
            delay: [4000, 4000, 4000]
        }
    );
</script>

</body>
</html>
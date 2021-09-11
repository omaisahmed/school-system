<head>
    <title>{{ isset($title) ? $title : '' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1">
    <meta name='description' content="{{ isset($description) ? $description : '' }}">
    <meta name='csrf-token' content="{{ csrf_token() }}"/>
    <meta name='keywords' content="{{ isset($keywords) ? $keywords : '' }}">
    <link rel="shortcut icon" href="assets/images/favicon.ico">


<!-- jvectormap -->
<link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/fullcalendar/vanillaCalendar.css')}}" rel="stylesheet" type="text/css"  />

<link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">

<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

</head>



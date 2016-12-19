<!DOCTYPE html>
<html class="full" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An open-source tool for checking and scoring log files from cd ripping software.">
    <title>CheckCD.rip</title>

    <!-- App CSS -->
    <link href="css/app.css" rel="stylesheet">
@yield('stylesheets')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@include('partials.navbar')

@yield('content')

@include('partials.footer')
</body>
<script src="js/app.js"></script>
@yield('scripts')
</html>

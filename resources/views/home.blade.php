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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><strong>CheckCD</strong>.rip</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li>
                    <a href="https://github.com/DenzoNL/riplogchecker" target="_blank">GitHub</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Check your rip</h2>
            <form method="POST" action="/score">
                <div class="form-group">
                    {{ csrf_field() }}
                    <textarea id="log" name="log" spellcheck="false" class="form-control" minlength="500"
                              rows="30" required></textarea>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input class="btn btn-lg btn-block btn-bw" id="submit" style="margin-top: 1em;" type="submit"
                           value="Check it!">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Put your page content here! -->

<!-- App JS -->
<script src="js/app.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var log = $("#log");
        log.focus();
        log.on('input propertychange', function () {
            $("#submit").focus();
        });
    });
</script>

</body>

</html>
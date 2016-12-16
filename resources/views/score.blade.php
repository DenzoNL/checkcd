<!DOCTYPE html>
<html class="full" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CheckCD.rip</title>

    <!-- App CSS -->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-dark.min.css">


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
            <h2>Result</h2>
            <div class="bg-black result">
                <h3>Score: {{ $score }}%</h3>
                @if($score == 100)
                    <p>Your rip was perfect! No errors occurred.</p>
                @elseif($score > 0 && $score < 100)
                    <p>Your rip wasn't perfect. The following errors occurred:</p>
                    @foreach($errors as $error)
                        @if($error == true)
                            <div class="error">
                                <p>{{ $errorMessages[$loop->index] }}</p>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" style="margin-top: 1em;" class="btn btn-default btn-lg" data-toggle="modal"
                    data-target="#jsonModal">
                View JSON
            </button>
        </div>
    </div>
</div>
<!-- Put your page content here! -->

<!-- App JS -->
<script src="js/app.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<div class="modal fade" id="jsonModal" tabindex="-1" role="dialog" aria-labelledby="jsonModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="jsonModalLabel">JSON</h4>
            </div>
            <div class="modal-body">
                <pre>
                    <code>{{$json}}</code>
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>
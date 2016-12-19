@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-dark.min.css">
@endsection
@section('content')
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
                <button type="button" style="margin-top: 1em;" class="btn btn-bw btn-lg" data-toggle="modal"
                        data-target="#jsonModal">
                    View JSON
                </button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
                    <pre><code style="background: rgba(19, 19, 19, 0)">{{$json}}</code></pre>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bw" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

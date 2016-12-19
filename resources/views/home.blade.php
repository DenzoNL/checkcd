@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Check your rip</h2>
            <form method="POST" action="/score">
                <div class="form-group">
                    {{ csrf_field() }}
                    <textarea id="log" name="log" spellcheck="false" class="form-control" minlength="500"
                              rows="25" required></textarea>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input class="btn btn-lg btn-block btn-bw" id="submit" style="margin-top: 1em;" type="submit"
                           value="Check it!">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var log = $("#log");
        log.focus();
        log.on('input propertychange', function () {
            $("#submit").focus();
        });
    });
</script>
@endsection

@section('content')
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-padding no-margin">
    <div id="freewall" class="free-wall no-visibility">
        @for($i=1; $i<=50; $i++)
            <div class="brick">
                <img src="bower_components/freewall/example/i/photo/{{$i}}.jpg" width="100%">
                <div class="info">
                    <h3>Freewall</h3>
                    <h5>Pinterest layout</h5>
                </div>
            </div>
        @endfor
    </div>
</div>
@stop
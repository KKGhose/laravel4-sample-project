@section('content')
<h2 class="page-header">Login into your account</h2>
<div class="well">
    @if (Session::has('message'))
        <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @endif
    <form action="/login" class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="col-lg-2 col-sm-2 col-xs-2 control-label">Email</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <input type="email" required="" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 col-sm-2 col-xs-2 control-label">Password</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <input type="password" required="" name="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-xs-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </form>
</div>
@stop
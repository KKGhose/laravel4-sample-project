@section('content')
<h2 class="page-header">Register your account</h2>
<div class="well">
    {{ Form::open(array('url' => '/register', 'class' => 'form-horizontal')) }}
    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::text('name', '', array('class'=>'form-control', 'id'=>'name', 'placeholder' => 'Full Name')) }}
            @if ($errors->has('name'))
                @foreach ($errors->get('name', '<p class="l4-form-error">:message</p>') as $name_error)
                {{ $name_error }}
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('email', 'E-Mail Address', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::text('email', '', array('class'=>'form-control', 'id'=>'email', 'placeholder' => 'E-Mail Address')) }}
            @if ($errors->has('email'))
                @foreach ($errors->get('email', '<p class="l4-form-error">:message</p>') as $email_error)
                    {{ $email_error }}
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder' => 'Password')) }}
            @if ($errors->has('password'))
                @foreach ($errors->get('password', '<p class="l4-form-error">:message</p>') as $password_error)
                {{ $password_error }}
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Retype Password', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::password('password_confirmation', array('class'=>'form-control', 'id'=>'password_confirmation', 'placeholder' => 'Retype Your Password Here')) }}
            @if ($errors->has('password_confirmation'))
            @foreach ($errors->get('password_confirmation', '<p class="l4-form-error">:message</p>') as $password_confirmation_error)
            {{ $password_confirmation_error }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('birth_date', 'Birth Date', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::text('birth_date', '', array('class'=>'form-control date-input', 'id'=>'birth_date', 'placeholder' => 'Birth Date')) }}
            @if ($errors->has('birth_date'))
                @foreach ($errors->get('birth_date', '<p class="l4-form-error">:message</p>') as $birth_date_error)
                {{ $birth_date_error }}
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('gender', 'Your Gender', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::select('gender', array('M' => 'Male', 'F' => 'Female'), '', array('class'=>'form-control', 'id'=>'email')); }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('', '', array('class' => 'col-lg-2 col-sm-2 col-xs-2 control-label')) }}
        <div class="col-lg-10 col-sm-10 col-xs-10">
            {{ Form::checkbox('terms'); }} I agree with terms and condition
            @if ($errors->has('terms'))
                @foreach ($errors->get('terms', '<p class="l4-form-error">:message</p>') as $terms_error)
                {{ $terms_error }}
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-xs-offset-2 col-sm-10">
            {{ Form::button('Register Me!', array( 'type' => 'submit', 'class'=>"btn btn-default")) }}
        </div>
    </div>
    {{ Form::close() }}
</div>
@stop
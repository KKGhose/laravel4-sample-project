<div class="row">
    <div class="col-lg-6 col-sm-6 col-xs-12 margin-bottom-20px">
        <div class="alert alert-info">Current Avatar</div>
        <img width="160" class="img-responsive" src="images/avatar.jpg">
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <div class="alert alert-info">Upload New Avatar</div>
        {{ Form::open(array('url' => '/profile-photo', 'onSubmit' => 'return submitProfilePhoto();', 'class' => 'form-horizontal', 'id' => 'from-profile-photo', 'files'=> true)) }}
            <div>
                {{ Form::file('avatar', array('class'=>'filestyle', 'id'=>'avatar')); }}
                {{ Form::button('Upload & Save', array( 'type' => 'submit', 'class'=>"btn btn-default")) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
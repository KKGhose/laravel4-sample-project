@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-9">
            <table class="table table-condensed">
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Birth Date</th>
                    <td>{{ date('d/m/Y', strtotime($user->birth_date)) }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $user->gender == 'M' ? 'Male' : 'Female' }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ $count }}</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <div class="profile-img-wrapper">
                <img class="img-responsive" src="images/avatar.jpg">
                <a data-toggle="modal" href="javascript:void(0)" class="profile-img-edit no-display">Change</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2"></div>
    </div>
@stop
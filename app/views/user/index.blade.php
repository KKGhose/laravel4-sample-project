@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
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
                    <td>{{ ucfirst($user->role) }}</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
            <a href="" class="thumbnail">
                <img data-src="holder.js/160x120" alt="160x120" style="width: 160px; height: 120px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAYAAAB1ovlvAAAFVUlEQVR4Xu3Yx0tjcRTF8Ss2FHtv2CtiF92o6H+uC8UOKvaGir03xD7cCwlOxqhMFufhPW5mYSYnfPOZ33tv4i4uLt6FPywAKhBHgKDynLUCBEgI0AIECM3PcQKkAWgBAoTm5zgB0gC0AAFC83OcAGkAWoAAofk5ToA0AC1AgND8HCdAGoAWIEBofo4TIA1ACxAgND/HCZAGoAUIEJqf4wRIA9ACBAjNz3ECpAFoAQKE5uc4AdIAtAABQvNznABpAFqAAKH5OU6ANAAtQIDQ/BwnQBqAFiBAaH6OEyANQAsQIDQ/xwmQBqAFCBCan+MESAPQAgQIzc9xAqQBaAEChObnOAHSALQAAULzc5wAaQBagACh+TlOgDQALUCA0PwcJ0AagBYgQGh+jhMgDUALECA0P8cJkAagBQgQmp/jBEgD0AIECM3PcQKkAWgBAoTm5zgB0gC0AAFC83PcDcDn52eZnJyUlJQU6ezsDH/z9/f3srKyIre3t5KcnCxNTU2SlZVlvz87O5P19XV5fHyU7Oxs+11SUtKP1ETb29vbk52dHdHfp6WlSUNDg2RkZMS896MPFcAXuQB4fX0ty8vLcnd3Jzk5OWGALy8vMjY2JvHx8VJbWytbW1vy+voqfX19hm50dNRwFBcXy+rqqhQWFkpzc/O3X2O0vaurK5menrb3yc/Pl42NDXl/f5f+/v6Y9r79QAF+wa8HqMiGh4elqKhITk9PJTMzMwzw5ORE5ufnpbGxUcrKyuTh4cEA6sl0eHgoi4uL0tLSYmBmZ2fl5uZGBgcH7QTTk7G6ulrKy8tlYmLC/l5vb69hjran/wD0VFXQetrq+x8dHcnQ0JAcHx9H3Quwn5g/2q8HqCeMXmYV1cjIiKSnp4cBhiDl5eXZJTgxMVHq6+vtlNze3pbNzU3p6uqyy+/CwoIhUYAJCQkG8vLy0l57fn4uHR0dkpubaydatL2P35ZinpmZsfdub2//di/mbzqgb/DrAX7sHg2gwqmpqbFLol4+9ZKo92ofAepJqSdmCODT05OMj4+L/llRUSF1dXX/fMWRe6EXKNy5uTm7n1TgehpGgo/cC6ifmD+Wa4B6ounJpg8XpaWlsr+/b/eKPT09dr+4tLQkra2tUlBQYKeVnpIKUH/0lNOHGr30fryv/Ap86MFGcelJ3NbWFn6oOTg4+HIv5m86oG/gGqA+ieqDhp5Aej+3u7trsPQhJPSA8tlDyNvbm0xNTdk9Y0lJif09fYiprKz862uOPAFDaPUyXVVVZfeL+qP49bPoA9H/PPQE1NaPPpZrgFpIL7lra2t24qWmpto9oN6XhU6rz/4bRl+v6PQBRU9HfbLVe7ru7m57yAn9RALUJ2m9tEf+DAwM2EkYy3/7/OjbDuCLXAEMYH/3H4kA3RPABiBAbH/36wTongA2AAFi+7tfJ0D3BLABCBDb3/06AbongA1AgNj+7tcJ0D0BbAACxPZ3v06A7glgAxAgtr/7dQJ0TwAbgACx/d2vE6B7AtgABIjt736dAN0TwAYgQGx/9+sE6J4ANgABYvu7XydA9wSwAQgQ29/9OgG6J4ANQIDY/u7XCdA9AWwAAsT2d79OgO4JYAMQILa/+3UCdE8AG4AAsf3drxOgewLYAASI7e9+nQDdE8AGIEBsf/frBOieADYAAWL7u18nQPcEsAEIENvf/ToBuieADUCA2P7u1wnQPQFsAALE9ne/ToDuCWADECC2v/t1AnRPABuAALH93a8ToHsC2AAEiO3vfp0A3RPABiBAbH/36wTongA2AAFi+7tfJ0D3BLABCBDb3/06AbongA3wBwD/nd7Sz5bcAAAAAElFTkSuQmCC">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2"></div>
    </div>
@stop
@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h5>修改资料</h5>
        </div>
        <div class="panel-body">
          <form method="POST" action="{{route('user.update', $user)}}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
               @include('layouts._errors')
              <div class="form-group">
                <label for="name">名称：</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
              </div>

              <div class="form-group">
                <label for="email">邮箱：</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled="disabled">
              </div>

              <div class="form-group">
                <label for="password">密码：</label>
                <input type="password" name="password" class="form-control" >
              </div>

              <div class="form-group">
                <label for="password_confirmation">确认密码：</label>
                <input type="password" name="password_confirmation" class="form-control">
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-info ">确定修改</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>


@stop

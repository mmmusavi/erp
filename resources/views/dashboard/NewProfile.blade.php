@extends('layouts.dashboardApp')

@section('content_title')
    @if(empty($user))
    فرم ایجاد پرونده
    @else
      ویرایش پرونده {{$user->name}}  {{$user->surname}}
    @endif
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" role="form" method="POST" action="@if(empty($user)){{ url('/dashboard/NewProfile') }} @else {{ url('/dashboard/profiles/modify/'.$user->id) }} @endif">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">نام</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="@if(empty($user)){{old('name')}}@else{{$user->name}}@endif">
            </div>
        </div>

        <div class="form-group">
            <label for="surname" class="col-md-4 control-label">نام خانوادگی</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="@if(empty($user)){{old('surname')}}@else{{$user->surname}}@endif">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in" style="margin-left: 8px;"></i>ثبت
                </button>
            </div>
        </div>
    </form>
@endsection

@extends('layouts.dashboardApp')

@section('content_title')
   فیلد ساز
@endsection

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="/dashboard/FieldCreator">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">نام</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="@if(empty($user)){{old('name')}}@else{{$user->name}}@endif">
            </div>
        </div>

        <div class="form-group">
            <label for="surname" class="col-md-4 control-label">نام لاتین یکتا</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="@if(empty($user)){{old('surname')}}@else{{$user->surname}}@endif">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">ثبت
                </button>
            </div>
        </div>
    </form>
@endsection

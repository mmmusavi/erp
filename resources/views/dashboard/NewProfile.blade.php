@extends('layouts.dashboardApp')

@section('content_title')
    فرم ایجاد پرونده
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
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/NewProfile') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">نام</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="surname" class="col-md-4 control-label">نام خانوادگی</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">
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

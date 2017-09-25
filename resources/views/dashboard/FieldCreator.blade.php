@extends('layouts.dashboardApp')

@section('content_title')
   فیلد ساز
@endsection

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="@if(empty($fields)){{ url('/dashboard/FieldCreator') }} @else {{ url('/dashboard/fields/modify/'.$fields->id) }} @endif">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">نام</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="@if(empty($fields)){{old('name')}}@else{{$fields->name}}@endif">
            </div>
        </div>

        <div class="form-group">
            <label for="unique_name" class="col-md-4 control-label">نام لاتین یکتا</label>

            <div class="col-md-6">
                <input id="unique_name" type="text" class="form-control" name="unique_name" value="@if(empty($fields)){{old('unique_name')}}@else{{$fields->unique_name}}@endif">
            </div>
        </div>
        <div class="form-group">
            <label for="section-id" class="col-md-4 control-label">nkkknkj</label>

            <div class="col-md-6">
                <select id="section-id" name="section-id" class="form-control">
                    <option disabled="disabled" selected>انتخاب کنید</option>
                    @foreach($parent as $parents)
                        <option value="{{$parents->id}}">{{$parents->name}}</option>
                    @endforeach
                </select>
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

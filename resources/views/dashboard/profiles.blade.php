@extends('layouts.dashboardApp')

@section('content_title')
   لیست پرونده ها
    <a href="/dashboard/NewProfile" class="btn btn-info" style="margin-right: 40px;">ایجاد پرونده جدید</a>
@endsection
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="/dashboard/profiles/search">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="keyword" class="col-md-4 control-label">جست و جو</label>
            <div class="col-md-3">
                <input id="keyword" type="text" class="form-control" name="keyword" placeholder="عبارت را وارد کنید">
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary"> فیلتر</button>
                    <button type="submit" class="btn btn-primary"> جست و جو</button>
                </div>

            </div>
        </div>
    </form>
  <table class="table text-center">
      <thead>
      <tr>
          <th class="text-center">شماره</th>
          <th class="text-center">نام</th>
          <th class="text-center">نام خانوادگی</th>
          <th class="text-center">ویرایش</th>
      </tr>
      </thead>
      <tbody>
      @foreach($users as $user)
      <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->surname}}</td>
          <td><a href="/dashboard/profiles/modify/{{$user->id}}" title="ویرایش"><i class="fa fa-pencil" style="margin-left: 40px;"></i></a>
              <a href="/dashboard/profiles/delete/{{$user->id}}" title="حذف"><i class="fa fa-remove"></i></a>
          </td>
      </tr>
      @endforeach
      </tbody>
  </table>
@endsection

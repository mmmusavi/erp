@extends('layouts.dashboardApp')

@section('content_title')
   لیست پرونده ها
    <a href="/dashboard/NewProfile" class="btn btn-info" style="margin-right: 40px;">ایجاد پرونده جدید</a>
@endsection

@section('content')
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
      <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td><a href="#"><i class="fa fa-pencil" style="margin-left: 40px;"></i></a>
              <a href="#"><i class="fa fa-remove"></i></a>
          </td>
      </tr>
      </tbody>
  </table>
@endsection

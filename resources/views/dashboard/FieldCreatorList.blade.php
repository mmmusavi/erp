@extends('layouts.dashboardApp')

@section('content_title')
   لیست فیلدها
    <a href="/dashboard/FieldCreator" class="btn btn-info" style="margin-right: 40px;">ایجاد فیلد جدید</a>
@endsection
@section('content')
  <table class="table text-center">
      <thead>
      <tr>
          <th class="text-center">شماره</th>
          <th class="text-center">نام</th>
          <th class="text-center">مربوط به</th>
          <th class="text-center">ویرایش</th>
      </tr>
      </thead>
      <tbody>
      @foreach($fields as $field)
          <tr>
              <td>{{$field->id}}</td>
              <td>{{$field->name}}</td>
              <td>{{$field->section->name}}</td>
              <td><a href="/dashboard/fields/modify/{{$field->id}}" title="ویرایش"><i class="fa fa-pencil" style="margin-left: 40px;"></i></a>
                  <a href="/dashboard/fields/delete/{{$field->id}}" title="حذف"><i class="fa fa-remove"></i></a>
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
@endsection

@extends('admins.layout')
@section('content')
<div class="card" style="margin:20px;">
<div class="card-header"><h4>Sửa</h4></div>
  <div class="card-body">
      <form action="{{ url('admin/' .$admins->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Tên Ingame</label></br>
        <input type="text" name="name" id="name" value="{{$admins->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$admins->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" value="{{$admins->password}}" class="form-control"></br>
        <label>Điện Thoại</label></br>
        <input type="text" name="phone" id="phone" value="{{$admins->phone}}" class="form-control"></br>
        <label>Quyền</label></br>
        <select name="role" id="role"  class="form-control">
          <option value="0">Admin </option>
          <option value="1">System Admin</option>
        </select></br>
        <label>Trạng Thái</label></br>
        <select name="status" id="status"  class="form-control">
          <option value="1">Hoạt Động </option>
          <option value="0">Không Hoạt Động</option>
        </select></br>
        <input type="submit" value="Lưu" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection

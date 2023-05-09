@extends('billing')
@section('content')

<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">

      <form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}
        <label>Tên Người Chơi:</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Password:</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
        <label>Kim Cương:</label></br>
        <input type="text" name="kc" id="kc" class="form-control"></br>
        <label>Trạng Thái</label></br>
        <select name="trangthai" id="trangthai" class="form-control">
          <option value="1" style="color: green;">Hoạt Động</option>
          <option value="0" style="color: red;">Không Hoạt Động</option>
        </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection


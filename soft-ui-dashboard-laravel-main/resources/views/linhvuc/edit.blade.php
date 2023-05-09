@extends('linhvuc.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('linhvuc/' .$linhvucs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$linhvucs->id}}" id="id" />
        <label>Tên Lĩnh Vưc:</label></br>
        <input type="text" name="tenlv" id="tenlv" value="{{$linhvucs->tenlv}}" class="form-control"></br>
        <label>Trạng Thái</label></br>
        <select name="trangthai" id="trangthai" class="form-control">
          <option value="1" style="color: green;">Hoạt Động</option>
          <option value="0" style="color: red;">Không Hoạt Động</option>
        </select></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection

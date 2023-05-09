@extends('card.layout')
@section('content')
<div class="card" style="margin:20px;">
<div class="card-header"><h4>Sửa</h4></div>
  <div class="card-body">
      <form action="{{ url('napthe/' .$cards->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cards->id}}" id="id" />
        <label>Loại Thẻ</label></br>
        <select name="loaithe" id="loaithe" class="form-control">
          <option value="Viettel">Viettel</option>
          <option value="Garena">Garena</option>
          <option value="Mobile">Mobile</option>
        </select></br>
        <!-- <input type="text" name="loaithe" id="loaithe" value="{{$cards->loaithe}}" class="form-control"></br> -->
        <label>Mệnh Giá</label></br>
        <!-- <input type="text" name="menhgia" id="menhgia" value="{{$cards->menhgia}}" class="form-control"></br> -->
        <select name="menhgia" id="menhgia" class="form-control">

          <option value="20000">20,000</option>
          <option value="50000">50,000</option>
          <option value="100000">100,000</option>
        </select></br>
        <label>Mã Thẻ</label></br>
        <input type="text" name="mathe" id="mathe" value="{{$cards->mathe}}" class="form-control"></br>
        <label>Trạng Thái</label></br>
        <!-- <input type="text" name="trangthai" id="trangthai" value="{{$cards->trangthai}}" class="form-control"></br> -->
        <select name="trangthai" id="trangthai" class="form-control">
          <option value="1">Hoạt Động </option>
          <option value="0">Không Hoạt Động</option>
        </select></br>
        <input type="submit" value="Lưu" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection

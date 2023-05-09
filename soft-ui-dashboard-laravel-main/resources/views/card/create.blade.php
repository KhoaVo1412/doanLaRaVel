@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Thêm Thẻ Nạp</div>
  <div class="card-body">
      <form action="{{ url('napthe') }}" method="post">
        {!! csrf_field() !!}
        <label>Loại Thẻ</label></br>
        <select name="loaithe" id="loaithe" class="form-control">
          <option value="Viettel">Viettel</option>
          <option value="Garena">Garena</option>
          <option value="Mobile">Mobile</option>
        </select></br>
        <!-- <input type="text" name="loaithe" id="loaithe" class="form-control"></br> -->
        <label>Mệnh Giá</label></br>
        <!-- <input type="number" name="menhgia" id="menhgia" class="form-control"></br> -->
        <select name="menhgia" id="menhgia" class="form-control">
          <option value="10000">10,000</option>
          <option value="20000">20,000</option>
          <option value="50000">50,000</option>

        </select></br>
        <label>Mã Thẻ</label></br>
        <input type="text" name="mathe" id="mathe" class="form-control"></br>
        <label>Trạng Thái</label></br>
        <!-- <input type="number" name="trangthai" id="trangthai" class="form-control"></br> -->
        <select name="trangthai" id="trangthai" class="form-control">
          <option value="1">Hoạt Động </option>
          <option value="0">Không Hoạt Động</option>
        </select></br>
        <input type="submit" value="Lưu" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection

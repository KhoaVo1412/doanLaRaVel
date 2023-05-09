@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Thêm</div>
  <div class="card-body">
      <form action="{{ url('luotchoi') }}" method="post">
        {!! csrf_field() !!}
        <label>ID Nguoi Choi</label></br>
        <input type="text" name="idNC" id="idNC" class="form-control"></br>
        <label>ID Linh Vuc</label></br>
        <input type="text" name="idLV" id="idLV" class="form-control"></br>
        <label>Thoi gian</label></br>
        <input type="date" name="TG" id="TG" class="form-control"></br>
        <label>Diem</label></br>
        <input type="text" name="diem" id="diem" class="form-control"></br>

        <input type="submit" value="Lưu" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection

@extends('admins.layout')
@section('content')
<div class="card" style="margin:20px;">
<div class="card-header"><h4>Sửa</h4></div>
  <div class="card-body">
      <form action="{{ url('luotchoi/' .$luotchois->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>ID Nguoi Choi</label></br>
        <input type="text" name="idNC" id="idNC" value="{{$luotchois->idNC}}" class="form-control"></br>
        <label>Id Linh Vuc</label></br>
        <input type="text" name="idLV" id="idLV" value="{{$luotchois->idLV}}" class="form-control"></br>
        <label>Thoi Gian</label></br>
        <input type="date" name="TG" id="TG" value="{{$luotchois->TG}}" class="form-control"></br>
        <label>Diem</label></br>
        <input type="text" name="diem" id="diem" value="{{$luotchois->diem}}" class="form-control"></br>

        <input type="submit" value="Lưu" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection

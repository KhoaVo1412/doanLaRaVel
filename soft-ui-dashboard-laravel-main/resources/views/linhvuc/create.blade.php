@extends('billing')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('linhvuc') }}" method="post">
        {!! csrf_field() !!}
        <label>Ten Linh Vuc</label></br>
        <input type="text" name="tenlv" id="tenlv" class="form-control"></br>
        <label>Trạng Thái</label></br>
        <select name="trangthai" id="trangthai" class="form-control">
            <option value="1">Hoạt Động </option>
            <option value="0">Không Hoạt Động</option>
          </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection


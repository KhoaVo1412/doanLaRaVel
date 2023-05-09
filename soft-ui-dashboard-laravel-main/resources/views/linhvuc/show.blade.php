@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">ID : {{ $linhvucs->id }}</h5>
        <p class="card-text">Tên Lĩnh Vực : {{ $linhvucs->tenlv }}</p>
        <p class="card-text">Trạng Thái : {{ $linhvucs->trangthai }}</p>

  </div>

    </hr>

  </div>
</div>
@endsection

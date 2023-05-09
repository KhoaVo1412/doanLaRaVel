@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Chi Tiết</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">ID Nguoi Choi: {{ $luotchois->idNC }}</h5>
        <p class="card-text">ID linh Vuc : {{ $luotchois->idLV }}</p>
        <p class="card-text">Thoi Gian : {{ $luotchois->TG }}</p>
        <p class="card-text">Diem : {{ $luotchois->diem }}</p>

  </div>
    </hr>
  </div>
</div>
@endsection

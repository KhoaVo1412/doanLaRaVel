@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">ID : {{ $users->id }}</h5>
        <p class="card-text">Tên Người Chơi : {{ $users->name }}</p>
        <p class="card-text">Email : {{ $users->email }}</p>
        <p class="card-text">Password : {{ $users->password }}</p>
        <p class="card-text">Kim Cương : {{ $users->kc }}</p>
        <p class="card-text">Trạng Thái : {{ $users->trangthai }}</p>

  </div>

    </hr>

  </div>
</div>
@endsection

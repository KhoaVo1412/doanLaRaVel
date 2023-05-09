@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Chi Tiết</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Tên Ingame: {{ $admins->name }}</h5>
        <p class="card-text">Email : {{ $admins->email }}</p>
        <p class="card-text">Password : {{ $admins->password }}</p>
        <p class="card-text">Số Điện Thoại : {{ $admins->phone }}</p>
        <p class="card-text">Quyền :  @if ($admins->role)
                                        <span style="color: green;">Super Admin</span>
                                        @else
                                        <span style="color: red;">Admin</span>
                                        @endif
        </p>
        <p class="card-text">Trạng Thái :  @if ($admins->status)
                                        <span style="color: green;">Hoạt Động</span>
                                        @else
                                        <span style="color: red;">Không Hoạt Động</span>
                                        @endif
        </p>
  </div>
    </hr>
  </div>
</div>
@endsection

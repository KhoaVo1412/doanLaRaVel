@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Thẻ Nạp</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Loại Thẻ : {{ $cards->loaithe }}</h5>
        <p class="card-text">Mệnh Giá : {{ $cards->menhgia }}</p>
        <p class="card-text">Mã Thẻ : {{ $cards->mathe }}</p>
        <p class="card-text">Trạng Thái :  @if ( $cards->trangthai)
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

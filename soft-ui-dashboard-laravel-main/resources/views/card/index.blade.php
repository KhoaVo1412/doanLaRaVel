@extends('billing')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Thẻ Nạp</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/napthe/create') }}" class="btn btn-success btn-sm" title="Thêm Mới">
                            <i class="fa fa-plus" aria-hidden="true"></i> Thêm Thẻ Nạp
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Loại Thẻ</th>
                                        <th>Mệnh Giá</th>
                                        <th>Mã Thẻ</th>
                                        <th>Trạng Thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cards as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ url('/napthe/' . $item->id) }}">{{ $item->loaithe }}</a></td>
                                        <td>{{ $item->menhgia }}</td>
                                        <td>{{ $item->mathe }}</td>
                                        <!-- <td>{{ $item->trangthai }}</td> -->
                                        <td>
                                        @if ($item->trangthai)
                                        <span style="color: green;">Hoạt Động</span>
                                        @else
                                        <span style="color: red;">Không Hoạt Động</span>
                                        @endif
                                        </td>
                                        <td>
                                            <!-- <a href="{{ url('/napthe/' . $item->id) }}" title="View card"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Chi Tiết</button></a> -->
                                            <a href="{{ url('/napthe/' . $item->id . '/edit') }}" title="Edit card"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>
                                            <form action="{{ url('napthe/' .$item->id) }}" method="post" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @if ($item->trangthai == 1)
                                                <input type="hidden" name="trangthai" id="trangthai" value="0">
                                                @else
                                                <input type="hidden" name="trangthai" id="trangthai" value="1">
                                                @endif
                                                <button type="submit" class="btn btn-primary btn-sm"> Ẩn/Hiện</button>
                                            </form>
                                            @if (auth()->user()->role == 1)
                                            <form method="POST" action="{{ url('/napthe' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete fied" onclick="return confirm(&quot;Xác Nhận Xóa?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
<script>
      $(document).ready(function() {
    $('#myTable').DataTable( {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/vi.json"
        }
    } );
} );
</script>
@endsection

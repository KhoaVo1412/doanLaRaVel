@extends('billing')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Quản Lý Quản Trị Viên</h2>
                    </div>

                    <div class="card-body">
                    @if (auth()->user()->role == 1)
                    <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm" title="Thêm Mới">
                            <i class="fa fa-plus" aria-hidden="true"></i> Thêm Quản Trị Viên
                        </a>
                        @endif
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Mật Khẩu</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Quyền</th>
                                        <th>Trạng Thái</th>
                                        @if (auth()->user()->role == 1)
                                        <th>Chức Năng</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ url('/admin/' . $item->id) }}">{{ $item->name}}</a></td>
                                        <td>{{ $item->email }}</td>
                                        <!-- <td>{{ $item->password }}</td> -->
                                        <td>*******</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                        @if ($item->role)
                                        <span style="color: green;">System Admin</span>
                                        @else
                                        <span style="color: red;">Admin</span>
                                        @endif
                                        </td>
                                        <!-- <td>{{ $item->trangthai }}</td> -->
                                        <td>
                                        @if ($item->status==1)
                                        <span style="color: green;">Hoạt Động</span>
                                        @else
                                        <span style="color: red;">Không Hoạt Động</span>
                                        @endif
                                        </td>

                                        @if (auth()->user()->role == 1)
                                        <td>
                                            <!-- <a href="{{ url('/admin/' . $item->id) }}" title="View card"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Chi Tiết</button></a> -->
                                            <a href="{{ url('/admin/' . $item->id . '/edit') }}" title="Edit card"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>
                                            <form action="{{ url('admin/' .$item->id) }}" method="post" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @if ($item->status == 1)
                                                <input type="hidden" name="status" id="status" value="0">
                                                @else
                                                <input type="hidden" name="status" id="status" value="1">
                                                @endif
                                                <button type="submit" class="btn btn-primary btn-sm"> Ẩn/Hiện</button>
                                            </form>
                                            <form method="POST" action="{{ url('/admin' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete card" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                            </form>

                                        </td>
                                        @endif
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

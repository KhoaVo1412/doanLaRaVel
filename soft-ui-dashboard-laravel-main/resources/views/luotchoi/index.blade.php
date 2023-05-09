@extends('billing')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Quản Lý Luot Choi</h2>
                    </div>

                    <div class="card-body">
                        @if (auth()->user()->role == 1)
                    <a href="{{ url('/luotchoi/create') }}" class="btn btn-success btn-sm" title="Thêm Mới">
                            <i class="fa fa-plus" aria-hidden="true"></i> Thêm Luot Choi
                        </a>
                        @endif
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID Nguoi Choi</th>
                                        <th>Id Linh Vuc</th>
                                        <th>Thoi Gian</th>
                                        <th>Diem</th>

                                        @if (auth()->user()->role == 1)
                                        <th>Chức Năng</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($luotchois as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->idNC }}</td>


                                        <td>{{ $item->idLV }}</td>
                                        <td>
                                            {{ $item->TG }}
                                        </td>
                                        <td>{{ $item->diem }}</td>


                                        @if (auth()->user()->role == 1)
                                        <td>
                                            <a href="{{ url('/luotchoi/' . $item->id . '/edit') }}" title="Edit card"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>

                                            <form method="POST" action="{{ url('/luotchoi' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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

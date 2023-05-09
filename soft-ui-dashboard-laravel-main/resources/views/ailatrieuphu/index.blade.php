@extends('billing')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ai La Trieu Phu</div>
                    <div class="card-body">
                        <a href="{{ url('/ailatrieuphu/create') }}" class="btn btn-success btn-sm" title="Add New Quesstion">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>Tên Lĩnh Vực:</th>
                                        <th>Câu Hỏi:</th>
                                        <th>Đáp Án Đúng:</th>
                                        <th>Đáp Án Sai</th>
                                        <th>Đáp Án Sai</th>
                                        <th>Đáp Án Sai</th>
                                        <th>Chức Năng</th>


                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ailatrieuphus as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                        @if ($item->category==1)
                                        <span style="color: green;">Java</span>
                                        @elseif ($item->category==2)
                                        <span style="color: rgb(110, 221, 238);">C++</span>
                                        @else
                                        <span style="color: red;">C#</span>
                                        @endif
                                        </td>
                                        <td>{{ $item->question }}</td>
                                        <td>{{ $item->correct_answer }}</td>
                                        <td>{{ $item->incorrect_1 }}</td>
                                        <td>{{ $item->incorrect_2 }}</td>
                                        <td>{{ $item->incorrect_3 }}</td>


                                        <td>
                                            <a href="{{ url('/ailatrieuphu/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/ailatrieuphu/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            @if (auth()->user()->role == 1)
                                            <form method="POST" action="{{ url('/ailatrieuphu' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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

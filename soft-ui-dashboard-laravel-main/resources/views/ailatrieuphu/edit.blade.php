@extends('ailatrieuphu.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('ailatrieuphu/' .$ailatrieuphus->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$ailatrieuphus->id}}" id="id" />
        <label>Tên Lĩnh Vực:</label></br>
        <select name="category" id="category" class="form-control">
          <option value="2" style="color: green;">C++</option>
          <option value="3" style="color: red;">C#</option>
          <option value="1" style="color: rgb(0, 123, 255);">Java</option>
        </select></br>
        <label>Câu Hỏi: </label></br>
        <input type="text" name="question" id="question" value="{{$ailatrieuphus->question}}" class="form-control"></br>
        <label>Đáp Án Đúng: </label></br>
        <input type="text" name="correct_answer" id="correct_answer" value="{{$ailatrieuphus->correct_answer}}" class="form-control"></br>
        <label>Đáp Án Sai: </label></br>
        <input type="text" name="incorrect_1" id="incorrect_1" value="{{$ailatrieuphus->incorrect_1}}" class="form-control"></br>
        <label>Đáp Án Sai: </label></br>
        <input type="text" name="incorrect_2" id="incorrect_2" value="{{$ailatrieuphus->incorrect_2}}" class="form-control"></br>
        <label>Đáp Án Sai: </label></br>
        <input type="text" name="incorrect_3" id="incorrect_3" value="{{$ailatrieuphus->incorrect_3}}" class="form-control"></br>
        {{-- <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$linhvucs->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$linhvucs->mobile}}" class="form-control"></br> --}}
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection

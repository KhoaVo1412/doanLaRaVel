@extends('billing')
@section('content')
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">ID : {{ $ailatrieuphus->id }}</h5>
        <p>Lĩnh vực:
            @if ($ailatrieuphus->category==1)
            <span style="color: green;">Java</span>
            @elseif ($ailatrieuphus->category==2)
            <span style="color: rgb(110, 221, 238);">C++</span>
            @else
            <span style="color: red;">C#</span>
            @endif
        </p>
        <p class="card-text">question : {{ $ailatrieuphus->question }}</p>
        <p class="card-text">correct_answer: {{ $ailatrieuphus->correct_answer }}</p>
        <p class="card-text">incorrect_1 : {{ $ailatrieuphus->incorrect_1 }}</p>
        <p class="card-text">incorrect_2 : {{ $ailatrieuphus->incorrect_2 }}</p>
        <p class="card-text">incorrect_3 : {{ $ailatrieuphus->incorrect_3 }}</p>

  </div>

    </hr>

  </div>
</div>
@endsection

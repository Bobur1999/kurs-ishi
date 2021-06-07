@extends('layouts.admin', ['title' => "Batafsil ko`rish"])

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$book->nom}} - kitobini ko'rish
        </h6>
    </div>
    <div class="card-body">
        <h3>{{$book->nom}}</h3>
        <p><img  width="200px" src="{{ '/storage/'.$book->img }}" alt="{{ $book->nom }}">
        </p>
        <b>Qisqacha: </b>
        <p>
            {{$book->qisqacha}}
        </p>
        <b>Avtor: </b>
        <p>
            {{$book->avtor}}
        </p>
        <b>Yaratildi: </b>{{$book->created_at->format('H:i d/m/Y')}} <br>
        <b>O'zgartirildi: </b>{{$book->updated_at->format('H:i d/m/Y')}}
    </div>
</div>
@endsection
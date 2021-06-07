@extends('layouts/admin', ['title'=>'Admin_books o`zgartirish'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        {{$book->nom}} - tahrirlash
        </h6>
    </div>
    <div class="card-body">
       
        @if( $errors -> any() )
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </ul>         
            </div>
        @endif
        
        <form method="POST" enctype="multipart/form-data" action="{{route('books.update', $book->id)}}">

            @csrf  
            @method('PUT')  
            <div class="form-group">
                <label for="">nomi</label>
                <input class="form-control" value="{{$book->nom}}" name="nom" type="text">
            </div>
            <div class="form-group">
                <label for="">Rasm</label>
                <input class="form-control"  name="img" type="file">
            </div>
            <div class="form-group">
                <label for="">Avtor</label>
                <input class="form-control" value="{{$book->avtor}}" name="avtor" type="text">
            </div>
            <div class="form-group">
                <label for="">Avtor_id</label>
                <input class="form-control" value="{{$book->avtor_id}}" name="avtor_id" type="text"></input>
            </div>
            <div class="form-group">
                <label for="">tur</label>
                <input class="form-control" value="{{$book->tur}}" name="tur" type="text">
            </div>
            <div class="form-group">
                <label for="">tur_id</label>
                <input class="form-control" value="{{$book->tur_id}}" name="tur_id" type="text">
            </div>
            <div class="form-group">
                <label for="">qisqacha</label>
                <textarea class="form-control" name="qisqacha" value="{{$book->qisqacha}}" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">narx</label>
                <input class="form-control" value="{{$book->narx}}" name="narx" type="text">
            </div>
            <div class="form-group">
                <label for="">nashriyot</label>
                <input class="form-control" value="{{$book->nashriyot}}" name="nashriyot" type="text">
            </div>
            <div class="form-group">
                <label for="">nashriyot_id</label>
                <input class="form-control" value="{{$book->nashriyot_id}}" name="nashriyot_id" type="text">
            </div>
            <div class="form-group">
                <label for="">til</label>
                <input class="form-control" value="{{$book->til}}" name="til" type="text">
            </div>
            <div class="form-group">
                <label for="">til_id</label>
                <input class="form-control" value="{{$book->til_id}}" name="til_id" type="text">
            </div>
            <div class="form-group">
                <label for="">varaqsoni</label>
                <input class="form-control" value="{{$book->varaqsoni}}" name="varaqsoni" type="text">
            </div>
            <div class="form-group">
                <label for="">yili</label>
                <input class="form-control" value="{{$book->yili}}" name="yili" type="text">
            </div>
            <button class="btn btn-sm btn-success">Saqlash</button>
        
        </form>
    </div>
    @endsection
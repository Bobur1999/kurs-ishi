@extends('layouts/admin', ['title'=>'Admin_books create'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">kitoblar qo'shish</h6>
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
        
        <form method="POST" enctype="multipart/form-data" action="{{route('books.store')}}">

            @csrf    
            <div class="form-group">
                <label for="">nomi</label>
                <input class="form-control" name="nom" type="text">
            </div>
            <div class="form-group">
                <label for="">Rasm</label>
                <input class="form-control" name="img" type="file">
            </div>
            <div class="form-group">
                <label for="">Avtor</label>
                <input class="form-control" name="avtor" type="text">
            </div>
            <div class="form-group">
                <label for="">Avtor_id</label>
                <input class="form-control" name="avtor_id" type="text"></input>
            </div>
            <div class="form-group">
                <label for="">tur</label>
                <input class="form-control" name="tur" type="text">
            </div>
            <div class="form-group">
                <label for="">tur_id</label>
                <input class="form-control" name="tur_id" type="text">
            </div>
            <div class="form-group">
                <label for="">qisqacha</label>
                <textarea class="form-control" name="qisqacha" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">narx</label>
                <input class="form-control" name="narx" type="text">
            </div>
            <div class="form-group">
                <label for="">nashriyot</label>
                <input class="form-control" name="nashriyot" type="text">
            </div>
            <div class="form-group">
                <label for="">nashriyot_id</label>
                <input class="form-control" name="nashriyot_id" type="text">
            </div>
            <div class="form-group">
                <label for="">til</label>
                <input class="form-control" name="til" type="text">
            </div>
            <div class="form-group">
                <label for="">til_id</label>
                <input class="form-control" name="til_id" type="text">
            </div>
            <div class="form-group">
                <label for="">varaqsoni</label>
                <input class="form-control" name="varaqsoni" type="text">
            </div>
            <button class="btn btn-sm btn-success">Saqlash</button>
        
        </form>
    </div>
    @endsection
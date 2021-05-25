@extends('layouts.admin', ['title'=>'Xabarlarni_ko`rish'])

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
           Xabarni o'qish
        </h6>

    </div>
    <div class="card-body">
        <table class="table table-striped">
         <tr>
            <td class="font-weight-bold">Ismi</td>
            <td>{{$item->first_name}}</td>
         </tr>
         <tr>
            <td class="font-weight-bold">Familyasi</td>
            <td>{{$item->last_name}}</td>
         </tr>
         <tr>
            <td class="font-weight-bold">E-mail</td>
            <td>{{$item->email}}</td>
         </tr>
         <tr>
            <td class="font-weight-bold">Mavzu</td>
            <td>{{$item->subject}}</td>
         </tr>
         <tr>
            <td class="font-weight-bold">Xabar</td>
            <td>{{$item->message}}</td>
         </tr>
         <tr>
            <td class="font-weight-bold">Sana</td>
            <td>{{$item->created_at->format('H:i, d/m/Y')}}</td>
         </tr>
        </table>
    </div>
</div>

@endsection
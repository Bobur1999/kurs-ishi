@extends('layouts/admin', ['title'=>'Admin_books index'])
@section('content')

<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
        Kitoblar
        <a class="btn btn-sm btn-primary float-right" href="{{route('books.create')}}">Yaratish</a>
    </h6>
    
</div>
<div class="table-responsive">
  <!-- <div class=" shadow mb-4"> -->
    
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif 

        @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{session()->get('delete')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
      <!-- <div class="card-body"> -->
        <table class="table table-bordered">
          <thead>
              <th width="100px">Rasm</th>
              <th>Nomi</th>
              <th>Avtor</th>
              <th>Avtor_id</th>
              <th>Tur</th>
              <th>Tur_id</th>
              <th>Narx</th>
              <th>Nashriyot</th>
              <th>Nashriyot_id</th>
              <th>Til</th>
              <th>Til_id</th>
              <th>Varaqsoni</th>
              <th>Yili</th>
              <th>Ko'rildi</th>
              <th>Qo'shildi</th>
              <th>O'zgartirildi</th>
              <th width="180px">Amallar</th>
          </thead>
          <tbody>
            <tr>
              <td> 
                <img class="img img-thumbnail" width="80px" src=" ">
              </td>
              <td> 
                  nomi
              </td>
              <td> 
                  avtori
              </td>
              <td> 
                  1
              </td>
              <td> 
                  badiiy
              </td>
              <td> 
                  2
              </td>
              <td> 
                  5000
              </td>
              <td> 
                  book
              </td>
              <td> 
                  3
              </td>
              <td> 
                  uzbek
              </td>
              <td> 
                  4
              </td>
              <td> 
                  100
              </td>
              <td> 
                  2020
              </td>
              <td> 
                  7
              </td>
              <td> 
                  11.01.2021
              </td>
              <td> 
                  $$.$$.$$
              </td>
              <td>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <a href="" class="btn btn-primary">
                        <i class="fa fa-eye"></i> Ko'rish
                    </a>
                    
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="">
                            <i class="fa fa-edit"></i> Tahrirlash 
                        </a>

                        <form method="POST" action="">
                            csrf
                            method(DELETE)
                            <button class="dropdown-item" type="submit"><i class="fa fa-trash"></i> O'chirish</button>
                        </form> 

                      </div>
                    </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
    <!-- </div> -->
  <!-- </div> -->
</div>

@endsection
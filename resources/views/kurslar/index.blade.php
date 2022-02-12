

@extends('layouts.admin')

@section('content')
  <div class="a">
<a href="{{route('kurs.create')}}" class="btn btn-info">Qoshish <i class="bi bi-plus-circle-fill"></i></a>

  </div>
<table class="table table-striped">
    <thead>
       <th>ID</th>
        <td>Kurslar</td>
        <td >Mentori</td>
        <td>Tahrirlash</td>
        <td>O'chirish</td>
       
        </thead>

<tbody>
    @forelse($kurs as $item)
    <tr>
        <th>{{$item->id}}</th>
        <th>{{$item->kurs}}</th>
        <th>{{$item->mentor}}</th>
     <th>
         <a style="display: flex; justify-content:center; width:40%;" href="{{route('kurs.edit' , $item->id)}}" class="btn btn-primary"><span style="margin: 0 4px;"></span><i class="bi bi-pencil-fill"></i></a>
     </th>
     <th>
         <form action="{{route('kurs.destroy' ,$item->id)}}" method="post">
             @csrf @method('delete')
             <button onclick="confirm('Rostan ochiramizmi')" class="btn btn-danger" style="width: 40%;">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg><i class="bi bi-trash3-fill"></i></button>
         </form>
     </th>

    </tr>
</tbody>
@empty
<tr>
        <td class="  text-center" >Hech narsa yoq 😢😢</td>
    </tr>
    </table>
 @endforelse
@endsection
  <style>
   .a{
       display: flex;
       justify-content: flex-end;
       margin: 4px 10;
   }
   .a>a , {
       display: flex;
       align-items: center;
   }
   .a>a>i{
       margin: 0 4px;
   }
   
   
   button>svg{
    display: flex;
    justify-content: space-between;
    text-align: center;
     
       
     
       
   }
 
   
  </style>
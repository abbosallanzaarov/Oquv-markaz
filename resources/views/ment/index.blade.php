@extends('layouts.admin')

@section('content')

<div class="a">
<a href="{{route('mentor.create')}}" class="btn btn-info">Qoshish <i class="bi bi-plus-circle-fill"></i></a>

  </div>
<table class="table table-success table-striped">
 <thead>
     <tr>
         <th>ID</th>
         <th style="width: 70%;">Mentorlar </th>
       
          <th>
            Toliq Malumot
         
          </th>
          <th>
              delete
          </th>
        

     </tr>
     <tbody>
         @forelse($mentorlar as $ment)
         <tr>
             <td><h4>{{$ment->id}}</h4></td>
             <td><h4>{{$ment->name}}</h4></td>
             <td>
             <a href="{{route('mentor.show',$ment->id)}} " class="btn btn-info">Toliq Malumot</a>
             </td>
             <td>
             <form action="{{route('mentor.destroy' , $ment->id)}}" method="POST">
   @csrf  @method('DELETE')
         <button class="btn btn-danger">Delete</button>
     </form>
             </td>
         </tr>
         @empty
         <tr>
             <td colspan="5" class="text-center">Mentorlar yoq</td>
         </tr>
         @endforelse
     </tbody>
 </thead>
</table>
@endsection
   <style>
.a{
       display: flex;
       justify-content: flex-end;
       margin: 4px 10;
   }
   .a>a{
       display: flex;
       align-items: center;
   }
   form{
       margin-top: 16px;
   }
   .a>a>i{
       margin: 0 4px;
   }
   </style>
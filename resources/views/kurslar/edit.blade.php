@extends('layouts.admin')



@section('content')
    <div class="a" style=" display: flex;
       justify-content: flex-end;
       margin: 4px 10;">
        <a style="  display: flex;
       align-items: center;" href="{{route('kurs.index')}}" class="btn btn-info"><i style="  margin: 0 4px;" class="bi bi-box-arrow-left"></i>Orqaga</a>
    </div>
    <form action="{{route('kurs.update' , $edit->id)}}" method="post" >
        @csrf @method('patch')
    <span ">Kurs nomi</span>
    <div class="input-group mb-3">
  
  <input type="text" value="{{$edit->kurs}}" name="kurs" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<span  ">Mentor ismi</span>
    <div class="input-group mb-3">
  
  <input type="text " value="{{$edit->mentor}}" name="mentor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<button class="btn btn-info">Tahrirlash</button>
</form>
@endsection
   

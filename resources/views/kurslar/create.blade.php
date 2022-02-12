@extends('layouts.admin')

@section('content')
    <div class="a">
        <a href="{{route('kurs.index')}}" class="btn btn-info"><i class="bi bi-box-arrow-left"></i>Orqaga</a>
    </div>
    <form action="{{route('kurs.store')}}" method="post" >
        @csrf
    <span ">Kurs nomi</span>
    <div class="input-group mb-3">
  
  <input type="text" name="kurs" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<span  ">Mentor ismi</span>
    <div class="input-group mb-3">
  
  <input type="text" name="mentor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<button class="btn btn-info">Qoshish</button>
</form>
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
   .a>a>i{
       margin: 0 4px;
   }
  </style>

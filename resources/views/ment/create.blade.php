@extends('layouts.admin')

@section('content')

<form action="{{route('mentor.store')}}" method="post" enctype="multipart/form-data">
  @csrf 
<span>Mentor Ismi</span> 
<div class="input-group mb-3">
  <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<span>Mentor Familyasi</span> 
<div class="input-group mb-3">
  <input name="familya" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>



<div class="form-floating">
  <textarea name="des" class="form-control" placeholder="qisqacha ijodi" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Mentor Xaqida Qisqacha</label>
</div>
<br>
   <span>Email Manzili</span>
<div class="input-group mb-3">
  <input name="email" type="text" class="form-control" placeholder="email kiriting" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>  

<span>Mentor Raqami</span> 
<div class="input-group mb-3">
  <input name="nomer" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="mb-3">
        <label for="formFileSm" class="form-label">Mentor Rasmi</label>
          <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
</div>

<span>Mentor Manzili</span> 
<div class="input-group mb-3">
  <input name="manzil" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

  <button class="btn btn-info">Qo'shish</button>

</form>
@endsection
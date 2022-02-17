@extends('layouts.admin')

@section('content')
    <h1>Email yuborish</h1>
    <form action="{{route('admin.email.send')}}"method="post" class="p-3">
        @csrf 
        <input class="input-control w-100 m-3" type="email" placeholder="Email kiriting" name="email">
        <input class="input-control w-100 m-3" type="text" name="mavzu" placeholder="mavzu">
        <textarea placeholder="Send message" class="input-control w-100 m-3" name="text" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-outline-info">Yuborish</button>
    </form>
@endsection
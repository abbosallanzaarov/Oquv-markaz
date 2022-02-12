@extends('layouts.admin')


@section('content')
@csrf
   <a href="{{route('mentor.index')}}" class="btn btn-info my-5">Orqaga</a>
  <div class="contentt">
  <div class="leftuz">
  <h4><b>Ismi:</b> {{$ment->name}}</h4>
  <h4><b>Familyasi:</b> {{$ment->familya}}</h4>
  <h4 style="width: 90%;  "><ins><b>Qisqacha:</b>  {{$ment->des}}</ins></h4>
  <h4 style="width: 90%;  "><b>email Manzili:</b>  {{$ment->email}}</h4>
  <h4 style="width: 90%;  "><b>Telefon Raqami:</b>  {{$ment->nomer}}📱</h4>
  <h4 style="width: 90%;  "><b>Manzili:</b>  {{$ment->manzil}}</h4>




  </div>
  <div class="rightuz">
  <img src="W:domains/magazin/public/foto/ustoz/$ment->image" style="width:80%;" >
  </div>
  </div>
  <div class="karta">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95354.39451206001!2d60.68568495648919!3d41.68112643881305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfd497a70a1527%3A0xdd439e3fd9f34b09!2z0JHQtdGA0YPQvdC4!5e0!3m2!1sru!2s!4v1644664844778!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>


@endsection

<style>
    .contentt{
        display: flex;
    }
    .leftuz{
        width: 50%;
        height: 100%;
    }
    .rightuz{
        width: 50%;
    }
    .rightuz>img{
        width: 80%;
        margin: 0 auto;
        height: 90%;
    }

    
    
    .leftuz>h4{
        padding: 7px 0;
    }
</style>

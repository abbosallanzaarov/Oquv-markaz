@extends('layouts.admin')

@section('content')
   <h5>O'quvchi qoshish</h5>
   <form class="opshi" action="{{route('pers.store')}}" method="post">
       @csrf
   <div class="contier">
    <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Ismi</span>
            <input name="name" type="text" class="form-control" aria-label="Sizing example input"     aria-describedby="inputGroup-sizing-default">
   </div>
   </div>
   
   <div class="contier">
    <div class="input-group mb-3  mx-4 ">
            <span class="input-group-text " id="inputGroup-sizing-default">Fam</span>
            <input name="fam" type="text" class="form-control" aria-label="Sizing example input"     aria-describedby="inputGroup-sizing-default">
   </div>
   </div>
   <div class="contier">
   <select name="kurs" class="form-select mx-5" aria-label="Default select example">
 
 <option value="1">kursni tanlang</option> 
   @forelse($kurs as $get)
   <option value="{{$get->id}}">{{$get->kurs}}</option> 

   @empty
   <option value="1">kurs yoq</option> 

   @endforelse


 
</select>
   </div>

   <div class="contier">
    <div class="input-group mb-3  ">
            <span class="input-group-text " id="inputGroup-sizing-default">nomer</span>
            <input name="nomer" type="number" class="form-control" aria-label="Sizing example input"     aria-describedby="inputGroup-sizing-default">
   </div>
   </div>

   <div class="contier">
   <div class="input-group mb-3 mx-4">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="email" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

   </div>

   <div class="contier">
    <div class="input-group mb-3  mx-5 ">
            <span class="input-group-text " id="inputGroup-sizing-default">manzil</span>
            <input name="manzil" type="text" class="form-control" aria-label="Sizing example input"     aria-describedby="inputGroup-sizing-default">
   </div>
   </div>

   <div class="contier">
   <select name="vaqti" class=" form-select " >
       @for($i = 1; $i<13; $i++)
    
       <option value="1">{{$i}} oy</option>
       @endfor
</select>

   </div>
   <div class="contier">
    <button class="btn btn-outline-primary mx-4">Qo'shish</button>
   
    </form>
   
    <style>
        .contierr{
            margin-top: -38px ;
            margin-left: 130px;
        }
    </style>
</div>




   <table style="margin-top: 20px;">
       <thead>
           <tr>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;"   >id</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >ismi</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >familyasi</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >Kurs</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >T.nomer</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >email</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >manzil</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;" >K.davomiligi</th>
               <th style="border: 2px solid black; width:120px; height:37px; text-align:center;">delete</th>
              @foreach($index as $in)
             
              
             
      
              
             
           
              @endforeach  
                      
                     
                     
                    
           </tr>
       </thead>
       <tbody>

           @forelse($index as $item)
             <tr>
                 <td  style="border: 1px solid black; text-align:center; height:38px;">{{$item->id}}   
                </td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->name}}</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->fam}}</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->kurs}}</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->nomer}}</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->email}}</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->manzil}}</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;">{{$item->vaqti}} oy</td>
                 <td style="border: 1px solid black; text-align:center; height:38px;"> 
                 <form action="{{route('pers.destroy' , $item->id )}}" method="POST"> 
              @csrf @method('delete')
                 <input  name="id[]" class="form-check-input" type="checkbox" value="{{$item->id}}" >
               
                </td>
             </tr>
             @empty
      <tr>
          <td style="text-align: center;">Hech narsa yo'q</td>
      </tr>
             @endforelse
             <button>DELETE</button>    
             </form>
       </tbody>
   </table>
   <script>
  let check = document.getElementById('check')
    let deleteBtn = document.getElementById('btndelete')
      deleteBtn.addEventListener('click' , function(){
          check.style.display = 'block'
    
      })
    
</script>


@endsection


<style>
    .contier{
        width: 30%;
    }
    table{
        border-collapse: collapse;
    }


    .input{
       
    }

    .opshi{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
</style>
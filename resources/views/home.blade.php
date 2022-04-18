@extends('layouts.main')

@section('container')
<style>
  .color
{
    color:#ff6600;
    margin-left:40px;
    font-size:22px;
}
.style
{
    background-color: #333;
}
Input[type="button"]
{
    padding:20px 60px;
}
input[type="text"]
 {
    padding:10px 2.5%;
    width:100%;
    font-size:20px;
}
</style>
   <div class="row justify-content-center mb-1">
        <div class="col-md-8"> 
             <h1 class="h3 text-center">RS YARSI Self Service Counter</h1>   
               <article class="my-3 fs-4">
                    Selamat Datang, disini anda bisa melakukan Self Service Checkin, tanpa harus mengantri di Conter Pendaftaran kami. 
               </article>
        </div>
   </div>
      @if(session()->has('failed'))
            <div class="alert alert-danger" role="alert">
                {{ session('failed') }}
            </div>
            @endif
          <div class="row justify-content-center">
             <div class="col-md-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="Image" class="img-fluid" data-pagespeed-url-hash="4289692523">
            </div>
      <div class="col-md-6 contents" style="margin-left: -80px">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="mb-4">
              {{-- <h3>Check In</h3>  --}}
            </div>
            <form action="/getdataBooking" method="post"  Name="calc" style="margin-top: -20px">
               @csrf
              <div class="form-group first"> 
                  <table border=2 class="style" width="100%">
                  <tr>
                  <td colspan=4><input type=text Name="display" id="display" autocomplete="off" autofocus ></td>
                  </tr>
                  <tr>
                  <td><input type=button value="B" OnClick="calc.display.value+='BORJ'"></td> 
                  <td><input type=button value="-" OnClick="calc.display.value+='-'"></td>
                  <td><input type=button value="C" OnClick="calc.display.value=''"></td> 
                  </tr>
                  <tr>
                  <td><input type=button value="0" OnClick="calc.display.value+='0'"></td>
                  <td><input type=button value="1" OnClick="calc.display.value+='1'"></td>
                  <td><input type=button value="2" OnClick="calc.display.value+='2'"></td> 
                  </tr>
                  <tr>
                  <td><input type=button value="3" OnClick="calc.display.value+='3'"></td>
                  <td><input type=button value="4" OnClick="calc.display.value+='4'"></td>
                  <td><input type=button value="5" OnClick="calc.display.value+='5'"></td> 
                  </tr>
                  <tr>
                  <td><input type=button value="6" OnClick="calc.display.value+='6'"></td>
                  <td><input type=button value="7" OnClick="calc.display.value+='7'"></td>
                  <td><input type=button value="8" OnClick="calc.display.value+='8'"></td> 
                  </tr>
                  <tr>
                  <td><input type=button value="9" OnClick="calc.display.value+='9'"></td> 
                  </tr>
                  </table> 
              </div>
              <div class="form-group first">
                <div id="NoBooking"></div>
              </div>
              <div class="d-flex mb-5 align-items-center ">
                <div class="control__indicator"></div>
              </div>
              <input type="submit" value="Verify" class="btn btn-block btn-primary" style="margin-top: -70px;">
            </form>
          </div>
        </div>
      </div>
              
          </div>
    
   


<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response=> response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    });
</script>
@endsection
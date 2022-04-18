@extends('layouts.main')

@section('container')
   <div class="row justify-content-center mb-1">
        <div class="col-md-8">
              
             <h1 class="h3 text-center"  >TaniOke Application Form s</h1>   
               <article class="my-3 fs-4">
                    Selamat Datang di Aplikasi TaniOke Form Pendataan Pelapak dan Petani. 
               </article>
        </div>
   </div>
     
          <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Verify Data Booking</h3>
                        </div> 
                       {{-- @foreach ($responseBody as $response)  --}}
                       
                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username">No. Booking </label>
                                <input type="text" class="form-control mt-2" id="nobooking" name="nobooking" value="{{ $responseBody->response->NoBooking }}" readonly>
                            </div> 
                            <div class="form-group first mt-3">
                                <label for="username">Poliklinik</label> 
                                <input type="text" class="form-control mt-2" id="poliklinikname" name="poliklinikname" value="{{ $responseBody->response->namapoli }}" readonly>
                            </div>
                            <div class="form-group first mt-3">
                                <label for="username">Dokter</label> 
                                <input type="text" class="form-control mt-2" id="doktername" name="doktername" value="{{ $responseBody->response->namadokter }}" readonly>
                            </div> 
                            <div class="d-flex mb-5 align-items-center ">
                                <div class="control__indicator"></div>
                            </div>
                            <input type="submit" value="Check In" class="btn btn-block btn-primary" style="margin-top: -50px;">
                        </form> 
                        {{-- @endforeach --}}
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
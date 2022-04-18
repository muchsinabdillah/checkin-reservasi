@extends('layouts.main')

@section('container')
   <div class="row justify-content-center mb-3">
        <div class="col-md-8">
             <h1 class="h3 text-center"  >Form Pendataan Pelapak <a href="/" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali ke Home</a> </h1>  
               

            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
            @endif
            <br><hr><br>
            <form method="POST" action="/pelapak">
            @csrf  
                    <div class="mb-3"> 
                         <label for="date"  class="form-label">Tanggal</label>
                         <input type="date" required class="form-control @error('date') is-invalid @enderror" id="date" name="date"  value="{{  old('date') }}" >
                         @error('date')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                              
                    </div>  
                    <div class="mb-3"> 
                              <label for="fullname" class="form-label">Nama Lengkap Lapak</label>
                              <input type="text" required   class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Masukan Nama Lengkap" autocomplete="off" value="{{  old('fullname') }}"  required >
                              @error('fullname')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3"> 
                         <div class="col-md"> 
                              <label for="phonenumber" class="form-label">No. Telp/HP</label>
                              <input type="text" value="{{  old('phonenumber') }}" required   class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" name="phonenumber" placeholder="Masukan No.Whatsapp/Mobile" autocomplete="off">
                              @error('phonenumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         
                         </div>
                          
                    </div>
                    <div class="mb-3">  
                         <div class="col-md"> 
                              <label for="email" class="form-label">Email</label>
                              <input type="email" value="{{  old('email') }}"   class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan E-Mail" autocomplete="off">
                              @error('email')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         
                         </div>
                    </div>
                    
                   <div class="mb-3">  
                         <div class="col-md">
                              <label for="idtype" class="form-label">Jenis Identitas</label>
                              <select class="form-select"  value="{{  old('idtype') }}"  required  id="idtype" name="idtype" aria-label="Floating label select example">
                                   <option selected>-- PILIH --</option>
                                   <option value="KTP">KTP</option>
                                   <option value="SIM">SIM</option>
                                   <option value="PASSPORT">PASSPORT</option>
                              </select>
                              @error('idtype')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                         </div>
                    </div>
                    <div class="mb-3">  
                         <div class="col-md">
                              
                          <label for="idnumber" class="form-label">No. Identitas</label>
                              <input type="text" value="{{  old('idnumber') }}"  required  class="form-control @error('idnumber') is-invalid @enderror" id="idnumber" name="idnumber" placeholder="Masukan No. Identitas" autocomplete="off">
                              @error('idnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         </div>
                    </div>
                    <div class="mb-3">  
                         <label for="npwp" class="form-label">Apakah Punya NPWP</label>
                              <select class="form-select"  value="{{  old('npwp') }}"  required  id="npwp" name="npwp" aria-label="Floating label select example">
                                   <option selected>-- PILIH --</option>
                                   <option value="YA">YA</option>
                                   <option value="TIDAK">TIDAK</option> 
                              </select>
                              @error('npwp')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                     <div class="mb-3">   
                              <label for="npwpnumber" class="form-label">No. NPWP</label>
                              <input type="text" value="{{  old('npwpnumber') }}"  required  class="form-control @error('npwpnumber') is-invalid @enderror" id="npwpnumber" name="npwpnumber" placeholder="Masukan No. NPWP" autocomplete="off">
                              @error('npwpnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3">  
                         <label for="walkername" class="form-label">Nama Lapak Usaha</label>
                         <input type="text" value="{{  old('walkername') }}"  required  class="form-control @error('walkername') is-invalid @enderror" id="walkername" name="walkername" placeholder="Masukan Nama Lapak Usaha" autocomplete="off">
                         @error('walkername')<div class="invalid-feedback"> {{ $message }} </div>@enderror   
                    </div>
                    <div class="mb-3">  
                         <label for="walkeraddress" class="form-label">Alamat Lengkap Lapak Usaha</label>
                         <textarea style="height: 100px"   required  class="form-control @error('walkeraddress') is-invalid @enderror" id="walkeraddress" name="walkeraddress" autocomplete="off">{{ old('walkeraddress') }}</textarea>
                         @error('walkeraddress')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                    </div> 
                    
                    <div class="mb-3">  
                         <label for="coordinatpoint" class="form-label">Titik Koordinat Pelapak</label>
                         <input type="text" value="{{  old('coordinatpoint') }}"  required  class="mb-3 form-control @error('coordinatpoint') is-invalid @enderror" id="coordinatpoint" name="coordinatpoint" autocomplete="off">
                         @error('coordinatpoint')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                         <p><a style="color: #ffffff; background-color: #008748; font-size: 12px; border-radius: 4px; text-decoration: none; font-weight: normal; font-style: normal; padding: 0.6rem 1rem; border-color: #0072ff;" href="https://goo.gl/maps/rX1a127ukMDAaJWA6" target="_blank">Cari Di Google Maps</a></p>
                    </div> 
                    <br><hr><br>
                    <div class="mb-3">  
                         <label for="itemsell" class="form-label">Sebutkan Apa yang Lapak Jual</label>
                         <textarea style="height: 100px"   required  class="form-control @error('itemsell') is-invalid @enderror" id="itemsell" name="itemsell" autocomplete="off">{{ old('itemsell') }}</textarea>
                         @error('itemsell')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div> 
                     <div class="mb-3">  
                          <label for="timeopenclose" class="form-label">Jam Berapa Buka dan Tutup Lapak Usaha ?</label>
                         <input type="text" value="{{  old('timeopenclose') }}"  required  class="form-control @error('timeopenclose') is-invalid @enderror" id="timeopenclose" name="timeopenclose" placeholder="Contoh : Pagi Jam 5:00 Sampai 10:30 Siang" autocomplete="off">
                          @error('timeopenclose')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div> 
                    <div class="mb-3">  
                         <label for="ownership" class="form-label">Apakah Lapak Usaha ini Milik Sendiri</label>
                              <select ownership="form-select"  value="{{  old('ownership') }}"  required  id="ownership" name="ownership" aria-label="Floating label select example" class="form-select" >
                                   <option selected>-- PILIH --</option>
                                   <option value="YA">YA</option>
                                   <option value="TIDAK">TIDAK</option> 
                              </select>
                              @error('ownership')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3">   
                              <label for="nameownership" class="form-label">Sebutkan Nama Pemilik Lapak Usaha</label>
                              <input type="text" value="{{  old('nameownership') }}"  required  class="form-control @error('nameownership') is-invalid @enderror" id="nameownership" name="nameownership" placeholder="*Jika milik sendiri isikan saja - " autocomplete="off">
                              @error('nameownership')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                     <div class="mb-3">   
                              <label for="phoneownership" class="form-label">No. Telp Pemilik Lapak</label>
                              <input type="text" value="{{  old('phoneownership') }}"  required  class="form-control @error('phoneownership') is-invalid @enderror" id="phoneownership" name="phoneownership" placeholder="*Jika milik sendiri isikan saja - " autocomplete="off">
                              @error('phoneownership')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3">  
                         <label for="otherpaltform" class="form-label">Apakah Pernah Daftar Aplikasi Serupa</label>
                              <select class="form-select"  value="{{  old('otherpaltform') }}"  required  id="otherpaltform" name="otherpaltform" aria-label="Floating label select example">
                                   <option selected>-- PILIH --</option>
                                   <option value="YA">YA</option>
                                   <option value="TIDAK">TIDAK</option> 
                              </select>
                              @error('otherpaltform')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                     <div class="mb-3">   
                              <label for="readyjoin" class="form-label">Apakah Pelapak Siap Jadi Mitra Kami</label>
                              <input type="text" value="{{  old('readyjoin') }}"  required  class="form-control @error('readyjoin') is-invalid @enderror" id="readyjoin" name="readyjoin" placeholder="*Isikan IYA SIAP ATAU TIDAK SIAP " autocomplete="off">
                              @error('readyjoin')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                     <div class="mb-3">   
                              <label for="continuePhone" class="form-label">Apakah bisa Kami Hubungi Kembali Untuk Pendaftaran</label>
                              <input type="text" value="{{  old('continuePhone') }}"  required  class="form-control @error('continuePhone') is-invalid @enderror" id="continuePhone" name="continuePhone" placeholder="*Isikan BISA atau TIDAK BISA " autocomplete="off">
                              @error('continuePhone')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="row g-2 mb-3">
                         <div class="col-md">
                             <div class="form-floating">
                                   <input type="text"   readonly value="@if (isset(auth()->user()->username)) {{ auth()->user()->username }} @endif" class="form-control @error('tanioketimname') is-invalid @enderror" id="tanioketimname" name="tanioketimname" placeholder="Masukan Nama " autocomplete="off">
                                   <label for="tanioketimname">Nama TIM</label>
                                   @error('tanioketimname')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                              </div>
                         </div> 
                    </div>
                <button type="submit" class="btn btn-primary mb-5">KIRIM DATA</button>
            </form>
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
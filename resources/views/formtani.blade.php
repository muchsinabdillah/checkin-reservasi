@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
             <h1 class="h3 text-center">Form Pendataan Petani <a href="/" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali ke Home</a>  </h1>
             @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
             <br><hr><br>
        <form method="POST" action="/petani">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" required class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{  old('date') }}">
            @error('date')<div class="invalid-feedback"> {{ $message }} </div>@enderror

        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">Nama Lengkap </label>
            <input type="text" required class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Masukan Nama Lengkap" autocomplete="off" value="{{  old('fullname') }}" required>
            @error('fullname')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <div class="col-md">
                <label for="phonenumber" class="form-label">No. Telp/HP</label>
                <input type="text" value="{{  old('phonenumber') }}" required class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" name="phonenumber" placeholder="Masukan No.Whatsapp/Mobile" autocomplete="off">
                @error('phonenumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror

            </div>

        </div>
        <div class="mb-3">
            <div class="col-md">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{  old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan E-Mail" autocomplete="off">
                @error('email')<div class="invalid-feedback"> {{ $message }} </div>@enderror

            </div>
        </div>

        <div class="mb-3">
            <div class="col-md">
                <label for="idtype" class="form-label">Jenis Identitas</label>
                <select class="form-select" value="{{  old('idtype') }}" required id="idtype" name="idtype" aria-label="Floating label select example">
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
                <input type="text" value="{{  old('idnumber') }}" required class="form-control @error('idnumber') is-invalid @enderror" id="idnumber" name="idnumber" placeholder="Masukan No. Identitas" autocomplete="off">
                @error('idnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="npwp" class="form-label">Apakah Punya NPWP</label>
            <select class="form-select" value="{{  old('npwp') }}" required id="npwp" name="npwp" aria-label="Floating label select example">
                <option selected>Open this select menu</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            @error('npwp')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="npwpnumber" class="form-label">No. NPWP</label>
            <input type="text" value="{{  old('npwpnumber') }}" required class="form-control @error('npwpnumber') is-invalid @enderror" id="npwpnumber" name="npwpnumber" placeholder="Masukan No. NPWP" autocomplete="off">
            @error('npwpnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <br>
        <hr><br>
        <div class="mb-3">
            <label for="province" class="form-label">Provinsi</label>
            <input type="text" value="{{  old('province') }}" required class="form-control @error('province') is-invalid @enderror" id="province" name="province" autocomplete="off">
            @error('province')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="farmeraddress" class="form-label">Alamat Lengkap</label>
            <textarea style="height: 100px" required class="form-control @error('farmeraddress') is-invalid @enderror" placeholder="Masukan Alamat Lengkap" id="farmeraddress" name="farmeraddress" autocomplete="off">{{ old('farmeraddress') }}</textarea>
            @error('farmeraddress')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>

        <div class="mb-3">
            <label for="coordinatpoint" class="form-label">Titik Koordinat Pelapak</label>
            <input type="text" value="{{  old('coordinatpoint') }}" required class="mb-3 form-control @error('coordinatpoint') is-invalid @enderror" id="coordinatpoint" name="coordinatpoint" placeholder="*Jika tidak tahu, Ketik saja -." autocomplete="off">
            @error('coordinatpoint')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            <p><a style="color: #ffffff; background-color: #008748; font-size: 12px; border-radius: 4px; text-decoration: none; font-weight: normal; font-style: normal; padding: 0.6rem 1rem; border-color: #0072ff;" href="https://goo.gl/maps/rX1a127ukMDAaJWA6" target="_blank">Cari Di Google Maps</a></p>
        </div>
        <br>
        <hr><br>
        <div class="mb-3">
            <label for="gardenarea" class="form-label">Luas Area</label>
            <input type="text" value="{{  old('gardenarea') }}" required class="form-control @error('gardenarea') is-invalid @enderror" id="gardenarea" name="gardenarea" autocomplete="off" placeholder="Contoh : 1 Hektar">
            @error('gardenarea')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="namegardenarea" class="form-label">Nama & Waktu Tanam</label>
            <textarea style="height: 100px" required class="form-control @error('namegardenarea') is-invalid @enderror" id="namegardenarea" name="namegardenarea" autocomplete="off">{{ old('namegardenarea') }}</textarea>
            @error('namegardenarea')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="harversttime" class="form-label">Waktu Panen</label>
            <input type="text" value="{{  old('harversttime') }}" required class="form-control @error('harversttime') is-invalid @enderror" id="harversttime" name="harversttime" autocomplete="off">
            @error('harversttime')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="ownershipgarden" class="form-label">Apakah Lahan Tanam ini Milik Sendiri</label>
            <select ownershipgarden="form-select" value="{{  old('ownershipgarden') }}" required id="ownershipgarden" name="ownershipgarden" aria-label="Floating label select example" class="form-control">
                <option selected>-- PILIH --</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            @error('ownershipgarden')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="nameownershipgarden" class="form-label">Sebutkan Nama Pemilik Lahan Tanam</label>
            <input type="text" value="{{  old('nameownershipgarden') }}" required class="form-control @error('nameownershipgarden') is-invalid @enderror" id="nameownershipgarden" name="nameownershipgarden" placeholder="*Jika milik sendiri isikan saja - " autocomplete="off">
            @error('nameownershipgarden')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="phoneownershipgarden" class="form-label">No Telp Pemilik Lahan Tanam</label>
            <input type="text" value="{{  old('phoneownershipgarden') }}" required class="form-control @error('phoneownershipgarden') is-invalid @enderror" id="phoneownershipgarden" name="phoneownershipgarden" placeholder="*Jika miliksendiri isikan saja - " autocomplete="off">
            @error('phoneownershipgarden')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="otherpaltform" class="form-label">Apakah Pernah Daftar Aplikasi Serupa</label>
            <select class="form-select" value="{{  old('otherpaltform') }}" required id="otherpaltform" name="otherpaltform" aria-label="Floating label select example">
                <option selected>-- PILIH --</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
            @error('otherpaltform')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="readyjoin" class="form-label">Apakah Pelapak Siap Jadi Mitra Kami</label>
            <input type="text" value="{{  old('readyjoin') }}" required class="form-control @error('readyjoin') is-invalid @enderror" id="readyjoin" name="readyjoin" placeholder="*Isikan IYA SIAP ATAU TIDAK SIAP" autocomplete="off">
            @error('readyjoin')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="continuePhone" class="form-label">Apakah Bisa Kami Hubungi Kembali untuk Pendaftaran</label>
            <input type="text" value="{{  old('continuePhone') }}" required class="form-control @error('continuePhone') is-invalid @enderror" id="continuePhone" name="continuePhone" autocomplete="off" placeholder="*Isikan BISA atau TIDAK BISA ">
            @error('continuePhone')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" readonly value="@if (isset(auth()->user()->username)) {{ auth()->user()->username }} @endif" class="form-control @error('tanioketimname') is-invalid @enderror" id="tanioketimname" name="tanioketimname" placeholder="Masukan Nama " autocomplete="off">
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
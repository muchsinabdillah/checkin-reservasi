@extends('dashboard.layouts.main')
@section('container')
   <div class="container">
    <div class="row my-3">
        <div class="col-lg-8 "> 
            <a href="/dashboard/farmers" class="btn btn-success mb-4"><span data-feather="arrow-left"></span>Kembali ke Data Petani</a> 
            <form method="POST" action="/petani">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" required class="form-control @error('date') is-invalid @enderror" id="date" name="date" readonly value="{{ $farmer->date }}">
            @error('date')<div class="invalid-feedback"> {{ $message }} </div>@enderror

        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">Nama Lengkap </label>
            <input type="text" required class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Masukan Nama Lengkap" autocomplete="off"  readonly value="{{ $farmer->fullname }}" required>
            @error('fullname')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <div class="col-md">
                <label for="phonenumber" class="form-label">No. Telp/HP</label>
                <input type="text" readonly value="{{ $farmer->phonenumber }}" required class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" name="phonenumber" placeholder="Masukan No.Whatsapp/Mobile" autocomplete="off">
                @error('phonenumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror

            </div>

        </div>
        <div class="mb-3">
            <div class="col-md">
                <label for="email" class="form-label">Email</label>
                <input type="email" readonly value="{{ $farmer->email }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan E-Mail" autocomplete="off">
                @error('email')<div class="invalid-feedback"> {{ $message }} </div>@enderror

            </div>
        </div>

        <div class="mb-3">
            <div class="col-md">
                <label for="idtype" class="form-label">Jenis Identitas</label>
                <input type="idtype" readonly value="{{ $farmer->idtype }}" class="form-control @error('idtype') is-invalid @enderror" id="idtype" name="idtype" placeholder="Masukan E-Mail" autocomplete="off">
                @error('idtype')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
            </div>
        </div>
        <div class="mb-3">
            <div class="col-md"> 
                <label for="idnumber" class="form-label">No. Identitas</label>
                <input type="text" readonly value="{{ $farmer->idnumber }}" required class="form-control @error('idnumber') is-invalid @enderror" id="idnumber" name="idnumber" placeholder="Masukan No. Identitas" autocomplete="off">
                @error('idnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="npwp" class="form-label">Apakah Punya NPWP</label>
            <input type="text" readonly value="{{ $farmer->npwp }}" required class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" placeholder="Masukan No. Identitas" autocomplete="off">
            @error('npwp')<div class="invalid-feedback"> {{ $message }} </div>@enderror     
        </div>
        <div class="mb-3">
            <label for="npwpnumber" class="form-label">No. NPWP</label>
            <input type="text" readonly value="{{ $farmer->npwpnumber }}" required class="form-control @error('npwpnumber') is-invalid @enderror" id="npwpnumber" name="npwpnumber" placeholder="Masukan No. NPWP" autocomplete="off">
            @error('npwpnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <br>
        <hr><br>
        <div class="mb-3">
            <label for="province" class="form-label">Provinsi</label>
            <input type="text" readonly value="{{ $farmer->province }}" required class="form-control @error('province') is-invalid @enderror" id="province" name="province" autocomplete="off">
            @error('province')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="farmeraddress" class="form-label">Alamat Lengkap</label>
            <textarea style="height: 100px" required class="form-control @error('farmeraddress') is-invalid @enderror" placeholder="Masukan Alamat Lengkap" id="farmeraddress"  readonly name="farmeraddress" autocomplete="off">{{ $farmer->farmeraddress }}</textarea>
            @error('farmeraddress')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>

        <div class="mb-3">
            <label for="coordinatpoint" class="form-label">Titik Koordinat Pelapak</label>
            <input type="text" readonly value="{{ $farmer->coordinatpoint }}" required class="mb-3 form-control @error('coordinatpoint') is-invalid @enderror" id="coordinatpoint" name="coordinatpoint" placeholder="*Jika tidak tahu, Ketik saja -." autocomplete="off">
            @error('coordinatpoint')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            <p><a style="color: #ffffff; background-color: #008748; font-size: 12px; border-radius: 4px; text-decoration: none; font-weight: normal; font-style: normal; padding: 0.6rem 1rem; border-color: #0072ff;" href="https://goo.gl/maps/rX1a127ukMDAaJWA6">Cari Di Google Maps</a></p>
        </div>
        <br>
        <hr><br>
        <div class="mb-3">
            <label for="gardenarea" class="form-label">Luas Area</label>
            <input type="text" readonly value="{{ $farmer->gardenarea }}" required class="form-control @error('gardenarea') is-invalid @enderror" id="gardenarea" name="gardenarea" autocomplete="off" placeholder="Contoh : 1 Hektar">
            @error('gardenarea')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="namegardenarea" class="form-label">Nama & Waktu Tanam</label>
            <textarea style="height: 100px" readonly required class="form-control @error('namegardenarea') is-invalid @enderror" id="namegardenarea" name="namegardenarea" autocomplete="off">{{ $farmer->namegardenarea }} </textarea>
            @error('namegardenarea')<div class="invalid-feedback"> </div>@enderror
        </div>
        <div class="mb-3">
            <label for="harversttime" class="form-label">Waktu Panen</label>
            <input type="text"  readonly value="{{ $farmer->harversttime }}" required class="form-control @error('harversttime') is-invalid @enderror" id="harversttime" name="harversttime" autocomplete="off">
            @error('harversttime')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="ownershipgarden" class="form-label">Apakah Lahan Tanam ini Milik Sendiri</label>
            <input type="text"  readonly value="{{ $farmer->ownershipgarden }}" required class="form-control @error('ownershipgarden') is-invalid @enderror" id="ownershipgarden" name="ownershipgarden" autocomplete="off">
            @error('ownershipgarden')<div class="invalid-feedback"> {{ $message }} </div>@enderror  
        </div>
        <div class="mb-3">
            <label for="nameownershipgarden" class="form-label">Sebutkan Nama Pemilik Lahan Tanam</label>
            <input type="text"  readonly value="{{ $farmer->nameownershipgarden }}" required class="form-control @error('nameownershipgarden') is-invalid @enderror" id="nameownershipgarden" name="nameownershipgarden" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
            @error('nameownershipgarden')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="phoneownershipgarden" class="form-label">No Telp Pemilik Lahan Tanam</label>
            <input type="text"  readonly value="{{ $farmer->phoneownershipgarden }}" required class="form-control @error('phoneownershipgarden') is-invalid @enderror" id="phoneownershipgarden" name="phoneownershipgarden" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
            @error('phoneownershipgarden')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="otherpaltform" class="form-label">Apakah Pernah Daftar Aplikasi Serupa</label>
            <input type="text"  readonly value="{{ $farmer->otherpaltform }}" required class="form-control @error('otherpaltform') is-invalid @enderror" id="otherpaltform" name="otherpaltform" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
            @error('otherpaltform')<div class="invalid-feedback"> {{ $message }} </div>@enderror  
        </div>
        <div class="mb-3">
            <label for="readyjoin" class="form-label">Apakah Pelapak Siap Jadi Mitra Kami</label>
            <input type="text"  readonly value="{{ $farmer->readyjoin }}"  required class="form-control @error('readyjoin') is-invalid @enderror" id="readyjoin" name="readyjoin" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
            @error('readyjoin')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="mb-3">
            <label for="continuePhone" class="form-label">Apakah Bisa Kami Hubungi Kembali untuk Pendaftaran</label>
            <input type="text" readonly value="{{ $farmer->continuePhone }}" required class="form-control @error('continuePhone') is-invalid @enderror" id="continuePhone" name="continuePhone" autocomplete="off">
            @error('continuePhone')<div class="invalid-feedback"> {{ $message }} </div>@enderror
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" readonly value="{{ $farmer->tanioketimname }}" class="form-control @error('tanioketimname') is-invalid @enderror" id="tanioketimname" name="tanioketimname" placeholder="Masukan Nama " autocomplete="off">
                    <label for="tanioketimname">Nama TIM</label>
                    @error('tanioketimname')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                </div>
            </div>
        </div>
        {{-- <button type="submit" class="btn btn-primary mb-5">KIRIM DATA</button> --}}
    </form>
             
        </div>
    </div>
</div>
@endsection
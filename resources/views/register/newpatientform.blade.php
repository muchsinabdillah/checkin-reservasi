@extends('layouts.main')

@section('container')
<br><br>
<img class="mb-4 mx-auto d-block mt-30 " src="{{url('/img/yarsi.png')}}" alt="" width="170" height="80">  
  <h1 class="h3 text-center mb-3">Form Pasien Baru</h1> <br>
   @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failed'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failed') }}</p>
      </div><br />
     @endif
     @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
<form class="row g-3" action="/createNewPatient" method="POST" enctype="multipart/form-data"> 
    @csrf
  <div class="col-md-6">
    <label for="jenisidentitas" class="form-label">Jenis Identitas</label>
    <select id="jenisidentitas" name="jenisidentitas" required class="form-select @error('jenisidentitas') is-invalid @enderror">
      <option selected>Choose...</option>
      <option value="KTP">KTP</option>
      <option value="SIM">SIM</option>
    </select>
     @error('jenisidentitas')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-md-6">
    <label for="noidentitas" class="form-label">No. Identitas</label>
    <input type="hidden" required class="form-control   @error('nobooking') is-invalid @enderror" readonly id="nobooking" name="nobooking" value="{{ $idBooking }}" >
     @error('nobooking')<div class="invalid-feedback"> {{ $message }} </div>@enderror
    <input type="text" required class="form-control   @error('noidentitas') is-invalid @enderror" id="noidentitas" name="noidentitas" maxlength="16" placeholder="Ketik No. Identitas" autocomplete="off" value="{{ old('noidentitas') }}">
    @error('noidentitas')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-6">
    <label for="namalengkap" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control   @error('namalengkap') is-invalid @enderror" required id="namalengkap" name="namalengkap" 
    placeholder="Ketik Nama Lengkap" autocomplete="off" value="{{ old('namalengkap') }}">
    @error('namalengkap')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-6">
    <label for="namalengkap" class="form-label">No. Handphone ( Whatsapp )</label>
    <input type="text" class="form-control   @error('nohandphone') is-invalid @enderror" required id="nohandphone" name="nohandphone" 
    placeholder="Ketik No. Handphone" autocomplete="off" value="{{ old('nohandphone') }}">
    @error('nohandphone')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-12">
    <label for="alamat" class="form-label">Alamat</label>
     <textarea class="form-control @error('alamat') is-invalid @enderror"  required placeholder="Ketik Alamat Lengkap Anda" id="alamat" name="alamat" style="height: 100px"  value="{{ old('alamat') }}"></textarea>
    @error('alamat')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-md-4">
    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror"  required id="tempatlahir" name="tempatlahir" placeholder="Ketik Tempat Lahir"  value="{{ old('tempatlahir') }}">
    @error('tempatlahir')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-md-4">
    <label for="tgllahir" class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control @error('tgllahir') is-invalid @enderror"  value="{{ old('tgllahir') }}" required id="tgllahir" name="tgllahir">
    @error('date')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div>
  <div class="col-md-4">
    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
    <select id="jeniskelamin" name="jeniskelamin"  required class="form-select">
      <option selected>Choose...</option>
      <option value="KTP">LAKI-LAKI</option>
      <option value="SIM">PEREMPUAN</option>
    </select>
  </div>
   <div class="col-md-4">
    <label for="inputZip" class="form-label">Upload KTP</label>
    <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file"  value="{{ old('file') }}" >
    @error('file')<div class="invalid-feedback"> {{ $message }} </div>@enderror
  </div> 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Save Data</button><br><br>
  </div>
</form>
@endsection
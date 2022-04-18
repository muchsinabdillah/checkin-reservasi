@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pelapak TaniOke</h1> 
    </div>  

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    
     <div class="table-responsive col-lg-12">
       <a href="/" class="btn btn-primary">Kembali Ke halaman Form Pelapak</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Handphone</th>
              <th scope="col">Nama Lapak</th>
              <th scope="col">Deskripsi Lapak</th>
              <th scope="col">Action</th> 
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{  $loop->iteration }}</td>
                    <td>{{  $post->fullname }}</td>
                    <td>{{  $post->walkeraddress }}</td>
                    <td>{{  $post->phonenumber }}</td>
                    <td>{{  $post->walkername }}</td>
                    <td>{{  $post->walkerdescription }}</td>
                    <td>
                        <a href="/dashboard/walkers/{{ $post->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                     </td> 
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-end">
          {{ $posts->links() }}
      </div>

@endsection
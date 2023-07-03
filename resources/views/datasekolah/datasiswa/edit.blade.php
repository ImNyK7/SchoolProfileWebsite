@extends('datasekolah.layoutdash.main')

@section('cons')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Siswa</h1>
      </div>

<div class="col-md-4">  
    <form method="post" action="/datasekolah/datasiswa">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="NomorInduk" class="form-label">Nomor Induk</label>
        <input type="text" class="form-control @error('NomorInduk') is-invalid @enderror" id="NomorInduk" name="NomorInduk"> @error('NomorInduk') <div class="invalid-feedback"> {{ $message }}</div> @enderror
        <label for="NamaSiswa" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control @error('NamaSiswa') is-invalid @enderror" id="NamaSiswa" name="NamaSiswa"> @error('NamaSiswa') <div class="invalid-feedback"> {{ $message }}</div> @enderror
        <label for="TingkatSiswa" class="form-label">Tingkat Siswa</label>
        <input type="text" class="form-control @error('TingkatSiswa') is-invalid @enderror" id="TingkatSiswa" name="TingkatSiswa"> @error('TingkatSiswa') <div class="invalid-feedback"> {{ $message }}</div> @enderror
        <label for="JurusanSiswa" class="form-label">Jurusan</label>
        <input type="text" class="form-control @error('JurusanSiswa') is-invalid @enderror" id="JurusanSiswa" name="JurusanSiswa"> @error('JurusanSiswa') <div class="invalid-feedback"> {{ $message }}</div> @enderror
        <label for="NoTlp" class="form-label">NoTlp</label>
        <input type="text" class="form-control @error('NoTlp') is-invalid @enderror" id="NoTlp" name="NoTlp"> @error('NoTlp') <div class="invalid-feedback"> {{ $message }}</div> @enderror
        </div>
      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</div>

@endsection
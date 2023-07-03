@extends('datasekolah.layoutdash.main')

@section('cons')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Siswa-Siswi SMK 7 JATI NEGARA</h1>
      </div>

      @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="table-responsive col-lg-10">
        <a href="/datasekolah/datasiswa/create" class="btn btn-primary mb-3">Tambah Data Siswa</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NoInduk</th>
              <th scope="col">Nama</th>
              <th scope="col">Tingkat</th>
              <th scope="col">Jurusan</th>
              <th scope="col">NoTlp</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $datasiswas as $datasekolah)
            <tr>
              <td>{{ $datasekolah->NomorInduk }}</td>
              <td>{{ $datasekolah->NamaSiswa }}</td>
              <td>{{ $datasekolah->TingkatSiswa }}</td>
              <td>{{ $datasekolah->JurusanSiswa }}</td>
              <td>{{ $datasekolah->NoTlp }}</td>
              <td>
                <a href="/datasekolah/datasiswa/edit" class="badge bg-info"><span class="bi bi-pencil-square"></span></a>
                <form action="/datasekolah/datasiswa" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <input type="hidden" name="id" value="{{ $datasekolah->id }}">
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin menghapus data?')"><span class="bi bi-trash"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
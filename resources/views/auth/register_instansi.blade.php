@extends('layouts.admin-dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Registrasi Instansi Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('register.instansi.submit') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama_instansi">Nama Instansi</label>
                            <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="Nama Instansi" required>
                            @error('nama_instansi')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Daftar Instansi</button>
                            <a href="{{ route('admin.register.user') }}" class="btn btn-secondary">Kembali ke Registrasi User</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

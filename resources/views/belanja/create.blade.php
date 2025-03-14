@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <h4 class="mb-0"><i class="bi bi-plus-circle me-2"></i> Tambah Data Belanja</h4>
        </div>
        <div class="card-body">
            {{-- Error Message --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Form --}}
            <form action="{{ route('belanja.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan kode barang" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nama_sparepart" class="form-label">Nama Sparepart</label>
                        <input type="text" class="form-control" id="nama_sparepart" name="nama_sparepart" placeholder="Masukkan nama sparepart" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="modal" class="form-label">Modal</label>
                        <input type="number" class="form-control" id="modal" name="modal" placeholder="Masukkan modal" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="Masukkan harga jual" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="stok_awal" class="form-label">Stok Awal</label>
                        <input type="number" class="form-control" id="stok_awal" name="stok_awal" placeholder="Masukkan stok awal" required>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-2">
                        <i class="bi bi-save"></i> Simpan Data
                    </button>
                    <a href="{{ route('belanja.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- CSS --}}
<style>
    /* Styling untuk card header */
    .card-header {
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
    }

    /* Styling untuk form */
    .form-control {
        border: 1px solid #ced4da;
        border-radius: 6px;
        padding: 10px;
        font-size: 16px;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    .form-label {
        font-weight: 500;
        color: #495057;
    }

    /* Styling untuk alert */
    .alert {
        border-radius: 8px;
    }

    .alert-dismissible .btn-close {
        position: absolute;
        top: 8px;
        right: 10px;
    }

    /* Styling untuk tombol */
    .btn-success, .btn-secondary {
        border-radius: 6px;
        padding: 8px 16px;
        font-size: 16px;
        transition: background-color 0.2s ease;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Tombol di row form */
    .d-flex .btn {
        min-width: 140px;
    }

    /* Styling untuk shadow dan border pada card */
    .card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border: none;
    }

    /* Styling untuk efek hover pada row form */
    .row .col-md-4, .row .col-md-6 {
        transition: transform 0.2s ease;
    }

    .row .col-md-4:hover, .row .col-md-6:hover {
        transform: translateY(-2px);
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        .btn {
            font-size: 14px;
            padding: 6px 12px;
        }

        .form-control {
            font-size: 14px;
            padding: 8px;
        }

        .card-header h4 {
            font-size: 16px;
        }
    }
</style>
@endsection

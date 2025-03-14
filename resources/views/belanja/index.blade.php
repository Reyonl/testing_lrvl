@extends('layouts.app')

@section('content')
<style>
    /* Container */
    .container {
        max-width: 1000px;
    }

    /* Card Styling */
    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-3px);
    }

    /* Header Styling */
    .card-body {
        padding: 20px;
        background-color: #f8f9fa;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    h4 {
        font-size: 20px;
        font-weight: 600;
        color: #007bff;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 16px;
        font-size: 16px;
        border-radius: 8px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: center;
    }

    .btn-primary i {
        margin-right: 5px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    /* Table Styling */
    .table {
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 12px;
        overflow: hidden;
    }

    .table thead tr th {
        background-color: #343a40;
        color: #ffffff;
        padding: 14px;
        font-size: 16px;
        text-align: center;
    }

    .table tbody tr {
        transition: background-color 0.2s ease;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Cell Styling */
    .table th,
    .table td {
        padding: 14px;
        font-size: 15px;
        vertical-align: middle;
        border: 1px solid #dee2e6;
    }

    /* Right Align for Currency */
    .table td.text-end {
        text-align: right;
    }

    /* Success Alert */
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 12px;
        border-radius: 8px;
        display: flex;
        align-items: center;
    }

    .alert-success i {
        margin-right: 10px;
        font-size: 18px;
    }

    .btn-close {
        position: absolute;
        right: 16px;
        top: 12px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table th,
        .table td {
            padding: 10px;
            font-size: 14px;
        }

        .btn-primary {
            font-size: 14px;
            padding: 8px 12px;
        }

        h4 {
            font-size: 18px;
        }
    }
</style>

<div class="container mt-5">
    {{-- Alert Pesan Sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Header --}}
    <div class="card shadow-sm rounded mb-4 border-0">
        <div class="card-body d-flex justify-content-between align-items-center bg-light">
            <h4 class="mb-0 text-primary">
                <i class="bi bi-list-ul me-2"></i> Daftar Belanja
            </h4>
            <a href="{{ route('belanja.create') }}" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Tambah Data
            </a>
        </div>
    </div>

    {{-- Tabel --}}
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Kode Barang</th>
                    <th class="text-center">Nama Sparepart</th>
                    <th class="text-center">Modal</th>
                    <th class="text-center">Harga Jual</th>
                    <th class="text-center">Stok Awal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($belanja as $item)
                    <tr>
                        <td class="text-center">{{ $item->kode_barang }}</td>
                        <td>{{ $item->nama_sparepart }}</td>
                        <td class="text-end">Rp {{ number_format($item->modal, 0, ',', '.') }}</td>
                        <td class="text-end">Rp {{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $item->stok_awal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

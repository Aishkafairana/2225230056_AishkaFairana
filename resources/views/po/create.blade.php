@extends('layouts.master')

@section('content')

    <div class="container">
    <h1 p class="text-center">Create Pre Order</p></h1>
        <form action="/po/store" method="POST">
            
            @csrf
            <select class="form-select" name="kode_baju">
                <option value="">Pilih Kode Baju</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
            </select><br>
            <select class="form-select" name="warna_baju">
                <option value="">Pilih Warna Baju</option>
                <option value="hitam">Hitam</option>
                <option value="abu">Abu</option>
                <option value="biru">Biru</option>
                <option value="putih">Putih</option>
            </select><br>
            <select class="form-select" name="ukuran_baju">
                <option value="">Pilih Ukuran Baju</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">         
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Voucher</label>
                <input type="text" name="kode_voucher" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">         
            </div class="d-grid gap-2">
            <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
        </form>
    </div>
@endsection

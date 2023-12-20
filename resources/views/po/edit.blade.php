@extends('layouts.master')

@section('content')
    <div class="container">
    <h1 p class="text-center">Edit Data</p></h1>

        <form action="/po/{{$po->id}}" method="POST">
            @method('put')
            @csrf
            <select class="form-select" name="kode_baju">
                <option value="">Pilih Kode Baju</option>
                <option value="A1" @if($po->kode_baju == "A1") selected @endif>A1</option>
                <option value="A2" @if($po->kode_baju == "A2") selected @endif>A2</option>
                <option value="B1" @if($po->kode_baju == "B1") selected @endif>B1</option>
                <option value="B2" @if($po->kode_baju == "B2") selected @endif>B2</option>
                <option value="C1" @if($po->kode_baju == "C1") selected @endif>C1</option>
                <option value="C2" @if($po->kode_baju == "C2") selected @endif>C2</option>
            </select><br>
            <select class="form-select" name="warna_baju">
                <option value="">Pilih Warna Baju</option>
                <option value="hitam" @if($po->warna_baju == "hitam") selected @endif>Hitam</option>
                <option value="abu" @if($po->warna_baju == "abu") selected @endif>Abu</option>
                <option value="biru" @if($po->warna_baju == "biru") selected @endif>Biru</option>
                <option value="putih" @if($po->warna_baju == "putih") selected @endif>Putih</option>
            </select><br>
            <select class="form-select" name="ukuran_baju">
                <option value="">Pilih Ukuran Baju</option>
                <option value="S" @if($po->ukuran_baju == "S") selected @endif>S</option>
                <option value="M" @if($po->ukuran_baju == "M") selected @endif>M</option>
                <option value="L" @if($po->ukuran_baju == "L") selected @endif>L</option>
                <option value="XL" @if($po->ukuran_baju == "XL") selected @endif>XL</option>
            </select><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$po->metode_pembayaran}}">         
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Voucher</label>
                <input type="text" name="kode_voucher" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$po->kode_voucher}}">         
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
    
@endsection
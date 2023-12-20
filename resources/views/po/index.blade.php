@extends('layouts.master')

@section('content')
<div class="p-3 mb-2 bg-dark text-white" style="font-size: 30px;"><em>Pre Order AishClothing.co</em></div>
    <div class="container-md">
        <a class="btn btn-outline-secondary" href="/po/create">Add Pre Order</a>
        <table class="table table-hover">
            <tr>
                <th>Kode Baju</th>
                <th>Warna Baju</th>
                <th>Ukuran Baju</th>
                <th>Metode Pembayaran</th>
                <th>Kode Voucher</th>
                <th>Aksi</th>
            </tr>
            @foreach($PO as $p)
            <tr>
                <td>{{$p->kode_baju}}</td>
                <td>{{$p->warna_baju}}</td>
                <td>{{$p->ukuran_baju}}</td>
                <td>{{$p->metode_pembayaran}}</td>
                <td>{{$p->kode_voucher}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a class="btn btn-light btn-rounded" href="/po/{{$p->id}}/edit">Edit</a>
                        <form action="/po/{{$p->id}}/" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger btn-rounded" type="submit" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
            <figure>
            <figure class="text-end">
                <blockquote class="blockquote">
                    <p>Buat Cerita Baru dengan Gaya yang Baru, Tampil Beda, Tetap Keren!</p>
                </blockquote>
                <figcaption class="blockquote-footer">You Are Your Style!<cite title="Source Title">Wear better, Look Better</cite></figcaption>
            </figure>
    </div>\
@endsection

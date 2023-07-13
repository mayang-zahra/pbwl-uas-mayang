@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/transaksi/' .$row->transaksi_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">ID PAKET</label>
                        <input type="text" name="transaksi_id_paket" class="form-control" value="{{$row->transaksi_id_paket}}">
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA KONSUMEN</label>
                        <input type="text" name="transaksi_nama_konsumen" class="form-control" value="{{$row->transaksi_nama_konsumen}}">
                    </div>
                    <div class="mb-3">
                        <label for="">BERAT</label>
                        <input type="text" name="transaksi_berat" class="form-control" value="{{$row->transaksi_berat}}">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BAYAR</label>
                        <input type="text" name="transaksi_jumlah_bayar" class="form-control" value="{{$row->transaksi_jumlah_bayar}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
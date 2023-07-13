@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/transaksi')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA PAKET</label>
                        <select name="transaksi_id_paket" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($paket as $pkt)
                                <option value="{{$pkt->paket_id}}">{{$pkt->paket_nama_paket}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA KONSUMEN</label>
                        <select name="transaksi_id_konsumen" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($konsumen as $kon)
                                <option value="{{$kon->konsumen_id}}">{{$kon->konsumen_nama_konsumen}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">BERAT</label>
                        <input type="text" name="transaksi_berat" class="form-control" placeholder="Berat">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BAYAR</label>
                        <input type="text" name="transaksi_jumlah_bayar" class="form-control" placeholder="Juamlah Bayar">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
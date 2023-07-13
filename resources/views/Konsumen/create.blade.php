@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA KONSUMEN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/konsumen')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA KOMSUMEN</label>
                        <input type="text" name="konsumen_nama_konsumen" class="form-control" placeholder="Nama Konsumen">
                    </div>
                    <div class="mb-3">
                        <label for="">ALAMAT</label>
                        <input type="text" name="konsumen_alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="">NO TELEPON</label>
                        <input type="text" name="konsumen_no_tlpn" class="form-control" placeholder="No Telepon">
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
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PAKET</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/paket/' .$row->paket_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA PAKET</label>
                        <input type="text" name="paket_nama_paket" class="form-control" value="{{$row->paket_nama_paket}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA PAKET</label>
                        <input type="text" name="paket_harga_paket" class="form-control" value="{{$row->paket_harga_paket}}">
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
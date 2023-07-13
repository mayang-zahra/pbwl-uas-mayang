@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA KONSUMEN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/konsumen/' .$row->konsumen_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA KONSUMEN</label>
                        <input type="text" name="konsumen_nama_konsumen" class="form-control" value="{{$row->konsumen_nama_konsumen}}">
                    </div>
                    <div class="mb-3">
                        <label for="">ALAMAT</label>
                        <input type="text" name="konsumen_alamat" class="form-control" value="{{$row->konsumen_alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="">NO TELEPON</label>
                        <input type="text" name="konsumen_no_tlpn" class="form-control" value="{{$row->konsumen_no_tlpn}}">
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
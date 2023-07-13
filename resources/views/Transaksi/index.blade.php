@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA TRANSAKSI</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('transaksi/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>NAMA PAKET</td>
                        <td>NAMA KONSUMEN</td>
                        <td>BERAT</td>
                        <td>JUMLAH BAYAR</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->transaksi_id}}</td>
                        <td>{{ $row->paket->paket_nama_paket}}</td>
                        <td>{{ $row->konsumen->konsumen_nama_konsumen}}</td>
                        <td>{{ $row->transaksi_berat}}</td>
                        <td>{{ $row->transaksi_jumlah_bayar}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('transaksi/' .$row->transaksi_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('transaksi/' .$row->transaksi_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
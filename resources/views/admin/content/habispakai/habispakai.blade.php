@extends('admin.layout.admin')

@section('content')
    <div class="">
        <a class="btn btn-success" href="{{ url('habispakai/create') }}" style="margin-top: 10px;margin-bottom:10px;">Tambah</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($habispakai as $key)
                      <tr>
                          <td>{{$key->kodeBarang}}</td>
                          <td>{{$key->namaBarang}}</td>
                          <td>{{$key->kategori->kategori}}</td>
                          <td>{{$key->ruang->namaRuang}}</td>
                          <td>{{$key->jumlah}}</td>
                          <td><a href="{{url('/habispakai/update/' . encrypt($key->id_hap))}}" class='fa fa-pencil text-warning'></a></td>
                          <td><a href="{{url('/habispakai/delete/' . encrypt($key->id_hap))}}" class='fa fa-trash text-danger'></a></td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
            <a href="http://" onclick=""></a>
    </div>
@endsection

@extends('admin.layout.admin')

@section('content')
    <div class="">
        <a class="btn btn-success" href="{{ url('inventaris/create') }}" style="margin-top: 10px;margin-bottom:10px;">Tambah</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Kode Inventaris</th>
                    <th>Nama Inventaris</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($inventaris as $key)
                      <tr>
                          <td>{{$key->kodeInventaris}}</td>
                          <td>{{$key->namaInventaris}}</td>
                          <td>{{$key->kategori->kategori}}</td>
                          <td>{{$key->ruang->namaRuang}}</td>
                          <td>{{$key->jumlah}}</td>
                          <td>{{$key->status}}</td>
                          <td><a href="{{url('/inventaris/update/' . encrypt($key->id_inv))}}" class='fa fa-pencil text-warning'></a></td>
                          <td><a href="{{url('/inventaris/delete/' . encrypt($key->id_inv))}}" class='fa fa-trash text-danger'></a></td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
    </div>
@endsection

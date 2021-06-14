@extends('admin.admin')

@section("content")
<div class="row">
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </div>
        @endif
        <form action="{{url('habispakai/create/')}}" method="post" style="padding-top: 10px">
            @csrf
            <div class="form-group">
                <label for="kodeBarang" class="form-label">Kode</label>
                <input type="text" name="kodeBarang" id="kodeBarang" class="form-control">
            </div>
            <div class="form-group">
                <label for="namaBarang" class="form-label">Nama Barang</label>
                <input type="text" name="namaBarang" id="namaBarang" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_kat" class="form-label">Kategori</label>
                <select name="id_kat" id="id_kat" class="form-control">
                    <?php
                        $body=DB::table('kategori')->get();
                        foreach ($body as $value) {
                            echo "<option value=".$value->id_kat.">".$value->kategori."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_ruang" class="form-label">Lokasi</label>
                <select name="id_ruang" id="id_ruang" class="form-control">
                    <?php
                        $body=DB::table('ruang')->get();
                        foreach ($body as $value) {
                            echo "<option value=".$value->id_ruang.">".$value->namaRuang."</option>";
                        }
                        ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="margin-top: 30px;margin-bottom: 20px;">Simpan</button>
        </form>
    </div>

</div>
@endsection

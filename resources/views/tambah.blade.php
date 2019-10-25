<!DOCTYPE html>
<html>
<head>
    <title>Input Data Barang</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <script type="text/javascript"src="{{asset('/css/bootstrap.min.js')}}"></script>
    <style>
    .navbar-brand{
        margin: auto;
    }
    div.form-data {
            max-width: 500px;
    }
    form{
        margin-right: 150px;
        margin-left: 150px;
    }
    h5{
        margin-left: 150px;
    }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">KELOLA DATA BARANG</a>
        </nav>
        <br>
        <br>
        <br>
        <div class="clearfix mb-3">
            <h5 class="float-left">Input Data Barang</h5>
        </div>
        <form method="post" action="{{url('/simpan')}}">
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-8">
                    <input type="kode" class="form-control" id="kode" name="kode" value="{{ old('kode') }}">
                    <!-- @if ($errors->has('kode'))
                        <div class="error">{{ $errors->first('kode') }}</div>
                    @endif -->
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                    <!-- @if ($errors->has('nama'))
                        <div class="error">{{ $errors->first('nama') }}</div>
                    @endif -->
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                <!-- @if ($errors->has('deskripsi'))
                    <div class="error">{{ $errors->first('deskripsi') }}</div>
                @endif -->
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="stok" name="stok" value="{{ old('stok') }}">
                    <!-- @if ($errors->has('stok'))
                        <div class="error">{{ $errors->first('stok') }}</div>
                    @endif -->
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}">
                    <!-- @if ($errors->has('harga'))
                        <div class="error">{{ $errors->first('harga') }}</div>
                    @endif -->
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="berat" name="berat" value="{{ old('berat') }}">
                    <!-- @if ($errors->has('berat'))
                        <div class="error">{{ $errors->first('berat') }}</div>
                    @endif -->
                </div>
                <label for="berat" class="col-sm-2  col-form-label">gram</label>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-success text-center mx-auto px-4 mt-2">Tambah</button>
            </div>
        </form>
    </div>

</body>
</html>
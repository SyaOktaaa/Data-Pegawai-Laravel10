<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai - XI-PPLG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">

                                        <!-- error message untuk content -->
                                        @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jenis Kelamin</label>
                                        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                            <option selected>Pilih jenis kelamin</option>
                                            <option value="laki-laki" name="laki-laki">laki-laki</option>
                                            <option value="perempuan" name="perempuan">perempuan</option>
                                          </select>

                                        <!-- error message untuk title -->
                                        @error('jenis_kelamin')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat"></textarea>

                                <!-- error message untuk title -->
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label class="font-weight-bold">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir anda">

                                        <!-- error message untuk title -->
                                        @error('tempat_lahir')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tanggal Lahir</label>
                                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir anda">

                                        <!-- error message untuk title -->
                                        @error('tanggal_lahir')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Masuk kerja</label>
                                <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" placeholder="Masukkan tanggal masuk anda">

                                <!-- error message untuk title -->
                                @error('tanggal_masuk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label class="font-weight-bold">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" placeholder="Masukkan Jabatan anda">

                                        <!-- error message untuk title -->
                                        @error('jabatan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label class="font-weight-bold">Job desk</label>
                                        <input type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{ old('job') }}" placeholder="Masukkan tanggal masuk anda">

                                        <!-- error message untuk title -->
                                        @error('job')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
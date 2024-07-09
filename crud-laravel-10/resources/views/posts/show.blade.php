<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai - XI-PPLG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <center>
                            <h4>{{ $post->title }}</h4>
                            <h4 style="font-weight: 400">Nama: <span style="color: rgb(9, 218, 250)">{{ $post->nama }}</span></h4>
                            <h4 style="font-weight: 400">Alamat:{{ $post->alamat }}</h4>
                            <h4 style="font-weight: 400">Tempat lahir: {{ $post->tempat_lahir }}</h4>
                            <h4 style="font-weight: 400">Tgl lahir: {{ $post->tanggal_lahir }}</h4>
                            <h4 style="font-weight: 400">Gender: {{ $post->jenis_kelamin }}</h4>
                            <h4 style="font-weight: 400">Jabatan: {{ $post->jabatan }}</h4>
                            <h4 style="font-weight: 400">Tgl masuk: {{ $post->tanggal_masuk }}</h4>
                            <h4 style="font-weight: 400">Job: {{ $post->job }}</h4>
                        </center>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

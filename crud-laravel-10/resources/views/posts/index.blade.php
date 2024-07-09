<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai - XI-PPLG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background: lightgray">

    <div class="container mt-5" style="position: relative">
        <div class="row">
            <div class="col-md-20">
                <div>
                    <h3 class="text-center my-4">Data Pegawai</h3>
                    <div class="container" style="position: absolute; top:-2rem; right:-19rem">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <ul class="nav navbar-nav navbar-right">
                        <a href="http://localhost/here/" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span>
        </a>
                        </ul>
        </a>
                    </div>
                    <hr>
                </div>
                
                    <a href="{{ route('posts.create') }}" class="btn btn-md btn-success">TAMBAH POST</a>
                
                <table id="datatablesSimple" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded"
                                        style="width: 90px">
                                </td>
                                <td>{{ $post->nama }}</td>
                                <td>{{ $post->alamat }}</td>
                                <td>{{ $post->tempat_lahir }}</td>
                                <td>{{ $post->tanggal_lahir }}</td>
                                <td>{{ $post->jenis_kelamin }}</td>
                                <td>{{ $post->jabatan }}</td>
                                <td>{{ $post->tanggal_masuk }}</td>
                                {{-- <td>{{ $post->masuk_kerja }}</td> --}}

                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('posts.show', $post->id) }}"
                                            class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> --}}
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="../../js/datatables-simple-demo.js"></script>
    <script>
        new DataTable('#datatablesSimple');
    </script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>

    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
     

</body>

</html>

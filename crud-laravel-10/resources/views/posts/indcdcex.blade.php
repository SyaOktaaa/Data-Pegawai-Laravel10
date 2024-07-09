<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai - XI-PPLG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-20">
                <div>
                    <h3 class="text-center my-4">Data Pegawai Prakarya Internasional</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded" style="margin-left: -6.5rem; margin-right:-6.5rem;">
                    <div class="card-body" style="width: 100%">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
</form>
<form action="{{ route('search') }}" method="GET">
 <input type="text" name="keyword" placeholder="Cari Nama..">
 <button type="submit">Cari</button> </form>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col" style="width: 1rem;">TEMPAT_LAHIR</th>
                                <th scope="col">TGL_LAHIR</th>
                                <th scope="col">GENDER</th>
                                <th scope="col">JABATAN</th>
                                <th scope="col">TANGGAL_MASUK</th>
                                <th scope="col">JOB_DESK</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                  <tr>
                                      <td class="text-center">
                                          <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 90px">
                                      </td>
                                      <td>{{ $post->nama }}</td>
                                      <td>{{ $post->alamat }}</td>
                                      <td>{{ $post->tempat_lahir }}</td>
                                      <td>{{ $post->tanggal_lahir }}</td>
                                      <td>{{ $post->jenis_kelamin }}</td>
                                      <td>{{ $post->jabatan }}</td>
                                      <td>{{ $post->tanggal_masuk }}</td>
                                      <td>{{ $post->job }}</td>

                                      <td class="text-center">
                                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                          </table>

                        {{-- <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col" style="width: 1rem;">TEMPAT_LAHIR</th>
                                <th scope="col">TGL_LAHIR</th>
                                <th scope="col">GENDER</th>
                                <th scope="col">JABATAN</th>
                                <th scope="col">TANGGAL_MASUK</th>
                                <th scope="col">JOB_DESK</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->alamat }}</td>
                                    <td>{{ $post->tempat_lahir }}</td>
                                    <td>{{ $post->tanggal_lahir }}</td>
                                    <td>{{ $post->jenis_kelamin }}</td>
                                    <td>{{ $post->jabatan }}</td>
                                    <td>{{ $post->tanggal_masuk }}</td>
                                    <td>{{ $post->job }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                          </table>   --}}
                          {{ $posts->links() }}
                    </div>
                    <a href="http://localhost/here/" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

        
    

</body>
</html>

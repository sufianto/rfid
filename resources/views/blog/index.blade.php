@extends('template')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <!-- <a href="" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a> -->
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        @method('put')

                        @if(session()->has('absen'))
                            <div class="alert alert-danger mt-2">
                                {{ session('absen') }}
                            </div>
                        @endif
                        @if(session()->has('gagal'))
                            <div class="alert alert-danger mt-2">
                                {{ session('gagal') }}
                            </div>
                        @endif
                        
                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control border-transparent @error('title') is-invalid @enderror" style="border: none; opacity: 0;" name="title" value="{{ old('title') }}" placeholder="" autocomplete="off" autofocus>

                            
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                      
                        <button type="submit" id="myBtn" class="btn btn-md btn-primary" style="opacity: 0;">SIMPAN</button>

                    </form> 
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <!-- <th scope="col">GAMBAR</th> -->
                                <th scope="col">JUDUL</th>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">JAM</th>
                                <!-- <th scope="col">CONTENT</th> -->
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($blogs as $blog)
                                <tr>
                                    <!-- <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px">
                                    </td> -->
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->image }}</td>
                                    <td>{{ $blog->content }}</td>
                                    <!-- <td>{!! $blog->content !!}</td> -->
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            <a class="btn btn-info btn-sm" href="">Show</a>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
    @endsection
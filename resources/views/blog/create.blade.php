



@extends('template')
@section('content')


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                           

                            <div class="form-group">
                                <label class="font-weight-bold">JUDUL</label>
                                <input type="text" id="31926767765874" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Blog" autofocus>
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                          
                            <button type="submit" id="myBtn" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
<script type="text/javascript">
function formAutoSubmit() {
var frm = document.getElementById(" 31926767765874 ");
dari.kirim();
}
window.onload = formAutoSubmit;
</script>
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'kontent' );
</script>


@endsection






<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('admin/kategori', $kategori->id)}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama kategori </label>
                            <input type="text" name="nama kategori" value="{{$kategori->nama_kategori}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$kategori->deskripsi}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Dibuat</label>
                            <input type="date" name="tanggal_dibuat" value="{{$kategori->tanggal_dibuat}}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary float-right">
                                <i class="fas fa-save">Simpan</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('kategori', $kategori->id)}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama </label>
                            <input type="text" name="nama" value="{{$kategori->nama}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">harga beli</label>
                            <input type="number" name="harga" value="{{$kategori->harga}}" class="form-control">
                        </div>
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">foto</label>
                            <input type="text" name="foto" value="{{$kategori->foto}}" class="form-control">
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$kategori->deskripsi}}" class="form-control">
                        </div> -->
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
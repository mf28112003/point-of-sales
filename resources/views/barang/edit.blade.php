<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('admin/barang', $barang->id)}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama </label>
                            <input type="text" name="nama" value="{{$barang->nama}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">harga</label>
                            <input type="number" name="harga" value="{{$barang->harga}}" class="form-control">
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">foto</label>
                            <input type="text" name="foto" value="{{$barang->foto}}" class="form-control">
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$barang->deskripsi}}" class="form-control">
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
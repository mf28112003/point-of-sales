<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('gudang', $gudang->id)}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama barang </label>
                            <input type="text" name="nama_barang" value="{{$gudang->nama}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jumlah barang</label>
                            <input type="number" name="jumlah_barang" value="{{$gudang->jumlah_barang}}" class="form-control">
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
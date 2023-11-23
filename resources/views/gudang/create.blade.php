<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah gudang
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('gudang')}}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama barang</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jumlah barang </label>
                            <input type="number" name="jumlah_barang" class="form-control">
                        </div>
                    </div>
                    <!-- {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">deskripsi </label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">foto </label>
                            <input type="text" name="foto" class="form-control">
                        </div>
                    </div> --}} -->
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
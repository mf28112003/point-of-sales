<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Kategori
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/kategori')}}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Dibuat</label>
                            <input type="date" name="tanggal_dibuat" class="form-control">
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
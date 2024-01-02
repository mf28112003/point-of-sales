<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah customer
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/customer')}}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">User id</label>
                            <input type="text" name="user_id" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">email id </label>
                            <input type="text" name="email_id" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">alamat </label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">foto </label>
                            <input type="text" name="foto" class="form-control">
                        </div>
                    </div> --}}
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
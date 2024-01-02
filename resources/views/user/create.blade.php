<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data user
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/user') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jenis kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value=""></option>
                                <option value="Laki laki">Laki laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary float-right">
                            <i class="fas fa-save"></i>Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>

<x-app>
    <div class="card">
        <div class="card-body">
            <form action="get">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" name="nama" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">jenis kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value=""></option>
                            <option value="Laki laki">Laki laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                </div>
                <button class="btn btn-success float-right"><i class="fa fa-search">filter</i></button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data User
            </div>
            <a href="{{ url('admin/user/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>Tambah User
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis kelamin</th>
                </thead>
                <tbody>
                    @foreach ($list_user as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/user', $user->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $user->id }}" />

                                </div>
                            </td>
                            <td> {{ $user->username }}</td>
                            <td> {{ $user->nama }}</td>
                            <td> {{ $user->email }}</td>
                            <td> {{ $user->jenis_kelamin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
>>>>>>> 

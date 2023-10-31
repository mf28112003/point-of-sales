<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data user
            </div>
            <a href="{{url('user/create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah user</i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Nama</th>
                    <th>user name</th>
                    <th>email</th>
                </thead>
                <tbody>
                    @foreach($list_user as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url ('user', $user->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('user', $user->id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$user->id}}"/>
                            </div>
                        </td>
                        <td>
                            {{$user->nama}}
                        </td>
                        <td>
                            {{-- Rp. {{number_format ($user->harga)}} --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
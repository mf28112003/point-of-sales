<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
<<<<<<< HEAD
                Data user
            </div>
            <a href="{{url('user/create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah user</i>
=======
                Data User
            </div>
            <a href="{{ url('user/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>Tambah User
>>>>>>> e3f82b724aaa3cbd554e5df26034a65619d6d6be
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
<<<<<<< HEAD
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
=======
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_user as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('user', $user->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('user', $user->id) }}/edit" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $user->id }}" />

                                </div>
                            </td>
                            <td> {{ $user->username }}</td>
                            <td> {{ $user->nama }}</td>
                            <td> {{ $user->email }}</td>
                        </tr>
>>>>>>> e3f82b724aaa3cbd554e5df26034a65619d6d6be
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< HEAD
</x-app>
=======
</x-app>
>>>>>>> e3f82b724aaa3cbd554e5df26034a65619d6d6be

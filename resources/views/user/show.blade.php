<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-tittle">Detail User</div>
            <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>username </dt>
                        <dd>{{ $user->username }}</dd>
                        <dt>Nama </dt>
                        <dd>{{ $user->nama }}</dd>
                        <dt>email </dt>
                        <dd>{{ $user->email }}</dd>
                        <dt>Jenis Kelamin </dt>
                        <dd>{{ $user->jenis_kelamin }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <img src="{{ $user->foto }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</x-app>

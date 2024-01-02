<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-tittle">Detail customer</div>
            <a href="{{ url('admin/customer', $customer->id) }}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>user </dt>
                        <dd>{{ $customer->user_id }}</dd>
                        <dt>Nama </dt>
                        <dd>{{ $customer->nama }}</dd>
                        <dt>email </dt>
                        <dd>{{ $customer->email_id }}</dd>
                        <dt>alamat </dt>
                        <dd>{{ $customer->alamat }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    {{-- <img src="{{ $user->foto }}" alt="" class="img-fluid"> --}}
                </div>
            </div>
        </div>
    </div>
</x-app>

<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail satuan</div>
            <a href="{{url('admin/satuan', $satuan->id)}}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>Edit
            </a>
        </div>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{$satuan->nama}}</dd>
                        <dt>Harga jual</dt>
                        <dd>{{$satuan->harga}}</dd>
                    </dl>                  
                </div>
                <!-- <div class="col-md-6">
                    <img src="{{$satuan->foto}}" alt="" class="img-fluid">
                </div> -->
            </div>
        </div>
    </div>
</x-app>
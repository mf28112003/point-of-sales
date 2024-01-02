<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail kategori</div>
            <a href="{{url('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>Edit
            </a>
        </div>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama kategori</dt>
                        <dd>{{$kategori->nama_kategori}}</dd>
                        <dt>Deskripsi</dt>
                        <dd>{{$kategori->deskripsi}}</dd>
                        <dt>Tanggal Dibuat</dt>
                        <dd>{{$kategori->tanggal_dibuat}}</dd>
                    </dl>                  
                </div>
                <!-- <div class="col-md-6">
                    <img src="{{$kategori->foto}}" alt="" class="img-fluid">
                </div> -->
            </div>
        </div>
    </div>
</x-app>
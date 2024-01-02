<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail barang</div>
            <a href="{{url('admin/barang', $barang->id)}}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>Edit
            </a>
        </div>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama barang</dt>
                        <dd>{{$barang->nama}}</dd>
                        <dt>Harga beli</dt>
                        <dd>{{$barang->harga}}</dd>
                        <dt>Deskripsi</dt>
                        <dd>{!! nl2br($barang->Deskripsi)!!}</dd>
                        <!-- <dt>foto</dt>
                        <dd>{{$barang->foto}}</dd> -->
                    </dl>                  
                </div>
                <div class="col-md-6">
                    <img src="{{$barang->foto}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</x-app>
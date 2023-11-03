<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail gudang</div>
            <a href="{{url('gudang', $gudang->id)}}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>Edit
            </a>
        </div>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama barang</dt>
                        <dd>{{$barang->nama}}</dd>
                        <dt>jumlah barang</dt>
                        <dd>{{$barang->jumlah_barang}}</dd>
                        {{-- <dt>Deskripsi</dt>
                        <dd>{{$barang->Deskripsi}}</dd>
                        <dt>foto</dt>
                        <dd>{{$barang->foto}}</dd> --}}
                    </dl>                  
                </div>
                <!-- <div class="col-md-6">
                    <img src="{{$barang->foto}}" alt="" class="img-fluid">
                </div> -->
            </div>
        </div>
    </div>
</x-app>
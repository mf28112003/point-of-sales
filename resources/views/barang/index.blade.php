<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data barang
            </div>
            <a href="{{url('admin/barang/create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah barang</i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Nama</th>
                    <th>harga</th>
                    <th>deskripsi</th>
                    <th>foto</th>
                </thead>
                <tbody>
                    @foreach($list_barang as $barang)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url ('admin/barang', $barang->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('admin/barang', $barang->id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$barang->id}}"/>
                            </div>
                        </td>
                        <td>
                            {{$barang->nama}}
                        </td>
                        <td>
                            Rp. {{number_format ($barang->harga)}}
                        </td>
                        <td>
                            {{$barang->deskripsi}}
                        </td>
                        <td>
                           <img src=" {{$barang->foto}}" alt="">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
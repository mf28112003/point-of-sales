<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data gudang
            </div>
            <a href="{{url('gudang/create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah gudang</i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Nama barang</th>
                    <th>jumlah barang</th>
                    {{-- <th>deskripsi</th>
                    <th>foto</th> --}}
                </thead>
                <tbody>
                    @foreach($list_gudang as $gudang)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url ('gudang', $gudang->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('gudang', $gudang->id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$gudang->id}}"/>
                            </div>
                        </td>
                        <td>
                            {{$gudang->nama_barang}}
                        </td>
                        {{-- <td>
                            Rp. {{number_format ($gudang->harga)}}
                        </td> --}}
                        <td>
                            {{$gudang->jumlah_barang}}
                        </td>
                        {{-- <td>
                            {{$gudang->foto}}
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
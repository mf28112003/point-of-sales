<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Kategori
            </div>
            <a href="{{url('admin/kategori/create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah Kategori</i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Dibuat</th>
                    <!-- <th>harga</th> -->
                </thead>
                <tbody>
                    @foreach($list_kategori as $kategori)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url ('admin/kategori', $kategori->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$kategori->id}}"/>
                            </div>
                        </td>
                        <!-- <td>
                            {{$kategori->id_kategori}}
                        </td> -->
                        <td>
                            {{$kategori->nama_kategori}}
                        </td>
                        <td>
                            {{$kategori->deskripsi}}
                        </td>
                        <td>
                            {{$kategori->tanggal_dibuat}}
                        </td>
                        <!-- <td>
                            Rp. {{number_format ($kategori->harga)}}
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data satuan
            </div>
            <a href="{{url('admin/satuan/create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah satuan</i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Nama</th>
                    <th>harga jual</th>
                </thead>
                <tbody>
                    @foreach($list_satuan as $satuan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url ('admin/satuan', $satuan->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('admin/satuan', $satuan->id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$satuan->id}}"/>
                            </div>
                        </td>
                        <td>
                            {{$satuan->nama}}
                        </td>
                        <td>
                            Rp. {{number_format ($satuan->harga_jual)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title ">
                Customer
            </div>
            <a href="{{ url('customer/create') }}" class="btn btn-primary float-right "><i class="fas fa-plus">Tambah Data</i></a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Email</th>
                   
                </thead>
                <tbody>
                    @foreach($list_customer as $customer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        {{-- <td>
                            <div class="btn-group">
                                <a href="{{url ('gudang', $gudang->user_id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('gudang', $gudang->user_id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$gudang->user_id}}"/>
                            </div>
                        </td> --}}
                        <td>
                            {{$customer->id}}
                        </td>
                        <td>
                            {{$customer->name}}
                        </td>
                        <td>
                            {{$customer->email}}
                        </td>
                       
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>

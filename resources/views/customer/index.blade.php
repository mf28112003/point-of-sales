<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title ">
                Customer
            </div>
            <a href="{{ url('admin/customer/create') }}" class="btn btn-primary float-right "><i class="fas fa-plus">Tambah Data</i></a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>user id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                   
                </thead>
                <tbody>
                    @foreach($list_customer as $customer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url ('admin/customer', $customer->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url ('admin/customer', $customer->id)}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{$customer->id}}"/>
                            </div>
                        </td>
                        <td>
                            {{$customer->user_id}}
                        </td>
                        <td>
                            {{$customer->nama}}
                        </td>
                        <td>
                            {{$customer->email_id}}
                        </td>
                        <td>
                            {{$customer->alamat}}
                        </td>
                       
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>

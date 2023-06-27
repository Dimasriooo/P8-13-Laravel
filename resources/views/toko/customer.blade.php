@extends('templet/admin/index')

@section('content')

<h1>Customer</h1>
<a href="{{ route('customer.create') }}" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah Customer</a >

    
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Hp</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php $number = 1;  @endphp
        @foreach($customers as $customer)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->no_hp }}</td>
            <td> 
              <a href="{{ route('customer.edit', $customer) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('customer.destroy', $customer) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>  
            </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
  </table>

@endsection
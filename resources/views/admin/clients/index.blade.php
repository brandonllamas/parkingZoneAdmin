@extends('layouts.admin.index')
@section('title_pag')
    Clientes
@endsection
@section('title')
<h1 class="h3 mb-0 text-gray-800">Clientes</h1>

@endsection
@section('css')

@endsection
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->lastname }}</td>
                                <td>{{ $item->email }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $clientes->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection

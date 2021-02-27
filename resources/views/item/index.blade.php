@extends('adminlte::page')
@section('title', 'Item')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Item </div>
                <div class="card-body">
                    <table class="table ">
                        <thead class="tb-header">
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div class="form-group">
                                        <a href="http://"></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="footer">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <div class="mt-3">
                                <button class="btn btn-primary"><i class="fas fa-plus"></i> Cadastrar</button>
                            </div>
                            <div class="mt-3">
                                {{$items->links()}}
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-danger"><i class="fas fa-archive"></i> Arquivos removidos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
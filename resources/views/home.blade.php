@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center" style="margin-top: 80px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Artículos publicados </h1>
                    <p class="mb-4"> A continuación encontrarás la lista de publicaciones realizadas </p>

                    <div class="card-body">
                        <a href="{{route('create')}}" class="btn btn-warning ">
                            <i class="fas fa-file"></i>
                            Crear nuevo Artículo
                        </a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Artículos </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th> Resumen</th>
                                            <th>Cuerpo </th>
                                            <th> Multimedia </th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Título</th>
                                            <th> Resumen</th>
                                            <th>Cuerpo </th>
                                            <th> Multimedia </th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($articles as $article)
                                        <tr>
                                            <td>{{$article->title}}</td>
                                            <td>{{$article->abst}}</td>
                                            <td>{{$article->body}}</td>
                                            <td>{{$article->mediapath}}</td>
                                            <td>
                                                <form action="{{route('destroy', $article->id) }}" method="POST" class="float-left">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-danger btn-circle float-left"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
    </div>
</div>
@endsection
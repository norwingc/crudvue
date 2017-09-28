@extends('template')

@section('contenido')
    <div id="crud" class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">CRUD Laravel</h1>
            </div>
            <div class="col-sm-7">
                <a href="#" class="btn btn-primary pull-right">Nueva Tarea</a>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th colspan="2">&nbsp;</th>
                        </tr>
                        <tbody>
                            <tr v-for="task in tasks">
                                <td>@{{ task.id }}</td>
                                <td>@{{ task.task }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                                 <td>
                                    <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteTask(task)">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
            <div class="col-sm-5">
                <pre>
                    @{{ $data }}
                </pre>
            </div>
        </div>
    </div>
@endsection

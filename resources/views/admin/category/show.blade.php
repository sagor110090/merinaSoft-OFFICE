@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">Category {{ $category->id }}</div>
        <div class="card-body">

            <a href="#" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> Back</button></a>
            <a href="#" title="Edit category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i> Edit</button></a>

            <form method="POST" id="deleteButton{{$category->id}}" action="#" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete category"
                    onclick="sweetalertDelete({{$category->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <th> category Name </th>
                            <td> {{ $category->name }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
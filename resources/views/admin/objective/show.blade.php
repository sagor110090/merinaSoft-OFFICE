@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">objective {{ $objective->id }}</div>
        <div class="card-body">

            <a href="#" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> Back</button></a>
            <a href="#" title="Edit objective"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i> Edit</button></a>

            <form method="POST" id="deleteButton{{$objective->id}}" action="#" accept-charset="UTF-8"
                style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete objective"
                    onclick="sweetalertDelete({{$objective->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img  width="100px" src="{{ Storage::url($objective->image)}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $objective->id }}</td>
                        </tr>
                        <tr>
                            <th> Header </th>
                            <td> {{ $objective->header }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {{ $objective->description }} </td>
                        </tr>
                        <tr>
                            <th> FCQ </th>
                            <td> {{ $objective->fcq }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection

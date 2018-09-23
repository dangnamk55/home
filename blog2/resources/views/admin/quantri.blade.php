@extends('head')

@section('tittle', 'quản trị')

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($data as $item)
                        <tr class="odd gradeX" align="center">
                            <td>1</td>
                            <td>{!! $item["name"] !!}</td>
                            <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('admin.getDelete',['id'=>$item['id']])}}">Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{route('admin.getEdit',['id'=>$item['id']])}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </div>
            </div>
        </div>
    </div>

    @endsection
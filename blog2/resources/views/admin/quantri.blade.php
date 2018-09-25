@extends('head')

@section('tittle', 'quản trị')

@section('main')

@include('flash::message')

<a class="btn site-btn" href="{{route('admin.add')}}">Add post</a>

<section class="recipes-section spad pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped table-bordered"> <!-- thật vl Nam ko dùng table =)) -->
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
                        <tr class="active" align="center">
                            <td>1</td>
                            <td>{!! $item["name"] !!}</td>
                            <td><i class="fa fa-trash-o fa-fw"></i><a href="{{route('admin.getDelete',['id'=>$item['id']])}}">Delete</a></td>
                            <td><i class="fa fa-pencil fa-fw"></i><a href="{{route('admin.getEdit',['id'=>$item['id']])}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>


    @endsection
@extends('include/base')

@section('content')
    <div class="container flex">
        <div class="w-1/4  p-5 h-screen">
            @include('include/side')
        </div>
        <div class="w-3/4 mt-4">
            <div class="flex px-3 gap-4">
                <div class="w-3/4">
                    <table class="table w-full">
                        <thead class="table-header-group">
                            <tr class="bg-gray-200">
                                <th>Id</th>
                                <th>Asset Type Name</th>
                                <th>Asset Type Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($assetsType as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->assets_type_name}}</td>
                                    <td>{{$item->assets_type_description}}</td>
                                    <td class="flex gap-3">
                                        <form action="{{route('assetsType.destroy',$item)}}" method="post">
                                            @csrf
                                            @method("delete")
                                            <button type="submit" class="bg-red-500 text-white px-2 py-0.5 rounded text-sm hover:bg-red-700">Delete</button>
                                        </form>
                                        <a href="" class="bg-teal-700 text-white px-2 py-0.5 rounded text-sm hover:bg-teal-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
                <div class="w-1/4">
                    <div class="bg-blue-200 p-3 rounded">
                        <form action="{{route('assetsType.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Assets Type Name</label>
                                <input type="text" name="assets_type_name" class="rounded w-full">
                            </div>
                            <div class="mb-3">
                                <label for="">Assets Type Description</label>
                                <textarea  name="assets_type_description" class="rounded w-full"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="bg-green-700 text-white px-3 py-4 rounded w-full">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

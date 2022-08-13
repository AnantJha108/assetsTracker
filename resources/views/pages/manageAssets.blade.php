@extends('include/base')

@section('content')
    <div class="container flex">
        <div class="w-1/4  p-5 h-screen">
            @include('include/side')
        </div>
        <div class="w-3/4 mt-4">
            <div class="flex px-3 gap-4">
                <div class="w-full">
                    <div class="flex justify-between">
                        <h2 class="">Manage Assets</h2>
                        <a href="" class="bg-green-600 text-white px-2 py-1 rounded hover:bg-green-800 mb-3">Add Assets</a>
                    </div>
                    <table class="table w-full">
                        <thead class="table-header-group">
                            <tr class="bg-gray-200">
                                <th>Id</th>
                                <th>Asset Name</th>
                                <th>Asset Code</th>
                                <th>Asset Type</th>
                                <th>Asset Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($assets as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->assets_name}}</td>
                                    <td>{{$item->assets_code}}</td>
                                    <td>{{$item->assets_type}}</td>
                                    <td>{{$item->assets_image}}</td>
                                    <td class="flex gap-3">
                                        <form action="{{route('assets.destroy',$item)}}" method="post">
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
            </div>
        </div>
    </div>
@endsection

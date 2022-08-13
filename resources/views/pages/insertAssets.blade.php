@extends('include/base')

@section('content')
    <div class="w-1/4 mx-auto mt-5">
        <div class="border-gray border-2 p-3 rounded">
            <form action="{{ route('assets.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Assets Name</label>
                    <input type="text" name="asset_name"
                        class="shadow-sm flex-1 border-2 p-2 rounded outline-none focus:border-green-700 w-full ">
                </div>
                <div class="mb-3">
                    <label for="">Assets Code</label>
                    <input type="text" name="asset_code"
                        class="shadow-sm flex-1 border-2 p-2 rounded outline-none focus:border-green-700 w-full ">
                </div>
                {{-- <div class="mb-3">
                    <label for="">Assets Type</label>
                    <select name="assets_type_id" id="" class="shadow-sm flex-1 border-2 p-2 rounded outline-none focus:border-green-700 w-full ">
                        @foreach ($assetsType as $item)
                            <option value="">{{ $item->assets_type_name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                {{-- <div class="mb-3">
                    <label for="">Assets Image</label>
                    <input type="file" name="assets_image"
                        class="shadow-sm flex-1 border-2 p-2 rounded outline-none focus:border-green-700 w-full ">
                </div> --}}
                <div class="mb-3">
                    <input type="submit" class="bg-green-700 text-white px-3 py-4 rounded w-full">
                </div>
            </form>
        </div>
    </div>
@endsection

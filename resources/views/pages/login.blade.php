@extends('include/base')

@section('content')
    <div class="flex bg-gray-500 h-screen place-content-center place-items-center">
        <div class="w-1/4 mx-auto">
            <div class="bg-white rounded p-4">
                <h1 class="font-sans font-semibold">login here</h1>
                <form action="{{route('login.action')}}" method="post">
                    @csrf
                    <div class="flex flex-col my-3">
                        <label for="" class="font-xs text-gray-700">Email</label>
                        <input type="text" name="email" placeholder="Enter email here" class="shadow-sm flex-1 border-2 p-2 rounded outline-none focus:border-green-700 ">
                    </div>
                    <div class="flex flex-col my-3">
                        <label for="" class="font-xs text-gray-700">Password</label>
                        <input type="password" name="password" placeholder="Enter email here" class="shadow-sm flex-1 border-2 p-2 rounded outline-none focus:border-green-700 ">
                    </div>
                    <div class="flex">
                        <input type="submit" value="Login here" class="bg-green-700 flex-1 rounded hover:bg-green-900 px-5 py-4 text-white">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')




@section('content')
    @if(Session::has('success'))
        <div class="bg-green-700 text-center">
            <b >{{session::get('success')}}</b>
        </div>
    @endif
    <div class="max-w-7xl mx-auto">
       <div class="flex space-x-2 justify-end mx-10 mt-10">
          <div>
            <a href="{{ route('registerds.export') }}" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">export</a>
          </div>
        </div>

        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                  @include('Registerd.tabel', $registerds)
              </div>
            </div>
          </div>
        </div>
    </div>

@stop


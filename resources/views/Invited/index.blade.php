@extends('layouts.app')

@section('content')
    @if(Session::has('success'))
        <div class="bg-green-700 text-center">
            <b >{{session::get('success')}}</b>
        </div>
    @endif

    <div class="max-w-xl mx-auto">
       <div class="flex space-x-2 justify-end  my-10">
          <div>
            <a href="{{ route('inviteds.create') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">invite</a>
          </div>
          <div>
            <a href="{{ route('inviteds.export') }}" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">export</a>
          </div>

        </div>
        @include('Invited.tabel', $inviteds)
    </div>
@stop


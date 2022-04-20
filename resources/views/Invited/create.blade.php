@extends('layouts.app')

@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<div class="flex justify-center mt-20">
    <div class="block   p-6 rounded-lg shadow-lg bg-white max-w-sm">
      <form method="POST" action="{{ route('inviteds.store') }}">
        @csrf
        @method('POST')
        <div class="form-group mb-6">
          <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Email to invite</label>
          <input type="email" required name="email" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
            aria-describedby="emailHelp" placeholder="Enter email">
                      
          @error('email')
              <div class="bg-red-700 my-5">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="
          bg-blue-600
          px-6
          py-2.5
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-blue-700 hover:shadow-lg
          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-blue-800 active:shadow-lg
          transition
          duration-150
          ease-in-out">invite</button>
      </form>
    </div>
</div>
@stop


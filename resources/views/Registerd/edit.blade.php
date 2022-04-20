@extends('layouts.app')

@section('content')


<div class="flex justify-center mt-20">
    <div class="block   p-6 rounded-lg shadow-lg bg-white max-w-sm">
      <form method="POST" action="{{ route('registerds.update',$registerd->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-6">
          <label for="exampleInputseatNumber" class="form-label inline-block mb-2 text-gray-700">seatNumber update</label>
          <input type="text" value="{{ $registerd->seat_num }}" required name="seat_num" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputseatNumber"
            aria-describedby="emailHelp" placeholder="Enter email">
                      
          @error('seat_num')
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
          ease-in-out">change</button>
      </form>
    </div>
</div>
@endsection

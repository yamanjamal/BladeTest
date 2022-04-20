<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('inviteds.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">inviteds</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                            
            <div class="flex justify-center mt-20">
                <div class="block   p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    @if(Session::has('error'))
                        <div class="bg-red-700 text-center text-white">
                            <b >{{session::get('error')}}</b>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="bg-green-700 text-center text-white">
                            <b >{{session::get('success')}}</b>
                        </div>
                    @endif
                  <form method="POST" action="{{ route('registerds.store') }}">
                    @csrf
                    @method('Post')
                    <div class="form-group mb-6">
                      <label for="exampleInputname"  class="form-label inline-block mb-2 text-gray-700">name</label>
                      <input type="text" name="name" required class="form-control
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputname"
                        aria-describedby="nameHelp" placeholder="Enter name">
                        @error('name')
                          <div class="text-red-700 my-5">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-6">
                      <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Email address</label>
                      <input type="email" name="email" required class="form-control
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
                          <div class="text-red-700 my-5">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-6">
                      <label for="exampleInputposition" class="form-label inline-block mb-2 text-gray-700">position</label>
                      <input type="text" name="position" required class="form-control
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputposition"
                        aria-describedby="postionHelp" placeholder="Enter postion">
                        @error('postion')
                          <div class="text-red-700 my-5">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-6">
                      <label for="exampleInputside" class="form-label inline-block mb-2 text-gray-700">side</label>
                      <input type="text" name="side" required class="form-control
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputside"
                        aria-describedby="sideHelp" placeholder="Enter side">
                        @error('side')
                          <div class="text-red-700 my-5">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-6">
                      <label for="exampleInputphone" class="form-label inline-block mb-2 text-gray-700">phone</label>
                      <input type="text" name="phone" required class="form-control
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputphone"
                        aria-describedby="phoneHelp" placeholder="Enter phone">
                        @error('phone')
                          <div class="text-red-700 my-5">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-6">
                      <label for="exampleInputquestions" class="form-label inline-block mb-2 text-gray-700">questions</label>
                      <input type="text" name="questions"  class="form-control
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputquestions"
                        aria-describedby="questionsHelp" placeholder="Enter questions">
                        @error('questions')
                          <div class="text-red-700 my-5">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="
                      px-6
                      py-2.5
                      bg-blue-600
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
                      ease-in-out">register</button>
                  </form>
                </div>
            </div>

        <script src="https://cdn-tailwindcss.vercel.app/"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>        
        <script type="text/javascript">
  
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
        </script>
    </body>
</html>

<table class="min-w-full" id="myTable">
  <thead class="border-b">
    <tr>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        #id
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        name
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        postion
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        side
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        email
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        phone
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        questions
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        seatNumber
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        controles
      </th>
    </tr>
  </thead>
  <tbody>
    @if(isset($registerds))
        @foreach($registerds as $register)
            <tr class="border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->id}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->name}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->position}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->side}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->email}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->phone}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->questions}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$register->seat_num}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <div>
                  <a href="{{ route('registerds.edit',$register->id) }}" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight  rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">updateSeatNum</a>
                </div>
              </td>
            </tr>
        @endforeach
    @endif
  </tbody>
</table>
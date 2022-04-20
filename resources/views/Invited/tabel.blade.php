<table class="min-w-full " id="myTable">
  <thead class="border-b">
    <tr>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        email
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        invite time
      </th>
      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        confermation
      </th>
    </tr>
  </thead>
  <tbody>
    @if(isset($inviteds))
        @foreach($inviteds as $invited)
            <tr class="border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$invited->email}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$invited->created_at}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @if ($invited->confirmed)
                  confermid
                @else
                  not confermid
                @endif
              </td>
            </tr>
        @endforeach
    @endif
  </tbody>
</table>

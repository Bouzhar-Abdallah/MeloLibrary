<link href="{{ asset('./style.css') }}" rel="stylesheet">
<div class="w-1/3 mx-auto">
  <!--  -->

  @foreach ($listTodos as $todo)
  <div class="flow-root mt-6 mb-4">
    <ul role="list" class="-my-5 divide-y divide-gray-200">
      <li class="py-4">
        <div class="flex items-center space-x-4">

          <div class="flex-1 min-w-0">
            <p class="text-sm font-medium text-gray-900 truncate">
              {{ $todo->todo }}
            </p>

          </div>
          <div>
            @if($todo->isdone)
            <form action="{{ route('delete', $todo->id) }}" method="post">
              {{csrf_field()}}
              <button class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-200 text-sm leading-5 font-medium rounded-full text-gray-700 hover:bg-red-500 hover:bg-red-20 transition-all">
                delete
              </button>
            </form>
            @else
            <form action="{{ route('markComplete', $todo->id) }}" method="post">
              {{csrf_field()}}
              <button class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white transition-all hover:bg-green-500">
                Mark as done
              </button>
            </form>
            @endif
          </div>
        </div>
      </li>



    </ul>
  </div>
  @endforeach
  <!--  -->
  <form action="{{ route('saveItem') }}" method="post" class="mt-4">
    {{csrf_field()}}
    <input class=" border w-full p-2" placeholder="new todo" type="text" name="todo" id="">

    <div class="mt-6">
      <button class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
        Add new

      </button>
    </div>
  </form>
</div>
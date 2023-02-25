<!-- This example requires Tailwind CSS v2.0+ -->
<div>
  <div class="flow-root mt-3">
  <div class="w-full flex justify-center items-center mb-3">
    
    <h1 class="">{{$name}}</h1>
  </div>  
  <div class="mb-6 mt-2 mx-5">
            <a href="#" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> View all </a>
        </div>
    <ul role="list" class="-my-5 divide-y divide-gray-200 py-2">
@foreach ($options as $option)
  
<li class="py-4 px-3">
  <div class="flex items-center space-x-4">
    <div class="flex-shrink-0">
      <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
    </div>
    <div class="flex-1 min-w-0">
      <p class="text-sm font-medium text-gray-900 truncate">{{$option->name}}</p>
      <p class="text-sm text-gray-500 truncate">total songs: {{$option->songs_count}} </p>
    </div>
    <div>
      <a href="#" class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50"> View </a>
    </div>
  </div>
</li>
@endforeach


</ul>

  </div>

</div>

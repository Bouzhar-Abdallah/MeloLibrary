
<x-modal form-action="{{ route('save.new.artist', ['id' => $artist->id]) }}">
    <x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
    @csrf
    <div class="mt-4">
      <x-input-label for="name" :value="__('name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$artist->name" required autocomplete="username" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="country" :value="__('country')" />
      <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="$artist->country" required autocomplete="username" />
      <x-input-error :messages="$errors->get('country')" class="mt-2" />
    </div>
    <div class="mt-4">
      <x-input-label for="date_of_birth" :value="__('date_of_birth')" />
      <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="$artist->date_of_birth" required autocomplete="username" />
      <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
    </div>
    <div class="mt-4 flex gap-5">
      <div class="h-12 w-12 bg-red-500">
        <img class="h-12 w-12" src="{{ $artist->cover_url }}" alt="">
      </div>
      <div class="">
        <input type="file" name="cover" id="">
        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
      </div>
    </div>
    
    </x-slot>

    <x-slot name="buttons">
    <div class="mt-5 mx-auto">
      <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" role="submit">Save</button>
    </div>
    </x-slot>
</x-modal> 
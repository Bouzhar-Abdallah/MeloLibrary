<span class="mt-4">
<label class="" for="{{ $name }}[]" class="sr-only"> {{ $name}}s </label></span>
<select multiple id="{{ $name }}" name="{{ $name }}[]" class="block px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
    
    @foreach ($options as $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>
    @endforeach
</select>

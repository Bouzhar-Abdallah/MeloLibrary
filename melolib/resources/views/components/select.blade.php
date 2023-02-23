<div class="">
<label class="" for="{{ $name }}[]" class="sr-only"> {{ $label}}s 
    <span class="text-xs font-thin text-gray-400">selection multiple</span>
</label>
<select multiple id="{{ $name }}" name="{{ $name }}[]" class="bg-white border block px-2 w-full text-sm text-gray-500 bg-transparent appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
    
    @foreach ($options as $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>
    @endforeach
</select>
</div>

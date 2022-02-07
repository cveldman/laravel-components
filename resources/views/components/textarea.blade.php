<div class="form-group">
    <x-label :for="$name" :label="$label"></x-label>

    <div class="mt-1">
        <textarea name="{{ $name }}" id="{{ $name }}" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $value }}</textarea>
    </div>

    <x-error :name="$name"></x-error>
</div>
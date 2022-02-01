<div>
    <x-label :for="$name">{{ $label }}</x-label>

    <div class="mt-1">
        <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
    </div>

    <x-error :name="$name"></x-error>
</div>

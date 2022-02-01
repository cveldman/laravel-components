<div>
    <x-label :for="$name">{{ $label }}</x-label>

    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}">
    </div>

    <x-error :name="$name"></x-error>
</div>

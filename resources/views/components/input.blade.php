<div class="form-group">
    <x-label :for="$name" :label="$label"></x-label>

    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" value="{{ $value }}">

    <x-error :name="$name"></x-error>
</div>
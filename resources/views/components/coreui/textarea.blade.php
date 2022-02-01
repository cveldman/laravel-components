<div class="form-group">
    <x-label :for="$name" :label="$label"></x-label>

    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" rows="3">
        {{ $value }}
    </textarea>

    <x-error :name="$name"></x-error>
</div>
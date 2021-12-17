<div class="form-group">
    <x-label :for="$name" :label="$label"></x-label>

    <select name="{{ $name }}"  class="form-control @error($name) is-invalid @enderror" id="{{ $name }}">
        @foreach($options as $k => $v)
            <option value="{{ $k }}" @if($k == $value) selected @endif>{{ $v }}</option>
        @endforeach
    </select>

    <x-error :name="$name"></x-error>
</div>
<div class="form-group">
    <x-label :for="$name" :label="$label"></x-label>

    <select name="{{ $name }}" id="{{ $name }}" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        @foreach($options as $k => $v)
            <option value="{{ $k }}" @if($k == $value) selected @endif>{{ $v }}</option>
        @endforeach
    </select>

    <x-error :name="$name"></x-error>
</div>
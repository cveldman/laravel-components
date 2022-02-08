<form action="{{ $action }}" method="{{ $method == 'get' ? 'get' : 'post' }}">
    @method($method)

    @if($method != 'get)
        @csrf
    @endif

    {{ $slot }}
</form>

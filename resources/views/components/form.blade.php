<form action="{{ $action }}" method="{{ $method == 'get' ? 'get' : 'post' }}">
    @csrf
    @method($method)

    {{ $slot }}
</form>
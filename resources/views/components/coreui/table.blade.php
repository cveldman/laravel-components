<table {{ $attributes->merge(['class' => 'table']) }}>
    <thead>
        <tr>
            @foreach($columns as $column)
                <th scope="col">{{ __($column) }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
@extends('layouts.admin')

@section('content')

    <main>
        <div class="py-6">
            <div class="mx-auto px-4 sm:px-6 md:px-8">
                <x-input type="text" name="name"></x-input>

                <x-textarea type="text" name="name"></x-textarea>

                <x-select type="text" name="name" :options="['optie 1', 'optie 2', 'optie 3']"></x-select>
            </div>
        </div>
    </main>

@endsection

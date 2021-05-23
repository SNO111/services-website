@extends('app')

@section('main')

<div class="w-full p-6 flex">
    @if ($template->exists)
        <form class="flex flex-col w-full" method="POST" action="{{ route('template.update', $template) }}">
            @method('PUT')      
    @else
        <form class="flex flex-col w-full" method="POST" action="{{ route('template.store', $template) }}">
    @endif
        @csrf
        <div class="flex w-full">
            {{-- form input element --}}
            <div class="flex flex-wrap mb-6 w-1/3">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $template->name) }}"
                class="text-base font-mono shadow appearance-none border rounded 
                w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline 
                @error('name') border-red-500 @enderror">
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                @enderror
            </div>
        </div>
        {{-- form input element --}}
            <div class="flex flex-wrap mb-6 w-1/3">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <input type="text" name="description" id="description" value="{{ old('description', $template->description)}}"
                class="text-base font-mono shadow appearance-none border rounded 
                w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline 
                @error('description') border-red-500 @enderror">
                @error('description')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                @enderror           
            </div>

            <button class="positive-button">Save</button>

        </form>  
</div>
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-400 leading-tight text-center" >
            {{ __('Shuhrat.test | Control panel') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                @livewire('blog.create')
            </div>
            <div class="col-md-8">
                @livewire('blog.index')
            </div>
        </div>
    </div>
</x-app-layout>

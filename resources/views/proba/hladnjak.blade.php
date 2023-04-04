<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Open Sans'">
            Hladnjak
        </h2>
    </x-slot>

    <div class="py-12" style=" background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.5)">
                @livewire('hladnjak-live', ['content' => $content])
            </div>
            <div style="text-align:center">
                <a href="/hladnjak/create" class="btn btn-primary btn-rounded" style = 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; text-align:center; width:250px; font-size:20px'> + Dodaj novu namirnicu</a>
            </div>

        </div>
    </div>
</x-app-layout>

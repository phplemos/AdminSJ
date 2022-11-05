<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('INVENTARIO') }}
            </h2>

        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("Novo Inventario")  }}

        <div class="container">
            <p>OLA ESSE É O INVENTARIO NUMERO:{{$fk_inventario}} </p>
        </div>
    </div>
</x-app-layout>

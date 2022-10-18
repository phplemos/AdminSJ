<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/inventario" method="post">
                        @csrf
                        <input type="text" name="nome_item" id="nome_item" placeholder="Nome Item">
                        <input type="text" name="descricao_item", id="descricao_item" placeholder="Descrilção Item">
                        <input type="text" name="quantidade_item" id="quantidade_item" placeholder="Quantidade Item">
                        <input type="text" name="img_item" id="img" placeholder="Imagem Item">
                        <button type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

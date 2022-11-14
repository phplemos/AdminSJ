<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('INVENTARIO') }}
            </h2>

        </div>
    </x-slot>

    <div class="flex-shrink-0 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="container">
            <div class="flex flex-col p-2">
                <!-- This is an example component -->
                @if (session('message'))
                    <p>{{ session('message') }} </p>
                @endif
                <div class="overflow-x-auto shadow-md rounded-lg">

                    <div class="flex flex-col">
                        <div>
                            <form class="flex flex-row p-4" action="{{ route('item.store') }} " method="POST">
                                @csrf
                                <input type="hidden" name="fk_inventario" id="fk_inventario" value="{{$fk_inventario}}">
                                <div class="flex p-3">
                                    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <h1>Categorias:</h1>
                                    </div>
                                </div>
                                <div class="px-6">
                                    <select name="fk_categoria"
                                        class="form-select rounded-lg dark:bg-gray-700 dark:text-gray-400"
                                        aria-label="Default select example">
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->nome_categoria }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- INICIO MODAL -->

                                <button
                                    class="block bg-green-500 text-white hover:bg-green-600 hover:text-gray-700 rounded-lg focus:ring-green-500 dark:bg-green-500 dark:text-white-400 dark:focus:ring-blue-800"
                                    type="button" data-modal-toggle="popup-modal">
                                    <p class="px-2">Novo Item</p>
                                </button>

                                <div id="popup-modal" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center"
                                    aria-hidden="true">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-toggle="popup-modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only"></span>
                                            </button>

                                            <div class="p-6 text-center">
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="nome_item">Nome Item</label>
                                                        <input
                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                            id="nome_item" name="nome_item" type="text"
                                                            placeholder="Nome item">
                                                        <p class="text-red-500 text-xs italic">Obrigatório*</p>
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="quantidade_item">Quantidade Item</label>
                                                        <input
                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                            id="quantidade_item" name="quantidade_item" type="number"
                                                            placeholder="Quantidade item">
                                                        <p class="text-red-500 text-xs italic">Obrigatório*</p>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                    <div class="w-full px-3">
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="descricao_item">
                                                            Descrição item
                                                        </label>
                                                        <input
                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            id="descricao_item" name="descricao_item"type="text"
                                                            placeholder="Descrição do item">
                                                        <p class="text-gray-600 text-xs italic">Seja o mais objetivo
                                                            possível</p>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                    <div class="w-full px-3">
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="img_item">
                                                            Imagem item
                                                        </label>
                                                        <input
                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            id="img_item" name="img_item" type="link"
                                                            placeholder="Imagem do item">
                                                    </div>
                                                </div>

                                                <div class="flex justify-end">
                                                    <div class="px-2">
                                                        <button data-modal-toggle="popup-modal" type="button"
                                                            class="flex text-white bg-red-500 text-white hover:bg-red-600 focus:ring-red-500 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-red-800 dark:border-red-700 hover:bg-red-600 dark:hover:bg-red-600">Cancelar</button>
                                                    </div>
                                                    <div class="px-2">
                                                        <button data-modal-toggle="popup-modal" type="submit"
                                                            class="fflex text-white bg-green-500 text-white hover:bg-green-600 focus:ring-red-500 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-green-800 dark:border-green-700 hover:bg-green-600 dark:hover:bg-green-600">
                                                            <p>Cadastrar Item</p>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- FIM MODAL -->
                            </form>
                        </div>
                        <div class="p-4">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            Nome:
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Categoria:
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Descrição:
                                        </th>
                                        <th scope="col" class="text-center px-6 py-3">
                                            Quantidade:
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Imagem:
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($itens as $item)
                                        <tr
                                            class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                {{ $item->nome_item }}
                                            </td>
                                            <th scope="row" class="w-4 p-4">
                                                {{-- {{ $categorias[$item->fk_categoria]->nome_categoria }} --}}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $item->descricao_item }}
                                            </td>
                                            <td scope="px-4 py-4">
                                                    {{ $item->quantidade_item }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->img_item }}
                                            </td>
                                            <td>
                                                {{-- <form action="{{ route('inventario.show', $inventario->id) }}"
                                                    method="GET">
                                                    <input type="hidden" name="id"
                                                        value="{{ $inventario->id }}">
                                                    <button
                                                        class="bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-500"
                                                        type="submit">Visualizar</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('INVENTARIO') }}
            </h2>

        </div>
    </x-slot>

    <div class="flex-shrink-0 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __('Novo Inventario') }}
        <p>{{ $fk_inventario }} </p>
        <div class="container">
            <!-- This is an example component -->
            <div class="max-w-2xl mx-auto">

                <div class="relative overflow-x-auto shadow-md rounded-lg">
                    <div class="p-4">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <input type="text" id="table-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                        <div class="flex justify">
                            <!-- Button trigger modal -->
                            <button type="button"
                                class="bg-green-500 text-white hover:bg-green-600 focus:ring-green-500"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Launch static backdrop modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog relative w-auto pointer-events-none">
                                    <div
                                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800"
                                                id="exampleModalLabel">
                                                Modal title
                                            </h5>
                                            <button type="button"
                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            ...
                                        </div>
                                        <div
                                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="button"
                                                class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button"
                                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <table class="flex-shrink-0 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nome do Item:
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descrição do Item:
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categoria do Item:
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Imagem do Item:
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ações:
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($itens as $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $item->nome_item }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->descricao_item }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->fk_categoria }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->img_item }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
            </div>
        </div>
    </div>
</x-app-layout>

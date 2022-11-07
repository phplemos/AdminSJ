<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('INVENTARIO') }}
            </h2>

        </div>
    </x-slot>


    <div class="flex flex-col p-2  bg-white rounded-lg shadow-md dark:bg-dark-eval-1 ">
        <!-- This is an example component -->
        @if(session('message'))
        <p>{{session('message')}} </p>
        @endif
        <div class="max-w-2xl mx-auto">

            <div class="relative overflow-x-auto shadow-md rounded-lg">
                <div class="p-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <input type="text" id="table-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items">
                    </div>

                </div>


                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                Id:
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Setor:
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Criado em:
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ações:
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventarios as $inventario)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    {{ $inventario->id }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    Ver nome setor
                                </th>
                                <td class="px-6 py-4">
                                    {{ $inventario->created_at }}
                                </td>
                                <td class="px-6 py-4">

                                    <form action="/inventario/{{$inventario->id}}" method="GET">
                                        <button class="bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-500" type="submit">Visualizar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
        </div>
    </div>
</x-app-layout>

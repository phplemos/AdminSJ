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
        @if (session('message'))
            <p>{{ session('message') }} </p>
        @endif
        <div class="overflow-x-auto shadow-md rounded-lg"">

            <div class="flex flex-col">

                <div class="flex flex-row">
                    <form action="{{ route('inventario.store') }} " method="POST">
                        @csrf
                        <div class="flex flex-nowrap">
                            <select name="fk_setor" class="form-select rounded-lg" aria-label="Default select example">
                                @foreach ($setores as $setor)
                                <option value="{{$setor->id}}">{{$setor->nome_setor}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-nowrap">
                            <x-button variant="success"> Novo Inventario</x-button>
                        </div>
                    </form>
                </div>
                <div class="p-4">
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
                                        {{$setores[($inventario->fk_setor+1)]->nome_setor}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $inventario->created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('inventario.show', $inventario->id) }}" method="GET">
                                            <input type="hidden" name="id" value="{{ $inventario->id }}">
                                            <button
                                                class="bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-500"
                                                type="submit">Visualizar</button>
                                        </form>
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
</x-app-layout>

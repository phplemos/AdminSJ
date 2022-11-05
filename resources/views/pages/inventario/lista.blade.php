<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('INVENTARIO') }}
            </h2>

        </div>
    </x-slot>


    <div class="flex flex-col p-2  bg-white rounded-lg shadow-md dark:bg-dark-eval-1 ">
        <div class="bg-blue-100 rounded-lg py-5 px-6 mb-3 text-base text-blue-700 inline-flex items-center w-full"
            role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle"
                class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                </path>
            </svg>
            A simple primary alert - check it out!
        </div>

        <div class="flex flex-row justify-center">

            <h2 class="text-4xl font-medium leading-tight text-gray-800">
                Selecione o setor:

            </h2>

            <div class=" px-4 mb-3 xl:w-96">
                <form method="POST" action="{{route('inventario.store')}}">
                    @csrf
                    <select name="fk_setor" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        @foreach ($lista as $setor)
                            <option value="{{ $setor->id }}">{{ $setor->nome_setor }}</option>
                        @endforeach
                    </select>
                    <button type="submit" >x</button>
                </form>
            </div>



        </div>
        <div class="flex flex-col">
            <div class="overflow-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b bg-gray-800 boder-gray-900 dark:bg-dark-eval-1 ">
                                <tr>
                                    <th scope="col"
                                        class="text-sm font-medium text-white px-6 py-4 text-left dark:bg-dark-eval-1 ">
                                        Id:
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-white px-6 py-4 text-left dark:bg-dark-eval-1">
                                        Setor:
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-white px-6 py-4 text-left dark:bg-dark-eval-1">
                                        Criado em:
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-white px-6 py-4 text-left dark:bg-dark-eval-1">
                                        Ação:
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventarios as $inventario)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $inventario->id }}</td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $inventario->fk_setor}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $inventario->created_at }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <x-button variant="danger">X</x-button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>

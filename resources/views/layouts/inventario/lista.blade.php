<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="container-fluid text-center">

        <div class="row">
            <div class="py-12">
                <div class="col col-md-auto">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="container align-self-center">
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ __('Lista de Inventários') }}
                            </h1>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-fluid">

                        <div class="row">
                            <!-- ATIVAR FUNCIONALIDADE DE SELEÇÃO DO SETOR -->
                            <form method="post" action="{{ route('inventario.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col col-4">
                                        <div class="col align-self-center">
                                            <label for="selecao_setor" class="form-label">Selecione o
                                                setor:</label>
                                            <select id="selecao_setor" class="form-select" id="fk_setor"
                                                name="fk_setor">
                                                @foreach ($lista as $setor)
                                                    <option name="fk_setor" value="{{ $setor->id }}">
                                                        {{ $setor->nome_setor }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-8">
                                        <div class="col align-self-center">
                                            <p>Opções:</p>
                                            <button type="submit" class="btn btn-warning"> Novo
                                                Inventário</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- MODAL PARA CADASTRO DE ITEM -->

                        <!-- FINAL MODAL CADASTRO ITEM -->

                    </div>
                </div>
            </div>
        </div>



        </div class="row">
            <div class="col">
                    <div class="col col-md-auto">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id:</th>
                                    <th scope="col">Criado por:</th>
                                    <th scope="col">Data Criação:</th>
                                    <th scope="col">Ação:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($inventarios as $inventario)
                                    <tr>
                                        <th scope="row">{{ $inventario->id }}</th>
                                        <td>{{ $inventario->fk_setor }}</td>
                                        <td>{{ $inventario->created_at }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-warning">Visualizar</button>
                                            <button type="submit" class="btn btn-warning">Editar</button>
                                            <button type="submit" class="btn btn-warning">Excluir</button>
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

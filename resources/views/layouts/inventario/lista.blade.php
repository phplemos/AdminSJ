<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container align-self-center">
                <h4 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Lista de Inventários') }}
                </h4>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="container">
                    <div class="row">
                        <div class="col align-self-center">
                            <label for="selecao_setor" class="form-label">Selecione o setor:</label>
                            <select id="selecao_setor" class="form-select">
                                <option selected>Selecione...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col align-self-center">
                            <p>Opções:</p>
                            <form for="/inventario/novo">
                                <button type="submit" class="btn btn-warning"> Novo Inventário</button>
                            </form>
                        </div>
                    </div>
                    <!-- MODAL PARA CADASTRO DE ITEM -->

                    <!-- FINAL MODAL CADASTRO ITEM -->

                </div>
                <div class="content ">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <button type="submit" class="btn btn-warning">Visualizar</button>
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                    <button type="submit" class="btn btn-warning">Excluir</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>
                                    <button type="submit" class="btn btn-warning">Visualizar</button>
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                    <button type="submit" class="btn btn-warning">Excluir</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

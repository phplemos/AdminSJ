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
                    {{ __('Cadastro de itens') }}
                </h4>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="container">
                    <div class="row">
                        {{-- <div class="col align-self-center">
                            <label for="selecao_setor" class="form-label">Selecione o setor:</label>
                            <select id="selecao_setor" class="form-select">
                                <option selected>Selecione...</option>
                                <option>...</option>
                            </select>
                        </div> --}}
                        <div class="col align-self-center">
                            <h1>Itens já inseridos:</h1>

                        </div>
                        <div class="col align-self-center">

                            <!-- MODAL PARA CADASTRO DE ITEM -->

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success text-seconday bg-success"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Adicionar novo item </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Inserir item</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="py-12">
                                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                                        <div class="container ">
                                                            <form class="row g-3" action="/cadastro/item" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="fk_inventario" id="{{$fk_inventario}}">
                                                                <div class="col-md-6">
                                                                    <label for="nome_item" class="form-label">Nome do
                                                                        Item</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nome_item" id="nome_item">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="quantidade_item"
                                                                        class="form-label">Quantidade</label>
                                                                    <input type="text" class="form-control"
                                                                        id="quantidade_item" name="quantidade_item">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="descricao_item"
                                                                        class="form-label">Descrição do item</label>
                                                                    <input type="text" class="form-control"
                                                                        id="descricao_item" name="descricao_item">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="img_item"
                                                                        class="form-label">Imagem</label>
                                                                    <input type="file" class="form-control"
                                                                        id="img_item" name="img_item"
                                                                        placeholder="1234 Main St">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="inputState"
                                                                        class="form-label">Categoria</label>
                                                                    <select id="inputState" class="form-select" id="fk_categoria" name="fk_categoria">
                                                                        <option >Selecione...</option>
                                                                        <option >...</option>
                                                                    </select>
                                                                </div>
                                                                <button type="submit"
                                                class="btn btn-success text-seconday bg-success">Inserir</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger text-seconday bg-danger"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FINAL MODAL CADASTRO ITEM -->


                        </div>
                    </div>

                </div>
                <div class="content ">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id:</th>
                                <th scope="col">Nome:</th>
                                <th scope="col">Descrição:</th>
                                <th scope="col">Quantidade:</th>
                                <th scope="col">Categoria:</th>
                                <th scope="col">Imagem:</th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Bro</td>
                                <td>caraio caraio</td>
                                <td>caraio.png</td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>Larry the Bird</td>
                                <td>
                                    <h1>funcionou pagina nova</h1>
                                </td>
                                <td>ta porra meno</td>
                                <td>caraio</td>
                                <td>caraio.jgp</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

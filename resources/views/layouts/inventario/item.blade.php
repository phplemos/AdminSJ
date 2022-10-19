<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Item') }}
        </h2>
    </x-slot>

    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container ">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="nome_item" class="form-label">Nome do Item</label>
                            <input type="text" class="form-control" name="nome_item" id="nome_item">
                        </div>
                        <div class="col-md-6">
                            <label for="quantidade_item" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade_item" name="quantidade_item">
                        </div>
                        <div class="col-md-12">
                            <label for="descricao_item" class="form-label">Descrição do item</label>
                            <input type="text" class="form-control" id="descricao_item" name="descricao_item">
                        </div>
                        <div class="col-md-2 mx-4 ">
                            <label for="img_item" class="form-label">Imagem</label>
                            <input type="file" class="form-control" id="img_item" name="img_item"
                                placeholder="1234 Main St">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Categoria</label>
                            <select id="inputState" class="form-select">
                                <option selected>Selecione...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check">
                                <button type="submit" class="btn btn-success text-seconday bg-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

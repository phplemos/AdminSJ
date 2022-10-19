<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>



    <div class="container">
        <div class="container-md-4">
            <div class="md-4">
          <label for="selecao_setor" class="form-label">Setor</label>
          <select id="selecao_setor" class="form-select">
            <option selected>Selecione...</option>
            <option>...</option>
          </select>
        </div>
        </div>
    </div>
    <div class="content ">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Data Criação</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <button type="submit" class="btn">Editar</button>
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
</x-app-layout>

# Painel Administrativo São José
> Painel contendo ferramentas para melhorar o cotidiano das lojas do grupo

O projeto deu-se inicio ao observar que havia algumas coisas que poderiam ser automatizada no meu ambiente de trabalho. Me chamo Pedro sou aux. Téc. em informática de um grupo de padaria da minha cidade, atualmente curso Sistemas de Informação e a partir disso, surgiu o interesse em desenvolver esse projeto

## Requisitos
```shell
Apache 2.4+
Php 8.1+ 
Mysql 
Node 17+
```

## Instalando / Iniciando o projeto

O projeto foi desenvolvido utilizando o Laravel 9.x, Mysql, Breeze e Bootstrap4.
Para iniciar o projeto em sua maquina basta seguir os passos a seguir.
### 1º
Renomear o arquivo "default-env" Para ".env" e acrescentar as informações do banco de dados.
### 2º
```shell

composer install
npm install
npm run build
composer dump-autoload
php artisan key:generate
php artisan migrate 
php artisan migrate:fresh --seed

```

## Atualizações Sobre o Projeto

02/11/2022 - "Andei estudando um pouco de html e css para começar a ter mais noção de como aplicar templates, começando a configurar o layout decidi usar o template Material-Kit da Creative Tim, consegui aplicar, agora vou começar a aplicar as funcionalidades, a rota "/inventario" ja está listando os inventarios criados e nomeando o setor que é originário";

05/11/2022 - "Passaram 3 dias estudando um pouco mais sobre o tailwindCss para poder ter mais noção de posicionamento de divs na tela, apesar de meu foco ser como a engrenagem do projeto vai ser articulada, estou tendo que aprender um pouco de front e javascript("Pensando ate em aprender um pouco sobre nodeJS"), decidi usar o tema kamonaUI ou KUI de Ahmed Kamel(git/Kamona-WD), consegui recriar a tela de inventario porem tiver que encerar o dia";

06/11/2022 - "Após finalizar alguns ajustes na tela de inventario e organizar as rotas direcionando após criar um novo inventario ele direciona para a pagina do inventario listando todos os itens, estou tendo dificuldades em encontrar algumas respostas sobre o Eloquent, metodos que posso usar encadeado com a classes e afins, mas estou pesquisando e aprendendo bastate, meu objetivo é ainda no dia 07/11/2022 adicionar a funcionalidade de inserir item";

07/11/2022 - "Hoje no trabalho consegui corrigir o endereçamento dos inventarios por ID diretamente na rota utilizando o metodo show agregado com a classe Route::resource(), direcionando para a rota atraves da URI";

08/11/2022 - "Hoje apesar da correria do dia, consegui fazer algumas alterações, criei Seeders para facilitar o manuseio e teste, ainda algumas duvidas sobre as rotas, mas estou pesquisando sobre, até entao a funcionalidade de criar um inventario e visualizar 
o inventario que desejar da lista estão funcionando, a medida que estudo mais um poucom vou corrigindo falhas que percebo";

10/11/2022 - "A semana foi corrida, nao deu pra mexer direito no projeto, mas hoje colocarei as funcionalidade de enviar um item ao inventario";

### Initial Configuration
 
Pelo Projeto ser recente, ainda falta algumas informações que ao decorrer do desenvolvimento estarei publicando e atualizando o README.md


## Licensing

The code in this project is licensed under MIT license.

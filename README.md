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

02/11/2022 - "Andei estudando um pouco de html e css para começar a ter mais noção de como aplicar templates, começando a configurar o layout decidi usar o template Material-Kit da Creative Tim, consegui aplicar, agora vou começar a aplicar as funcionalidades, a rota "/inventario" ja está listando os inventarios criados e nomeando o setor que é originário."

### Initial Configuration
 
Pelo Projeto ser recente, ainda falta algumas informações que ao decorrer do desenvolvimento estarei publicando e atualizando o README.md


## Licensing

The code in this project is licensed under MIT license.

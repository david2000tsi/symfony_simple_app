# Symfony simple app

Essa é uma aplicação básica usando Symfony framework. Tem apenas dois formulários:

## Contatos

Formulário simples utilizando a estrutura de formulários do Symfony.

## Endereços

Formulário simples com html.

# Intruções

Você necessitará de ter instalado em seu computador o PHP, MySQL, Composer e Symfony.

Não esquecer de alterar os dados de coneção com o banco de dados no arquivo '.env':

Abra um terminal, navegue para dentro do diretório do projeto e execute os seguintes comandos:

Atualizar as dependências do projeto:

```
composer update
```

Gerar e popular o banco de dados:

```
bin/console doctrine:database:create
bin/console doctrine:migration:migrate
```

Iniciar um servidor local (acesse o navegador com o endereço informado, por exemplo: 127.0.0.1:8000):

```
symfony serve --no-tls
```

Testado no linux usando:

```
PHP 7.3.2
Composer 1.6.3
Symfony 4.5.3
MySQL 5.7.24
```

## A implementar

Implementar validações para os formulários!

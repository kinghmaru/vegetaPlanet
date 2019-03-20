# Sobre o projeto:
Trata-se de uma aplicação que "simula" o planeta Vegeta da série de anime/mangá Dragon Ball, no qual é possível cadastrar novos saiyajins, editar informações dos saiyajins cadastrados e excluir saiyajins. A aplicação lista os saiyajins existentes no planeta Vegeta, onde será possível fazer qualquer ação das citadas anteriormente.

# Instruções para execução em ambiente local:

## 1 - Instalar dependências do projeto
Após baixar o projeto e instalá-lo, acesse a pasta do projeto pelo terminal e digite:
```
composer install
```
## 2 - Criar arquivo de ambiente
```
cp .env.example .env
```
## 3 - Gerar chave de aplicação
```php
php artisan key:generate
```
## 4 - Criar banco de dados
Crie um banco de dados para a aplicação no postgresql

## 5 - Editar o arquivo .env com as credenciais do banco de dados
Agora, você deve editar o arquivo .env de acordo com suas variáveis para configurar as credenciais.
```
DB_CONNECTION=postgres
DB_HOST=127.0.0.1
DB_PORT=porta, geralmente é 5432
DB_DATABASE=banco de dados que foi criado anteriormente
DB_USERNAME=username do seu banco de dados postgre
DB_PASSWORD=senha do banco de dados
```
## 6 - Criar as tabelas do banco de dados
```php
php artisan migrate
```
## 7 - Executar a aplicação
```php 
php artisan serve
```

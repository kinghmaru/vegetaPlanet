Sobre o projeto:
	Trata-se de uma aplicação que "simula" o planeta Vegeta da série de anime/mangá Dragon 		Ball, no qual é possível cadastrar novos saiyajins, editar informações dos saiyajins 		cadastrados e excluir saiyajins. A aplicação lista os saiyajins existentes no planeta 		Vegeta, onde será possível fazer qualquer ação das citadas anteriormente.

Itens do item 1 que foram implementados:

	A -> Fazer uma aplicação utilizando PHP usando o Framework Laravel

	B -> Utilizar persistência em um banco de dados PostgreSQL

	C -> Utilizar Eloquent ORM

	D -> Utilizar Bootstrap 4

#Instruções para execução em ambiente local:

    ##1 - Instalar dependências do projeto
    Após baixar o projeto e instalá-lo, acesse a pasta do projeto pelo terminal e digite:
    composer install
    
    ##2 - Criar arquivo de ambiente
    cp .env.example .env
    
    ##3 - Gerar chave de aplicação
    ```php
    php artisan key:generate
    ```
    ##4 - Criar banco de dados
    Crie um banco de dados para a aplicação
    
    ##5 - Editar o arquivo .env com as credenciais do banco de dados
    Agora, você deve edidtar o arquivo .env para configurar as credenciais.
    DB_CONNECTION=
    DB_HOST=
    DB_PORT=
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
    
    ##6 - Criar as tabelas do banco de dados
    ```php
    php artisan migrate
    ```
    ##7 - Executar a aplicação
    ```php 
    php artisan serve
    ```



## Sobre Este Simples CRUD

Esta é uma simples aplicação web desenvolvido usando o Laravel, demostrando uma simples operação CRUD.
Apesar da sua simplicidade, ele demostra vários aspectos fundamentais do framework, a saber:

- [Roteamento](https://laravel.com/docs/routing).
- Sessão[session](https://laravel.com/docs/session).
- Base de dados [database ORM](https://laravel.com/docs/eloquent).
- Migração [schema migrations](https://laravel.com/docs/migrations).
- Herança de Templates com Blade


## Instalação

Se você quiser pôr este projecto a correr, sem mais demora, segue os seguintes passos:

1. Cópia o repositório para o teu computador
	git clone https://github.com/heidy-miguel/crud-simples-com-laravel-8.git 
2. Instala as dependências do projecto usando o composer
	**composer install
3. Cria uma base de dados com um nome ao teu gosto.
4. Edita o ficheiro '.env.exemple', na linha 12, escreve o nome da base de dados que você escolheu e salva o ficheiro com o nome .env
5. Cria as tabelas necessárias usando o comando para migração
	**php artisan migrate
6. Insere dados ficticios na base de dados
	**php artisan db:seed
7. Ponha o projecto a correr
	**php artisan serve 


## Colaboração

Por ser um CRUD bastante simples, podes adicionar a funcionalidade que desejares e fazer um pull request.
Algumas funcionalidades que podem ser adicionaras
- Login / Registro de usuários
- Imagem para cada usuário
- Roles (permissões) para certos usuários

Ame o código - Heidy Miguel (https://heidymiguel.ao/)
### 1º: criar um arquivo .env tendo o arquivo .env.example como parêmtro
### 2º: Criar um banco dados para o projeto
Configurar no .env
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=nome_usuario_banco_de_dados
DB_PASSWORD=senha_banco_de_dados

### 3º: Via terminal e na raiz do projeto, digitar um comando por vez:
php artisan optimize:clear
php artisan migrate
php artisan db:seed
php artisan serve
-> Agora o projeto estará funcionando e o banco de dados com 50 clientes cadastrados para testes;

### 4º: Conhecendo as ROTAS
Em uma nova aba do terminal e na raiz do projeto, digite:
php artisan route:list
Irá aparecer todas as rotas do projeto, em nosso caso, usaremos as seguintes rotas:

|Rota             |Nome|
|-----------------|-----------------|
|clientes | clientes.index |
|clientes | clientes.store |
|clientes/create | clientes.create |
|clientes/{cliente} | clientes.show |
|clientes/{cliente} | clientes.update |
|clientes/{cliente} | clientes.destroy |
|clientes/{cliente}/edit | clientes.edit |

A rota é o que aparece em seu navegador. Ex: http://127.0.0.1:8000/clientes/
O nome da rota é a forma como vc irá irentificá-la em seu projeto
Toda rota tem um tipo: get, post, delete, any.
Na rota, o que está entre chaves {}, refere-se a alguma variavél que obrigatóriamente deve ser passada para ser tratada no controller.
As rotas estão em routes/web.php

## View
As views ficam na Pasta resources/view e todas as views serão armazenadas lá.

## Controllers
Os controlles ficam em app/Http/Controllers.
São nos controlles que consultas, updates (tratamento das informações) são feitos. 
São nos controlles que as vies são "chamadas".
Observe que a Rota de Nome clientes.index ferere-se a função index do controller ClienteController; clientes.create refere-se a função create.

# Material de Apoio
https://laravel.com/docs/9.x/blade#main-content (Obrigatório conhecer)
https://laravel.com/docs/9.x/controllers#main-content (Importantíssimo conhecer)
https://laravel.com/docs/9.x/routing#route-parameters (Importantíssimo conhecer)

### Vídeos
https://www.youtube.com/watch?v=XlNfLR8o_XM

https://www.youtube.com/watch?v=svyhZFJnU9M

https://www.youtube.com/watch?v=MYMujqPvWdQ

https://www.youtube.com/watch?v=8MY0cxdH0OY
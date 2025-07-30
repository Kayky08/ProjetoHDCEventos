<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/**
 * CASO NÃO FUNCIONE O PROJETO:
 * 
 *   1. Verificar se instalou o composer: composer install
 *   2. Verificar se o antivirus não esta barrando
 *   3. Verificar se tem o banco de dados
 *   4. Verificar se criou uma chave de acesso: php artisan key:generate
 */

 /*
    Migrations servem como um versionamento do banco de dados, alem de facilitarem as ações com o mesmo
    
    para criar: php artisan make:migration nome_da_migration
    Exemplos:

    Criação da tabela: create_[tabela]_table
    Adição de coluna(s): add_[coluna]to[tabela]_table
    Remoção de coluna(s): remove_[coluna]from[tabela]_table
    Renomear tabela: rename_[tabela]to[nova]_table
    Alterar tipo de coluna: change_[coluna]on[tabela]_table
    Adicionar chave estrangeira: add_foreign_key_to_[tabela]_table
    Criar tabelas pivô (N:N): create_[tabela_pivo]_table

    para rodar a migratio: php artisan migrate
    para verificar o status: php artisan migrate:status
    para recriar as migrations: php artisan migrate:fresh (CUIDADO: Ele recria as tabelas sem os dados!!!)
    para voltar uma migration: php artisan migrate:rollback
    para voltar todas as migrations: php artisan migrate:reset
    para voltar todas as migrations e rodar novamente: php artisan migrate:refresh
*/

//Criando rotas e conectando com o controller
Route::get('/', [EventController::class, 'index']);//Home
Route::get('/eventos/criar', [EventController::class, 'create']);//Criar
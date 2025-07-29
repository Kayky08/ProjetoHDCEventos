<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
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
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('qtd',);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

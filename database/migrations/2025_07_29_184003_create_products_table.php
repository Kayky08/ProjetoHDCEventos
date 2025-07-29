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
      
      para criar: php artisan make:migration nome_da_migration (EX: create_produtc_table)
      para verificar o status: php artisan migrate:status
      para recriar as migrations: php artisan migrate:fresh (CUIDADO: Ele recria as tabelas sem os dados!!!)
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

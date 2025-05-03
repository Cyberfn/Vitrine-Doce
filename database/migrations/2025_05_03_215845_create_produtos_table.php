<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('confeitaria_id')->constrained('confeitarias')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco', 10, 2);
            $table->string('imagem')->nullable();
            $table->integer('estoque')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

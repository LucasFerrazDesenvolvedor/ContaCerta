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
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mesa_id')
                ->nullable()
                ->constrained('mesas')
                ->nullOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('cliente_nome')->nullable();
            $table->string('status')->default('aberta'); // aberta, fechada, cancelada

            $table->decimal('total', 10, 2)->default(0);

            $table->timestamp('aberta_em')->nullable();
            $table->timestamp('fechada_em')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mesa_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained();

            $table->decimal('total', 10, 2)->default(0);
            $table->string('status')->default('aberta');

            $table->timestamps();
        });
    }
};

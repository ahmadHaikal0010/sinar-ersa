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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained(
                table: 'menus',
                indexName: 'fk_transactions_menu_id',
            )->onDelete('cascade')->onUpdate('cascade');
            $table->string('jumlah');
            $table->string('deskripsi');
            $table->enum('metode_transaksi', ['tunai', 'transfer']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

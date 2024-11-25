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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tenant_id')->constrained()->onDelete('cascade');

            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration'); // e.g., time in minutes (60, 90, 120)
            $table->decimal('price', 8, 2); // e.g., 130.00
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

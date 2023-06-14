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
        Schema::create('updates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incident_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('status')->default('update');
            $table->text('content');
            $table->boolean('resolve_incident')->default(false);
            $table->foreignId('created_by')->constrained(table: 'users');
            $table->foreignId('updated_by')->nullable()->constrained(table: 'users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('updates');
    }
};

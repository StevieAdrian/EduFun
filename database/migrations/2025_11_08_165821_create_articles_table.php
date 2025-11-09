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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->text('synopsis');
            $table->unsignedBigInteger('view_count')->default(0);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('writer_id')->constrained('writers')->onDelete('cascade');
            $table->dateTime('publish_date');
            $table->string('query_string');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

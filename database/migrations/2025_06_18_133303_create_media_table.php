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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('file name');
            $table->string('file_type', 10)->comment('file type');
            $table->integer('file_size')->comment('size of file')->default(0);
            $table->text('url')->comment('url');
            $table->timestamp('upload_date')->comment('date of upload');
            $table->string('description')->comment('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('view comment content');
            $table->timestamp('comment_date')->comment('view comment date');
            $table->string('reviewer_name')->comment('view reviewer name')->nullable();
            $table->string('reviewer_email')->comment('view reviewer email')->nullable();
            $table->boolean('is_hidden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

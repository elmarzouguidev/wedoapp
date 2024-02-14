<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Models\Page;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->uuid()->nullable();
            $table->foreignIdFor(Page::class)->index()->nullable()->constrained()->nullOnDelete();
            $table->string('code')->unique()->nullable();

            $table->string('name');
            $table->string('sub_name')->nullable();

            $table->string('slug');
            $table->longText('body');
            $table->string('background')->nullable();

            $table->string('logo')->nullable();

            $table->string('btn_name')->nullable();
            $table->string('btn_url')->nullable();

            $table->string('icon_title')->nullable();
            $table->string('icon_code')->nullable();

            $table->json('options')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};

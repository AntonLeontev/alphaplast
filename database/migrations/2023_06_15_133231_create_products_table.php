<?php

use App\Models\Category;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->string('slug');
			$table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
			$table->string('thumbnail')->nullable();
			$table->string('part_number')->nullable();
			$table->unsignedInteger('diameter')->nullable();
			$table->unsignedInteger('throat_diameter')->nullable();
			$table->unsignedInteger('height')->nullable();
			$table->unsignedInteger('price')->nullable();
			$table->unsignedInteger('volume')->nullable();
			$table->unsignedInteger('weight')->nullable();
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

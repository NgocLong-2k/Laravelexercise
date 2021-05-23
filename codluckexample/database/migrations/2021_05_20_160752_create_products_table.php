<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('slug',100)->unique();
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->unsignedBigInteger('quantity')->default(0);
            $table->string('photo')->nullable();
            $table->unsignedInteger('category_id');
            $table->decimal('sale_off')->default(0.0);
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('photo')->nullable();
            $table->unsignedInteger('parent_id');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
}

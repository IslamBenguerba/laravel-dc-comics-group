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
    Schema::create('comics', function (Blueprint $table) {
      $table->id();

      $table->string("title");
      $table->text("description");
      $table->text("thumb")->nullable();
      $table->decimal("price", 6, 2)->default(0.00);
      $table->string("series");
      $table->date("sale_date")->nullable();
      $table->string("type")->nullable();
      $table->json("artists")->nullable();
      $table->json("writers")->nullable();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comics');
  }
};

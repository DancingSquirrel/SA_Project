<?php

use App\Models\RealEstate;
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
        Schema::create('quota_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RealEstate::class);
            $table->integer('count');
            $table->integer('price');
            $table->date('date_change')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_price_controllers');
    }
};

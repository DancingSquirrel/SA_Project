<?php

use App\Models\User;
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
        Schema::create('real_estate_controllers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('type');
            $table->string('status');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('coordinates');
            $table->string('detail');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_estate_controllers');
    }
};

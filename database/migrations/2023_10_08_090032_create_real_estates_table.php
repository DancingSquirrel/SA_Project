<?php

use App\Models\User;
use App\Models\Advertisement;
use App\Models\Agreement;
use App\Models\ImageRealEstate;
use App\Models\QuotaPrice;
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
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('type');
            $table->string('status');
            $table->string('address');
            $table->string('province')->nullable();
            $table->string('amphoe')->nullable();
            $table->string('tambon')->nullable();
            $table->string('coordinates');
            $table->string('detail');
            $table->string('bedroom');
            $table->string('bathroom');
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

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
        Schema::create("locations_autos", function (Blueprint $table) {
            $table->unsignedBigInteger("locations_id");
            $table->unsignedBigInteger("autos_id");
            $table->boolean("disponibilidad");
            $table->foreign("locations_id")->references("id")->on("locations");
            $table->foreign("autos_id")->references("id")->on("autos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("locations_autos", function (Blueprint $table) {
            $table->dropForeign(["locations_id"]);
            $table->dropForeign(["autos_id"]);
        });
        Schema::drop("locations_autos");
    }
};

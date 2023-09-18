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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->mediumText("description")->nullable();
            $table->longText("body")->nullable();
            $table->text("logo")->nullable();
            $table->text("facebook")->nullable();
            $table->text("instagram")->nullable();
            $table->text("twitter")->nullable();
            $table->text("linkedin")->nullable();
            $table->text("youtube")->nullable();
            $table->text("tiktok")->nullable();
            $table->text("whatsapp")->nullable();
            $table->text("telegram")->nullable();
            $table->text("phone")->nullable();
            $table->text("email")->nullable();
            $table->text("location")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};

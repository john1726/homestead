<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('');
            $table->longText('description');
            $table->date('startdate')->default(date("Y-m-d H:i:s"));
            $table->date('enddate')->default(date("Y-m-d H:i:s"));
            $table->string('location')->default('');
            $table->string('url')->default('');
            $table->string('contact')->default('');
            $table->unsignedInteger('display_order')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};

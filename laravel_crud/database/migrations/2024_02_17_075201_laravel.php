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
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->string("std_name",100);
            $table->string("std_class",100);
            $table->string("std_faculty",100);
            $table->string("std_email", 100);
            $table->string("std_password",100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::create('employees', function (Blueprint $table) {
            //Not Necessary
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact_no')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(1)->comment('1=>active 0=>inactive');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            //Not Necessary
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

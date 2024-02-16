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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('mobile')->nullable();
            $table->string('password')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nick_name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('area')->nullable();
            $table->string('pincode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('second_number')->nullable();
            $table->date('birthdate')->nullable();
            $table->date('anniversary_date')->nullable();
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->date('spouse_birthdate')->nullable();
            $table->string('sopuse_nick_name')->nullable();
            $table->enum('mobile_verified', ['Yes', 'No', 'Pending'])->default('Pending');
            $table->enum('email_verified', ['Yes', 'No', 'Pending'])->default('Pending');
            $table->enum('user_status', ['Active', 'Inactive', 'Delete'])->default('Inactive');
            $table->enum('optin_status', ['SMS', 'Email', 'Both', 'None'])->default('None');
            $table->unsignedBigInteger('reference_by')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();

            $table->index('reference_by');
            $table->index('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

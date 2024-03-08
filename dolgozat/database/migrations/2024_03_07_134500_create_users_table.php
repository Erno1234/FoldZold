<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztalies');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(["name"=>"Diák1",'password' => Hash::make('blabla'),"email"=>"diak1@gmail.com","osztaly_id" =>1]);
        User::create(["name"=>"Diák2",'password' => Hash::make('habla'),"email"=>"diak2@gmail.com","osztaly_id" =>2]);
        User::create(["name"=>"Diák3",'password' => Hash::make('abla'),"email"=>"diak3@gmail.com","osztaly_id" =>3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

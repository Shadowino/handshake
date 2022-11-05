<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\user;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('surname');
          $table->string('about');
          $table->string('password');
          $table->timestamps();
      });
      user::insert([
        'name' => "Daniel",
        'surname' => "Nightguard",
        'about' => "administrator",
        'password' => "sshadoww",
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::dropIfExists('users');
    }
};

<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncadrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadrants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cin',10);
            $table->string('job_title')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('uploads/default.png');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encadrants');
    }
}

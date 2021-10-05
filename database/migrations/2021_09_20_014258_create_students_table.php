  <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->Increments('stud_id');
            $table->unsignedInteger('course_id');
            $table->integer('TRN');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->date('DOB');
            $table->string('email')->unique();
            $table->string('street');
            $table->string('town');
            $table->string('country');
            $table->string('parish');
            $table->integer('telephone');
            $table->text('status')->default('pending');
            $table->text('paymentstatus')->default('pending');
            $table->foreign('course_id')->references('c_id')->on('courses')->onDelete('cascade');

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
        Schema::dropIfExists('students');
    }
}


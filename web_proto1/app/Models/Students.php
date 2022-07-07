<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->integer('icnumber');
            $table->string('gender');
            $table->string('classname');
            $table->string('pickup');
            $table->boolean('attendance')->default(0);
            $table->timestamps();
        });
    }
}

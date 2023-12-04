<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('projects', function(Blueprint $table){
            $table->unsignedBigInteger('technology_id')->after('id')->nullable();
            $table->foreign('technology_id')
                ->references('id')
                ->on('technologies')
                ->onDelete('set null');

        });
    }

    public function down()
    {
        Schema::table('projects', function(Blueprint $table){
            $table->dropForeign(['technology_id']);
            $table->dropColumn(['technology_id']);
        });
    }
};

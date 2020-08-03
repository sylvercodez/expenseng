<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewQuarterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('quaterly_budgets', function (Blueprint $table) {
            $table->string('categories');
            $table->string('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('quaterly_budgets', function (Blueprint $table) {
            $table->dropColumn('categories');
            $table->dropColumn('year');
        });
    }
}

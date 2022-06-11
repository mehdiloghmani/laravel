<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addcategorytoclips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('clips', function (Blueprint $table) {

        $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clips', function (Blueprint $table){
           
            $table->dropForeign(['category_id']);
          $table->dropColumn('category_id');
    });

    }
}

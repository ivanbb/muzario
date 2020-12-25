<?php

use Illuminate\Database\Migrations\Migration;

class InsertDefaultGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('genres')->insert(
            array(
                'name' => 'None',
            )
        );
        DB::table('authors')->insert(
            array(
                'name' => 'None',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('genres')->where('name', '=', 'none')->delete();
        DB::table('authors')->where('name', '=', 'none')->delete();
    }
}

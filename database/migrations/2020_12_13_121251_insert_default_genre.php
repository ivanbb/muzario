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
                'name' => 'none',
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
        DB::table('genres')->delete(
            DB::table('genres')->select('id')->where('name', '=', 'none')
        );
    }
}

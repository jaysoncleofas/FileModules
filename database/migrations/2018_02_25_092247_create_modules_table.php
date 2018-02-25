<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tbl_name');
            $table->string('module_code');
            $table->timestamps();
        });

        $id = DB::table('modules')->insertGetId([
            ['name' => 'ModuleOne', 'tbl_name' => 'module_ones', 'module_code' => 'm1'],
            ['name' => 'ModuleTwo', 'tbl_name' => 'module_twos', 'module_code' => 'm2'],
            ['name' => 'ModuleThree', 'tbl_name' => 'module_threes', 'module_code' => 'm3'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileInAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_admin', function (Blueprint $table) {
            $table->string("admin_profile");
            $table->integer("admin_type")->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_admin', function (Blueprint $table) {
            $table->dropIfExists('tbl_admin');
        });
    }
}

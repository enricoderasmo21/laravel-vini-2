<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wineries', function (Blueprint $table) {
            $table->unsignedBigInteger('wine_id')->nullable()->after('id');

            $table->foreign('wine_id')
            ->references('id')
            ->on('wines')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wineries', function (Blueprint $table) {

            $table->dropForeign('wineries_wine_id_foreign');

            $table->dropColumn('wine_id');
        });
    }
};

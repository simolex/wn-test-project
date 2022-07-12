<?php

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class DbSystemPluginHistoryDetailText extends Migration
{
    public function up()
    {
        // Migration occurs before timestamps are patched (see next migration)
        DbDongle::disableStrictMode();

        Schema::table('system_plugin_history', function (Blueprint $table) {
            $table->text('detail')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('system_plugin_history', function (Blueprint $table) {
            $table->string('detail')->nullable()->change();
        });
    }
}

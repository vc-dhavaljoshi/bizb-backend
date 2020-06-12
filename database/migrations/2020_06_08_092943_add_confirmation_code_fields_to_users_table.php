<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConfirmationCodeFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'confirmation_code')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('confirmation_code')->nullable()->after('mobile');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'confirmation_code')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('confirmation_code');
            });
        }
    }
}

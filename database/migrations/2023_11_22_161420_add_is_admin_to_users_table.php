<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    *Run the migrations.
    */
    
    // In the new migration file (e.g., database/migrations/xxxx_xx_xx_xxxxxx_add_is_admin_to_users_table.php)

public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->boolean('is_admin')->default(0)->after('email_verified_at');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('is_admin');
    });
}

};
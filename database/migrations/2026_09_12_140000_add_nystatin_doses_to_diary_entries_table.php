<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('diary_entries', function (Blueprint $table) {
            $table->boolean('nystatin_morning')->default(false)->after('energy');
            $table->boolean('nystatin_afternoon')->default(false)->after('nystatin_morning');
            $table->boolean('nystatin_evening')->default(false)->after('nystatin_afternoon');
        });
    }

    public function down(): void
    {
        Schema::table('diary_entries', function (Blueprint $table) {
            $table->dropColumn(['nystatin_morning', 'nystatin_afternoon', 'nystatin_evening']);
        });
    }
};

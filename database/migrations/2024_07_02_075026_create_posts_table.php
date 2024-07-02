<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::connection('cluster')
            ->create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('description');
                $table->date('date');
                $table->string('status');
                $table->timestamps();
            });
    }
};

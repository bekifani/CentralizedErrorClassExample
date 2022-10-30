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

        Schema::create('jornal_votures', function (Blueprint $table) {
            $table->id();
            $table->date('Date');
            $table->float('debit');
            $table->float('credit');
            $table->foreignId('debit_account')->constrained('accounts')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('credit_account')->constrained('accounts')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->text('Narative');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jornal_votures');
    }
};

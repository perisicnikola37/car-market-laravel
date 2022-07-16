<?php

use App\Models\Gorivo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('gorivos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('gorivos')->insert([
            ['name' => 'Benzin'],
            ['name' => 'Dizel'],
            ['name' => 'Benzin + Plin'],
            ['name' => 'Metan'],
            ['name' => 'Električno'],
            ['name' => 'Hibrid benzin'],
            ['name' => 'Hibrid dizel'],
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gorivos');
    }
};

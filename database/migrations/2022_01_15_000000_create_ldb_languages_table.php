<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLdbLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ldb_languages')) {
            Schema::create('ldb_languages', function (Blueprint $table) {
                $table->increments('id');
                $table->string('code_639_1', 2)->nullable();
                $table->string('code_639_2t', 3)->nullable();
                $table->string('code_639_2b', 3)->nullable();
                $table->string('code_639_3', 3)->nullable();
                $table->string('native_name');
                $table->softDeletes();
                $table->timestamps();
            });
            Schema::table('ldb_languages', function (Blueprint $table) {
                $table->index('639_1');
                $table->index('639_2t');
                $table->index('639_2b');
                $table->index('639_3');
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
        Schema::table('ldb_languages', function (Blueprint $table) {
            $table->dropIndex('ldb_languages_639_1_index');
            $table->dropIndex('ldb_languages_639_2t_index');
            $table->dropIndex('ldb_languages_639_2b_index');
            $table->dropIndex('ldb_languages_639_3_index');
        });
        Schema::dropIfExists('tbs_tab_geographic_partition');
    }
}

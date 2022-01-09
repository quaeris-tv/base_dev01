<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Geo\Models\Place as MyModel;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateGenericTable.
 */
class CreateGenericTable extends XotBaseMigration {
    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create(
                $this->getTable(),
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->text('txt')->nullable();
                    $table->integer('user_id');
                    $table->string('image_src')->nullable();


                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                    $table->string('deleted_by')->nullable();
                    $table->timestamps();
                });
        }
        //-- UPDATE --
        $this->getConn()->table(
            $this->getTable(),
            function (Blueprint $table) {
                /*
                if (! $this->hasColumn('address')) {
                    $table->text('address')->nullable();
                }
                */
            });
    }
}

<?php

namespace Project\Liberty\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\ModelSchema;

class Visit extends Model
{
    protected function createSchema()
    {
        $schema = new ModelSchema( 'tblVisit' );
        $schema->addColumn(
            'IP',
            ''
        );

        return $schema;
    }
}
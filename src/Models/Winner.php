<?php

namespace Project\Liberty\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrement;
use Rhubarb\Stem\Schema\Columns\Integer;
use Rhubarb\Stem\Schema\Columns\String;
use Rhubarb\Stem\Schema\ModelSchema;

class Winner extends Model
{
    protected function createSchema()
    {
        $schema = new ModelSchema( 'tblWinner' );
        $schema->addColumn(
            new AutoIncrement( 'WinnerID' ),
            new String( 'WebsiteURL', 255 ),
            new Integer( 'ContactID' )
        );
    }

}
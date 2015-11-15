<?php

namespace Project\Liberty\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrement;
use Rhubarb\Stem\Schema\Columns\DateTime;
use Rhubarb\Stem\Schema\Columns\String;
use Rhubarb\Stem\Schema\ModelSchema;

class Contact extends Model
{
    protected function createSchema()
    {
        $schema = new ModelSchema( 'tblContact' );

        $schema->addColumn(
            new AutoIncrement( 'ContactID' ),
            new String( 'Name', 150 ),
            new String( 'ContactEmail', 200 ),
            new String( 'CompanyName', 200 ),
            new String( 'Website', 200 ),
            new DateTime( 'DatePosted' )
        );

        return $schema;
    }

    protected function beforeSave()
    {
        parent::beforeSave();

        if( $this->isNewRecord() )
        {
            $this->DatePosted = new \DateTime( );
        }
    }
}
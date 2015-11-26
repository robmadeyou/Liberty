<?php

namespace Project\Liberty\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrement;
use Rhubarb\Stem\Schema\Columns\DateTime;
use Rhubarb\Stem\Schema\Columns\Integer;
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
            new String( 'IP', 15 ),
            new DateTime( 'DatePosted' ),
            new Integer( 'CompetitionID' )
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
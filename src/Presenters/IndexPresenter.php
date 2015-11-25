<?php

namespace Project\Liberty\Presenters;

use Rhubarb\Patterns\Mvp\Crud\ModelForm\ModelFormPresenter;
use Rhubarb\Stem\Repositories\MySql\MySql;

class IndexPresenter extends ModelFormPresenter
{
    protected function createView()
    {
        return new IndexView();
    }

    public static function checkIfNameIsTaken( $name )
    {
        if( MySql::returnSingleValue( "SELECT ContactID FROM tblContact WHERE tblContact.Name = ':Name'", [ 'Name' => $name ] ) )
        {
            return false;
        }
        return true;
    }

    protected function configureView()
    {
        $this->view->attachEventHandler( 'InputCheck', function( $name, $value )
        {
            switch( $name )
            {
                case 'Name':
                    if( self::checkIfNameIsTaken( $value ) )
                    {
                        return 0;
                    }
                    return 3;
            }
        });
        return parent::configureView();
    }
}
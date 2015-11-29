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
        if( MySql::returnSingleValue( "SELECT COUNT( ContactID ) FROM tblContact WHERE tblContact.Name = :contact", [ 'contact' => $name ] ) )
        {
            return false;
        }
        return true;
    }

    public static function checkIfEmailIsTaken( $email )
    {
        if( MySql::returnSingleValue( "SELECT COUNT( ContactID ) FROM tblContact WHERE tblContact.ContactEmail = :email", [ 'email' => $email ] ) )
        {
            return false;
        }
        return true;
    }

    public static function checkIfWebsiteIsTaken( $website )
    {
        if( MySql::returnSingleValue( "SELECT COUNT( ContactID ) FROM tblContact WHERE tblContact.Website = :website", [ 'website' => $website ] ) )
        {
            return false;
        }
        return true;
    }

    public static function checkIfCompanyIsTaken( $company )
    {
        if( MySql::returnSingleValue( "SELECT COUNT( ContactID ) FROM tblContact WHERE tblContact.CompanyName = :company", [ 'company' => $company ] ) )
        {
            return false;
        }
        return true;
    }

    public static function checkIfIPIsTaken( $ip )
    {
        if( MySql::returnSingleValue( "SELECT COUNT( ContactID ) FROM tblContact WHERE tblContact.CompanyName = :ip", [ 'ip' => $ip ] ) )
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
                case 'Email':
                    if( preg_match( '/.+@.+\..+/', $value ) === 1 )
                    {
                        if( self::checkIfEmailIsTaken( $value ) )
                        {
                            return 0;
                        }
                        return 3;
                    }
                    else
                    {
                        return 3;
                    }
                case 'Website':
                    if( self::checkIfWebsiteIsTaken( $value ) )
                    {
                        return 0;
                    }
                    return 3;
                case 'Company':
                    if( self::checkIfCompanyIsTaken( $value ) )
                    {
                        return 0;
                    }
                    return 3;
            }
            return 2;
        });
        return parent::configureView();
    }
}
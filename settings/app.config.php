<?php

namespace Project\Liberty;

use Project\Liberty\Models\Contact;
use Project\Liberty\Models\DefaultSolutionSchema;
use Project\Liberty\Presenters\About\AboutPresenter;
use Project\Liberty\Presenters\IndexPresenter;
use Project\Liberty\Presenters\Terms\TermsPresenter;
use Project\Liberty\Presenters\Winner\WinnerPresenter;
use Rhubarb\Crown\Encryption\HashProvider;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Crown\Module;
use Rhubarb\Crown\UrlHandlers\ClassMappedUrlHandler;
use Rhubarb\Scaffolds\Authentication\LoginProvider;
use Rhubarb\Scaffolds\AuthenticationWithRoles\AuthenticationWithRolesModule;
use Rhubarb\Stem\Repositories\MySql\MySql;
use Rhubarb\Stem\Repositories\Repository;
use Rhubarb\Stem\Schema\SolutionSchema;

class YourAppModule extends Module
{
    protected function initialise()
    {
        parent::initialise();

        Repository::SetDefaultRepositoryClassName( MySql::class );

        include_once("settings/site.config.php");

        SolutionSchema::registerSchema( 'Default', DefaultSolutionSchema::class );

    }

    protected function registerUrlHandlers()
    {
        parent::registerUrlHandlers();

        // Add a simple home page URL handler. We're using one of the simplest handlers the
        // ClassMappedUrlHandler, but you should look at the other handlers particularly
        // the MvpUrlHandler and CrudUrlHandler
        $this->addUrlHandlers(
            [
                "/" => new ClassMappedUrlHandler( IndexPresenter::class, [
                    'w' => new ClassMappedUrlHandler( WinnerPresenter::class ),
                    'a' => new ClassMappedUrlHandler( AboutPresenter::class ),
                    't' => new ClassMappedUrlHandler( TermsPresenter::class ),
                    'g' => new ClassMappedUrlHandler( TermsPresenter::class ),
                ] )
            ]
        );
    }

    protected function registerDependantModules()
    {
        Module::registerModule( new LayoutModule( '\Project\Liberty\Layouts\DefaultLayout' ) );
        HashProvider::setHashProviderClassName( 'Rhubarb\Crown\Encryption\Sha512HashProvider' );
    }
}

// Register our module to get our app underway.
Module::registerModule(new YourAppModule());
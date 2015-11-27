<?php

namespace Project\Liberty\Models;

use Rhubarb\Stem\Schema\SolutionSchema;

class DefaultSolutionSchema extends SolutionSchema
{
    public function __construct( $version = 0.4 )
    {
        parent::__construct( $version );

        $this->addModel( 'Contact',      Contact::class );
    }
}
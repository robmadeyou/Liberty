<?php

namespace Project\Liberty\Presenters\About;

use Project\Liberty\Layouts\BottomPageLayout;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Leaf\LayoutProviders\LayoutProvider;
use Rhubarb\Patterns\Mvp\Crud\ModelForm\ModelFormPresenter;

class AboutPresenter extends ModelFormPresenter
{
    protected function createView()
    {
        LayoutModule::setLayoutClassName( BottomPageLayout::class );
        return new AboutView();
    }

}
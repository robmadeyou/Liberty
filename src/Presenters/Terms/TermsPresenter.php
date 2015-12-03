<?php

namespace Project\Liberty\Presenters\Terms;

use Project\Liberty\Layouts\BottomPageLayout;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Patterns\Mvp\Crud\ModelForm\ModelFormPresenter;

class TermsPresenter extends ModelFormPresenter
{
    protected function createView()
    {
        LayoutModule::setLayoutClassName( BottomPageLayout::class );
        return new TermsView();
    }
}
<?php

namespace Project\Liberty\Presenters\Terms;

use Rhubarb\Patterns\Mvp\Crud\ModelForm\ModelFormPresenter;

class TermsPresenter extends ModelFormPresenter
{
    protected function createView()
    {
        return new TermsView();
    }
}
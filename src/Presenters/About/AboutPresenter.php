<?php

namespace Project\Liberty\Presenters\About;

use Rhubarb\Patterns\Mvp\Crud\ModelForm\ModelFormPresenter;

class AboutPresenter extends ModelFormPresenter
{
    protected function createView()
    {
        return new AboutView();
    }

}
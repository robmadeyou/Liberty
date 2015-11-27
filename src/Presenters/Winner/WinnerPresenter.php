<?php

namespace Project\Liberty\Presenters\Winner;

use Rhubarb\Patterns\Mvp\Crud\ModelForm\ModelFormPresenter;

class WinnerPresenter extends ModelFormPresenter
{
    protected function createView()
    {
        return new WinnerView();
    }
}
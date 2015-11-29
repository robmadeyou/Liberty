<?php

namespace Project\Liberty\Presenters\Thanks;

use Rhubarb\Patterns\Mvp\Crud\CrudView;

class ThanksView extends CrudView
{
    protected function printViewContent()
    {
        ?>
        <h1 class="c-title c-title--main js-title--main">Thanks!</h1>
        <div class="c-section__text js-text--main">
            <p>
                Thank you for registering. We wish you the best of luck and hope to work with you very soon!
            </p>
        </div>
        <?php
    }

}
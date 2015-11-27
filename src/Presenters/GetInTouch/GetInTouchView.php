<?php

namespace Project\Liberty\Presenters\GetInTouch;

use Rhubarb\Patterns\Mvp\Crud\CrudView;

class GetInTouchView extends CrudView
{
    protected function printViewContent()
    {
        ?>
        <div class="wrap">
            <div class="u-v">
                <h1 class="c-title c-title--main animated fadeInUp js-title--main">Get in touch!</h1>
                <div class="c-section__text animated fadeInUp js-text--main">
                    <p>We're people too.</p>
                </div>
            </div>
        </div>
        <?php
    }
}
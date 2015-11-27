<?php

namespace Project\Liberty\Presenters\Terms;

use Rhubarb\Patterns\Mvp\Crud\CrudView;

class TermsView extends CrudView
{
    protected function printViewContent()
    {
        ?>
        <div class="wrap">
            <div class="u-v">
                <h1 class="c-title c-title--main animated fadeInUp js-title--main">Terms and Conditions</h1>
                <div class="c-section__text animated fadeInUp js-text--main">
                    <p>So, to make it fair, let's lay down some ground rules.</p>
                    <p>One entry per person / company</p>
                    <p>No support is provided, <b>free</b> website is provided as is.</p>
                </div>
            </div>
        </div>
        <?php
    }
}
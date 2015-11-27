<?php

namespace Project\Liberty\Presenters\About;


use Rhubarb\Patterns\Mvp\Crud\CrudView;

class AboutView extends CrudView
{
    protected function printViewContent()
    {
        ?>
        <div class="wrap">
            <div class="u-v">
                <h1 class="c-title c-title--main animated fadeInUp js-title--main">About Liberty</h1>
                <h3 class="c-title c-title--main animated fadeInUp js-title--main">So... why are we doing this?</h3>
                <div class="c-section__text animated fadeInUp js-text--main">
                    <p>We feel that every business deserves to leave their mark on the internet.</p>
                </div>
            </div>
        </div>
        <?php
    }
}
<?php

namespace Project\Liberty\Layouts;

class BottomPageLayout extends DefaultLayout
{
    protected function printContent( $content )
    {
        ?>
        <div class="c-container">
            <a href="/"><img src="/static/images/logo.png" class="c-image" alt="poak logo" title="Home"/></a>
            <div class="c-section__header">
                <ul class="c-list c-list--inline c-list--nav">
                    <li><a href="/" class="js-fade-out-index">home</a></li>
                    <li><a href="/a" class="js-fade-out-index">about liberty</a></li>
                    <li><a href="/t" class="js-fade-out-index">terms of service</a></li>
                    <li><a href="mailto:hello@poak.io">get in touch</a></li>
                </ul>
            </div>
        </div>

        <div class="wrap c-container">
            <div class="c-container__body">
                <?php
                    parent::printContent( $content );
                ?>
            </div>
        </div>
        <?php
    }

}
<?php

namespace Your\WebApp\Presenters;

use Rhubarb\Crown\Settings\HtmlPageSettings;
use Rhubarb\Leaf\Views\HtmlView;

class IndexView extends HtmlView
{
    protected function printViewContent()
    {
        parent::printViewContent();

        ?>
        <div class="wrap cf">
            <div class="c-section cf">
                <div class="m-all t-1of2 d-1of2">
                    <h1>Hello World</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel metus in neque pharetra ultricies at eu mauris. Nunc vitae mi vitae justo blandit cursus. Mauris vel mattis dui. Aliquam vitae felis et nunc hendrerit cursus id eu est. Duis ultricies erat mauris, ut commodo enim varius in. Praesent commodo ullamcorper diam id condimentum. Phasellus et lectus elit. Suspendisse ac porttitor sapien. Sed consequat hendrerit vestibulum. Integer eget nibh iaculis, commodo felis at, finibus dui. Ut eu sagittis risus. Proin dignissim ut enim eu consectetur. Donec euismod aliquet dapibus. Phasellus euismod velit in ligula efficitur, nec aliquam nibh ornare. Mauris eu dolor tempor, varius neque quis, hendrerit nisi.</p>
                    <a href="#" class="c-button c-button--primary">Tweet Us</a>
                </div>
                <div class="m-all t-1of2 d-1of2">
                    <h1>Hello World</h1>
                </div>
            </div>
        </div>
        <div class="c-background">
            <canvas id="world"></canvas>
        </div>
        <?php


    }
}
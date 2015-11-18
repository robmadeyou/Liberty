<?php

namespace Project\Liberty\Presenters\Winner;

use Rhubarb\Leaf\Views\HtmlView;

class WinnerView extends HtmlView
{



    protected function printViewContent()
    {
        ?>
            <div class="c-section">
                <h1 class="c-title c-title--main animated fadeInUp">The winner will be announced here at the end of every month</h1>
            </div>
        <?php
    }

}
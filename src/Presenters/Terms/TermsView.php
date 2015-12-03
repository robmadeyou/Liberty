<?php

namespace Project\Liberty\Presenters\Terms;

use Rhubarb\Patterns\Mvp\Crud\CrudView;

class TermsView extends CrudView
{
    protected function printViewContent()
    {

        $array = [
            "Each business is entitled to 1 free landing page. After the winners email address has been selected,
             said address will be locked and will not be selected again. We only send 1 email to 1 person per month.
             This email is to alert a user that their business has won a landing page.",
            "Each landing page will be customised to the winning businesses branding however there will be a small POAK
            brand at the bottom of each site.",
            "We do not offer support as part of the POAK landing page giveaway. Should you require support for your
             page, please let us know during our email introductions. There will be no Content Management System
             behind each individual landing page. As we are aiming to turn each project around in a short space of time,
             we can only provide a static page.",
            "Our turn around time for each project is AGREE ON TIME. We can only produce sites quickly and efficiently
             as long as you to return the favour and get back to us as quickly as possible."
        ]
        ?>
        <div class="wrap">
            <div class="u-v">
                <h1 class="c-title c-title--main animated fadeInUp js-title--main">Terms and Conditions</h1>
                <div class="c-section__text animated fadeInUp js-text--main">
                    <p>So, to make it fair, let's lay down some ground rules.</p>
                    <?php
                        foreach( $array as $item )
                        {
                            print '<p>' . $item . '</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}
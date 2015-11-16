<?php

namespace Project\Liberty\Presenters;

use Project\Liberty\Models\Contact;
use Rhubarb\Leaf\Presenters\Controls\Buttons\Button;
use Rhubarb\Leaf\Presenters\Controls\Text\TextBox\TextBox;
use Rhubarb\Leaf\Views\HtmlView;

class IndexView extends HtmlView
{
    public function createPresenters()
    {
        parent::createPresenters();

        $this->addPresenters(
            $name = new TextBox( 'Name' ),
            $email = new TextBox( 'Email' ),
            $website = new TextBox( 'Website' ),
            $company = new TextBox( 'CompanyName' ),
            $send = new Button( 'Send', 'Send', function()
            {
                $contact = new Contact();
                $contact->Name = $this->presenters[ 'Name' ]->Text;
                $contact->ContactEmail = $this->presenters[ 'Email' ]->Text;
                $contact->CompanyName = $this->presenters[ 'CompanyName' ]->Text;
                $contact->Website = $this->presenters[ 'Website' ]->Text;
                $contact->save();
                $this->presenters[ 'Website' ];
                $this->presenters[ 'CompanyName' ];
                $this->presenters[ 'Send' ];
            } )
        );

        foreach( $this->presenters as $presenter )
        {
            if( $presenter instanceof TextBox )
            {
                $presenter->addHtmlAttribute( 'value', '' );
            }
        }

        $name->setPlaceholderText( 'Name' );
        $email->setPlaceholderText( 'Contact Email Address' );
        $website->setPlaceholderText( 'Website (If any)' );
        $company->setPlaceholderText( 'Company Name' );

    }

    protected function printViewContent()
    {
        parent::printViewContent();

        ?>
        <div class="c-section">
            <div class="c-section__header">
                <ul class="c-list c-list--inline c-list--nav">
                    <li><a href="#">about liberty</a></li>
                    <li><a href="#">terms of service</a></li>
                    <li><a href="#">get in touch</a></li>
                </ul>
            </div>
            <div class="wrap">
                <div class="u-v">
                    <h1 class="c-title c-title--main animated fadeInUp">Giving small business a fighting chance online.</h1>
                    <div class="c-section__text animated fadeInUp">
                        <p>We feel that every business deserves to leave their mark on the internet. That’s why we’re giving away <span class="u-white u-b">1 FREE</span> bespoke single page website every <span class="u-white u-b">2 WEEKS</span>.</p>

                        <p>Register below for your chance to win.</p>
                    </div>
                    <a href="#" class="c-button c-button--primary animated fadeInUp">Register</a>
                </div>
            </div>
        </div>

        <div class="wrap cf" style="display:none;">
            <div class="c-section cf">
                <div class="m-all t-1of2 d-1of2">
                    <?php
                        print $this->presenters[ 'Name' ];
                        print $this->presenters[ 'Email' ];
                        print $this->presenters[ 'Website' ];
                        print $this->presenters[ 'CompanyName' ];
                        print $this->presenters[ 'Send' ];
                    ?>
                </div>
            </div>
        </div>
        <?php


    }
}
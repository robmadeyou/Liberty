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
        <div class="wrap cf">
            <div class="c-section cf">
                <div class="m-all t-1of2 d-1of2">
                    <h1>Hello World</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel metus in neque pharetra ultricies at eu mauris. Nunc vitae mi vitae justo blandit cursus. Mauris vel mattis dui. Aliquam vitae felis et nunc hendrerit cursus id eu est. Duis ultricies erat mauris, ut commodo enim varius in. Praesent commodo ullamcorper diam id condimentum. Phasellus et lectus elit. Suspendisse ac porttitor sapien. Sed consequat hendrerit vestibulum. Integer eget nibh iaculis, commodo felis at, finibus dui. Ut eu sagittis risus. Proin dignissim ut enim eu consectetur. Donec euismod aliquet dapibus. Phasellus euismod velit in ligula efficitur, nec aliquam nibh ornare. Mauris eu dolor tempor, varius neque quis, hendrerit nisi.</p>
                    <a href="#" class="c-button c-button--primary">Tweet Us</a>
                </div>
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
        <div class="c-background">
            <canvas id="world"></canvas>
        </div>
        <?php


    }
}
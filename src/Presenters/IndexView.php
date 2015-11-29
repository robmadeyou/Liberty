<?php

namespace Project\Liberty\Presenters;

use Project\Liberty\Models\Contact;
use Rhubarb\Crown\Exceptions\ForceResponseException;
use Rhubarb\Crown\Response\RedirectResponse;
use Rhubarb\Leaf\Presenters\Controls\Buttons\Button;
use Rhubarb\Leaf\Presenters\Controls\Text\TextBox\TextBox;
use Rhubarb\Leaf\Views\WithJqueryViewBridgeTrait;
use Rhubarb\Patterns\Mvp\Crud\CrudView;

class IndexView extends CrudView
{

    use WithJqueryViewBridgeTrait;

    public function createPresenters()
    {
        parent::createPresenters();

        $this->addPresenters(
            $name = new TextBox( 'Name' ),
            $email = new TextBox( 'Email' ),
            $website = new TextBox( 'Website' ),
            $company = new TextBox( 'CompanyName' ),
            $send = new Button( 'Send', 'Register', function () {
                if ($this->presenters[ 'Name' ] &&
                    $this->presenters[ 'Email' ] &&
                    $this->presenters[ 'CompanyName' ] &&
                    $this->presenters[ 'Website' ]
                ) {
                    if (IndexPresenter::checkIfIPIsTaken( $_SERVER[ 'REMOTE_ADDR' ] ) &&
                        IndexPresenter::checkIfCompanyIsTaken( $this->presenters[ 'CompanyName' ] ) &&
                        IndexPresenter::checkIfEmailIsTaken( $this->presenters[ 'Email' ] ) &&
                        IndexPresenter::checkIfNameIsTaken( $this->presenters[ 'CompanyName' ] ) &&
                        IndexPresenter::checkIfWebsiteIsTaken( $this->presenters[ 'Website' ] )
                    ) {
                        $contact = new Contact();
                        $contact->Name = $this->presenters[ 'Name' ]->Text;
                        $contact->ContactEmail = $this->presenters[ 'Email' ]->Text;
                        $contact->CompanyName = $this->presenters[ 'CompanyName' ]->Text;
                        $contact->Website = $this->presenters[ 'Website' ]->Text;
                        $contact->IP = $_SERVER[ 'REMOTE_ADDR' ];
                        $contact->save();
                        throw new ForceResponseException( new RedirectResponse( '/h' ) );
                    }
                }
            } )
        );

        foreach ($this->presenters as $presenter) {
            if ($presenter instanceof TextBox) {
                $presenter->addCssClassName( 'alert' );
            }
        }

        $name->setPlaceholderText( 'Name' );
        $email->setPlaceholderText( 'Contact Email Address' );
        $website->setPlaceholderText( 'Website (If any)' );
        $company->setPlaceholderText( 'Company Name' );

        $send->addCssClassName( 'c-button c-button--secondary' );
    }

    protected function printViewContent()
    {
        parent::printViewContent();

        ?>
        <div class="c-section js-slideUp">
            <a href="/"><img src="/static/images/logo.png" class="c-image" alt="poak logo" title="Home"/></a>
            <div class="c-section__header">
                <ul class="c-list c-list--inline c-list--nav">
                    <li><a href="/a" class="js-fade-out-index">about liberty</a></li>
                    <li><a href="/t" class="js-fade-out-index">terms of service</a></li>
                    <li><a href="mailto:hello@poak.io">get in touch</a></li>
                </ul>
            </div>
            <div class="wrap">
                <div class="u-v">
                    <h1 class="c-title c-title--main animated fadeInUp js-title--main">Giving small business a fighting
                        chance online.</h1>

                    <div class="c-section__text animated fadeInUp js-text--main">
                        <p>We feel that every business deserves to leave their mark on the internet. That’s why we’re
                            giving away <span class="u-white u-b">1 FREE</span> bespoke single page website every <span
                                class="u-white u-b">1 Calendar month</span>.</p>

                        <p>Register below for your chance to win.</p>
                    </div>
                    <a href="#" class="c-button c-button--primary animated fadeInUp js-button--register">Register</a>
                </div>
            </div>
            <div class="c-section__form js-input-overlay">
                <a href="#" id="close-form"><img src="/static/images/close.png" alt="close" width="35"/></a>
                <?php
                print "<label>Name</label>";
                print $this->presenters[ 'Name' ];
                print "<label>Email</label>";
                print $this->presenters[ 'Email' ];
                print "<label>Website</label>";
                print $this->presenters[ 'Website' ];
                print "<label>Company Name</label>";
                print $this->presenters[ 'CompanyName' ];
                print $this->presenters[ 'Send' ];
                ?>
            </div>
        </div>
        <?php
    }

    public function getDeploymentPackageDirectory()
    {
        return __DIR__;
    }
}
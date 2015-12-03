<?php

namespace Project\Liberty\Presenters\About;


use Rhubarb\Patterns\Mvp\Crud\CrudView;

class AboutView extends CrudView
{
    protected function printViewContent()
    {
        ?>
        <h1 class="c-title c-title--main js-title--main">About POAK</h1>
        <div class="c-section__text js-text--main">
            <p>We feel that every business deserves to leave their mark on the internet.</p>
            <h3 class="c-title c-title--divide">What is POAK?</h3>
            <p><strong>POAK</strong> stands for 'Project Online Act of Kindness'. Every month we will randomly pick an email address from our database. That email address corresponds to a business. That business will then get a free landing page designed with their brand colors.</p>
            <h3 class="c-title c-title--divide">Why are we doing this?</h3>
            <p>We love what we do. We have a passion for good design and strong user experience. We don't do what we do for the money.</p>
            <p>In an ever evolving technological world, if you aren't online, there's a good chance your business will be left behind. We want to make sure everyone gets a chance at staying in the game.</p>
            <h3 class="c-title c-title--divide">Why dont I use a website builder?</h3>
            <p>We feel that website builders lack a personal touch and limit creativity. Imagine trying to uniquely identify your business using a template and a week later seeing another company with the same website template. Every business deserves to have a say in how their site is designed. Each site is designed with the businesses personality and will adhere to brand guidelines should there be any.</p>
            <h3 class="c-title c-title--divide">How can I apply?</h3>
            <p>Simply click the <a href="/"><strong>here</strong></a> to be taken to the register form. Put your details in and we will let you know if you have won on the specified date. Good luck.</p>
        </div>
        <?php
    }
}
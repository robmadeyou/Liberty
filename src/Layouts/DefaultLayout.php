<?php

namespace Project\Liberty\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use Rhubarb\Patterns\Layouts\BaseLayout;

class DefaultLayout extends BaseLayout
{
    function __construct()
    {
        ResourceLoader::loadResource( 'static/css/base.css' );
    }

    protected function printHead()
    {
        ?>
            <meta charset="utf-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <title>PAOK</title>

            <meta name="HandheldFriendly" content="True">
            <meta name="MobileOptimized" content="320">
            <meta name="viewport" content="width=device-width, initial-scale=1"/>

            <link rel="icon" href="/static/images/favicon.ico">
            <!--[if IE]>
            <link rel="shortcut icon" href="/static/images/favicon.ico">
            <![endif]-->

            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>

            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

            <link rel="stylesheet"  href="/static/css/style.css" type="text/css" media="all" />
            <link rel="stylesheet"  href="/static/css/animate.css" type="text/css" media="all" />


            <meta name="msapplication-TileColor" content="#f01d4f">
            <meta name="theme-color" content="#121212">
        <?php
    }

    protected function printPageHeading()
    {
        ?>
        <div id="top">
            <?php

            parent::printPageHeading();

            ?>
        </div>
        <div id="content">
        <?php
    }

    protected function printTail()
    {
        parent::printTail();

        ?>
        </div>
        <div id="tail">
            <script src="/static/js/js.js"></script>
        </div>
        <?php
    }
}
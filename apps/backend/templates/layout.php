<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>RecyControl</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
        <?php use_stylesheet('admin.css') ?>
    </head>
    <body>
        <div id="container">
            <div id="header">

                <div class="content">
                    <h1><a href="<?php echo url_for('homepage') ?>">
                            <img src="/images/logo.jpg" alt="Jobeet Job Board" />
                        </a></h1>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li>
                        <?php echo include_partial('global/menu'); ?>
                    </li>
                </ul>
            </div>

            <div id="content">
                <?php echo $sf_content ?>
            </div>

            <div id="footer"></div>
        </div>
    </body>
</html>
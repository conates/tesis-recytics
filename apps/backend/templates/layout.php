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
        <script type="text/javascript">
            var timeout         = 500;
            var closetimer		= 0;
            var ddmenuitem      = 0;

            function jsddm_open()
            {	jsddm_canceltimer();
                jsddm_close();
                ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

            function jsddm_close()
            {	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

            function jsddm_timer()
            {	closetimer = window.setTimeout(jsddm_close, timeout);}

            function jsddm_canceltimer()
            {	if(closetimer)
                {	window.clearTimeout(closetimer);
                    closetimer = null;}}

            $(document).ready(function()
            {	$('#jsddm > li').bind('mouseover', jsddm_open);
                $('#jsddm > li').bind('mouseout',  jsddm_timer);});

            document.onclick = jsddm_close;
        </script>
    </head>
    <body>
        <div id="header">

            <div class="content">
                <h1><a href="<?php echo url_for('homepage') ?>">
                        <img src="/images/logo.jpg" alt="Jobeet Job Board" />
                    </a></h1>
            </div>
        </div>
        <div id="container">
            <?php if ($sf_user->isAuthenticated()) { ?>
                <div id="menu"><?php echo include_partial('global/menu'); ?></div>
            <?php } ?>


            <div id="content">
                <?php echo $sf_content ?>
            </div>
        </div>
        <div id="footer"></div>
    </body>
</html>
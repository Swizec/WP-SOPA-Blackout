<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo CD_SOPABLACKOUT_URL; ?>css/style.css" />
    
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'sopa-blackout' ); ?> id="sopa-page">
    <div class='container'>
        <h1><?php _e( 'Stop United States Censorship' ); ?></h1>
        <p>Protesting SOPA today. Didn't have time to read an academic paper for Science Wednesday.</p>
        <p>No but seriously guys, this SOPA issue is kind of important so if you're from the US, please do something about it. Thanks!</p>
        <p><a href="http://americancensorship.org/">Learn more</a>.</p>
        
        <iframe src="http://player.vimeo.com/video/31100268?byline=0&amp;portrait=0" width="700" height="394" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <p>&nbsp;</p>
        <iframe src="http://americancensorship.org/callwidget" width="588" height="625" border="0"></iframe>
    </div>
<?php wp_footer(); ?>
</body>
</html>

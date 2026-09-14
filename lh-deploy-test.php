<?php
/*
Plugin Name: LH Deploy Test
Description: Test wdrożenia GitHub → LH.pl → WordPress
Version: 1.0
*/

add_shortcode('lh_deploy_test', function () {
    return '<p><strong>Deploy v1 działa.</strong></p>';
});
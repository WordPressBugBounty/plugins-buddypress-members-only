<?php


if (!defined('ABSPATH')) {
    exit;
}

function bpdisablewprssfeeds()
{
    /*
    //!!! before 3.6.3
    $site_name = get_bloginfo('name');
    $site_url = get_bloginfo('url');
    */
    //!!!  3.6.3
    $site_name = esc_html(get_bloginfo('name'));
    $site_url  = esc_url(get_bloginfo('url'));

    //!!! before 3.6.3 wp_die(__('We have disabled feed, please view our site <a href="'.$site_url.'">'.$site_name.'</a>'));

    //!!! 3.6.3
    $message = wp_kses(
        sprintf(
            __('We have disabled feed, please view our site <a href="%s">%s</a>.', 'bp-members-only'),
            $site_url,
            $site_name
        ),
        array(
            'a' => array(
                'href'  => array(),
                'title' => array(),
            ),
        )
    );

    wp_die($message);


}

$bpenableaallwprssrestricts = get_option('bpenablerssrestricts');

//!!! before 3.6.3 if (strtolower($bpenableaallwprssrestricts)  == 'yes')
if (strtolower(esc_html($bpenableaallwprssrestricts))  == 'yes') {
    add_action('do_feed', 'bpdisablewprssfeeds', 1);
    add_action('do_feed_rdf', 'bpdisablewprssfeeds', 1);
    add_action('do_feed_rss', 'bpdisablewprssfeeds', 1);
    add_action('do_feed_rss2', 'bpdisablewprssfeeds', 1);
    add_action('do_feed_atom', 'bpdisablewprssfeeds', 1);
    add_action('do_feed_rss2-comments', 'bpdisablewprssfeeds', 1);
    add_action('do_feed_atom-comments', 'bpdisablewprssfeeds', 1);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 3);
}

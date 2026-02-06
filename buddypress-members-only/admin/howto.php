<?php
if (! defined('WPINC')) {
    exit('Please do not access our files directly.');
}

function members_only_free_howto_setting()
{
    global $wpdb, $wp_roles;

    echo "<br />";

    $setting_panel_head = 'How To Use BuddyPress Members Only:';
    members_only_free_setting_panel_head($setting_panel_head);

    $tooltips_free_default_how_to_bar_id   = 'tooltips_knowledge_3';
    $membersonly_free_how_to_bar_title     = 'How BuddyPress Members Only Works?';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('How BuddyPress Members Only Works?', 'bp-members-only') . '</h2>'; //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Once activated our BuddyPress Membership plugin, your buddypress / wordpress site will instantly become a private community. In backend, you can decide which parts of your site are open to guest.When guest users try to view any other pages on your site, they will be redirected to the URL which you set up in "Register Page URL" -- you can select other pages in this URL too, for example, landing page, or membership payment page... and so on', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#1 Home page of your site is always be opened to non member users.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#2 Login page will always be opened to non member users.', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#3 Register page will always be opened to non member users.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#4 Lost Password page will always be opened to non member users.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#5 User activation page will always be opened to non member users.', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#6 In backend “Buddypress Members Only Setting” menu -> Option Panel, you can setting “Register Page URL”, “Opened Page URLs”, please check screenshost at https://wordpress.org/plugins/buddypress-members-only/screenshots/ ', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#7 “Register Page URL” will opened to non member users always.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#8 “Opened Page URLs” will opened to non member users always.', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#9 When guest users try to view any other pages on your site, they can not can view content, they will be redirected to the URL which you setting in “Register Page URL”.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#10 In setting panel, you can setting redirect logged in users to buddypress profile page or buddypress members page. If you did not install buddypress, this option will be ignored.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#11 BuddyPress Members Only supported HTTPS abd HTTP, we will detect HTTPS and HTTP automatically.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#12 BuddyPress members only plugin support WordPress too, if you disable buddypress on your site, our plugin will detect it and support wordpress members only automatically', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#13 The plugin support translate and launch localized versions, .po files can be found in languages sub-folder.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_1';
    $membersonly_free_how_to_bar_title = 'How to Install BuddyPress Members Only';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('How to Install BuddyPress Members Only', 'bp-members-only') . '</h2>'; //!!! 3.6.3
    $download_url  = esc_url('https://wordpress.org/plugins/buddypress-members-only/'); //!!! 3.6.3
    $plugins_url   = esc_url(admin_url('plugins.php'));  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= esc_html__('#1 Download BuddyPress Members Only from ', 'bp-members-only') . '<a href="' . $download_url . '" target="_blank" rel="noopener">' . esc_html__('wordpress plugin page', 'bp-members-only') . '</a>.'; // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#2 Upload the BuddyPress Members Only plugin zip file to your site via ', 'bp-members-only') . '<a href="' . $plugins_url . '" target="_blank" rel="noopener">' . esc_html__('plugins menu', 'bp-members-only') . '</a>.';  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#3 Activate the plugin "BuddyPress Members only" in ', 'bp-members-only') . '<a href="' . $plugins_url . '" target="_blank" rel="noopener">' . esc_html__('plugins page', 'bp-members-only') . '</a>.';  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_2';
    $membersonly_free_how_to_bar_title = 'What is the Function of BuddyPress Members Only?';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('What is the Function of BuddyPress Members Only', 'bp-members-only') . '</h2>';  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Buddypress Members Only Plugin will help you build a private buddypress community.', 'bp-members-only');  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Only logged in users allowed to view your buddypress site', 'bp-members-only');  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Non-Member Users will be redirected to your homepage or register page or your membership landing page.', 'bp-members-only');  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Also you can open your pages to guest users in back end via buddypress members only settings panel', 'bp-members-only');  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_4';
    $membersonly_free_how_to_bar_title = 'BuddyPress Members Only Plugin Settings';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('BuddyPress Members Only Plugin Settings', 'bp-members-only') . '</h2>';  // !!! 3.6.3
    $admin_url = esc_url(admin_url('admin.php?page=bpmemberonly'));  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= esc_html__('#1 Please log in wordpress admin panel.', 'bp-members-only') . '<br>';  // !!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#2 Please click "BuddyPress Members Only" Menu, You will open ', 'bp-members-only') . '<a href="' . $admin_url . '" target="_blank" rel="noopener">' . esc_html__('“Buddypress Members Only Setting” Panel', 'bp-members-only') . '</a>.';  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#3 By default, your home page and register page will opened to guest, other pages will open to logged in users. In "Opened Page URLs" option, you can add pages URLs to open these pages to guest users, include wordpress pages and buddypress pages.', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#5 If guest users click a page which is not opened to non-member users, they will be redirect to URL which you entered in "Register Page URL" option, you can enter login page, or register page, or home page, or your membership landing page in here', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#6 When users logged in your site, they will be redirected to URLs you selected from "Redirect Logged in Users to" select box. If you did not install buddypress, this option will be ignored.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    //2.8.5
    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_7';
    $membersonly_free_how_to_bar_title = 'How to Use Resriction Shortcode in WordPress Post?';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('How to Use Resriction Shortcode in WordPress Post?', 'bp-members-only') . '</h2>';  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#1 By default, buddypress memebrs only support restrict wordpress posts to non-member users too, and you can open wordpress posts to non-member via "Only Protect My Buddypress Pages" option', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#2 If you open wordpress posts to non-members, you can still can restric important content of the post to non-members via the shortcode [restriction].', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('#3 Just insert shortcode "[restriction]hi, this is private content [/restriction]" into your wordpress post, then these private content will be hide to non-memebrs.', 'bp-members-only');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '<p>';
    $detail_url = esc_url('https://membersonly.top/buddypress-membership-plugin-4-7-0-released-support-restrict-content-of-wordpress-post/'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= esc_html__('#4 Please check ', 'bp-members-only') . '<a href="' . $detail_url . '" target="_blank" rel="noopener">' . esc_html__('“more details”', 'bp-members-only') . '</a>.'; //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    //3.3.5
    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_hwo_to_find_members_page';
    $membersonly_free_how_to_bar_title = 'How to create buddypress memebers page for buddypress members component?';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('How to create buddypress memebers page?', 'bp-members-only') . '</h2>'; //!!! 3.6.3
    $doc_url = esc_url('https://membersonly.top/how-to-solve-the-problem-of-member-page-no-logger-exists-on-buddypress-website/');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Please check detailed document at: ', 'bp-members-only') . '<a href="' . $doc_url . '" target="_blank" rel="noopener">' . esc_html__('How to create buddypress memebers page for buddypress members component?', 'bp-members-only') . '</a>.';  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_5';
    $membersonly_free_how_to_bar_title = 'What We are Developing Now';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('What We are Developing Now', 'bp-members-only') . '</h2>';  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('We are developing a new version which to allow open a few buddypress components like members, activity... and so on to guest, based on webmaster settings in back end.', 'bp-members-only'); //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);

    $tooltips_free_default_how_to_bar_id = 'tooltips_knowledge_6';
    $membersonly_free_how_to_bar_title = 'How to Get Support';

    $membersonly_free_how_to_bar_content  = '';
    $membersonly_free_how_to_bar_content .= '<div style="padding: 30px 20px 20px 20px;">';
    $membersonly_free_how_to_bar_content .= '<h2>' . esc_html__('How to Get Support From Our Official Site: membersonly.top?', 'bp-members-only') . '</h2>'; //!!! 3.6.3
    $ticket_url = esc_url('https://membersonly.top/contact-us/');  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '<p>';
    $membersonly_free_how_to_bar_content .= esc_html__('Please submit ticket at: ', 'bp-members-only') . '<a href="' . $ticket_url . '" target="_blank" rel="noopener">' . esc_html__('Support Ticket', 'bp-members-only') . '</a>.';  //!!! 3.6.3
    $membersonly_free_how_to_bar_content .= '</p>';
    $membersonly_free_how_to_bar_content .= '</div>';

    members_only_free_howto_setting_panel($tooltips_free_default_how_to_bar_id, $membersonly_free_how_to_bar_title, $membersonly_free_how_to_bar_content);
}

function members_only_free_howto_setting_panel($membersonly_free_how_to_bar_id, $membersonly_free_how_to_bar_title = '', $membersonly_free_how_to_bar_content = '')
{
    global $wpdb, $wp_roles;
    ?>
<div class="wrap">
    <div id="dashboard-widgets-wrap">
        <div id="dashboard-widgets" class="metabox-holder">
            <div id="post-body">
                <div id="dashboard-widgets-main-content">
                    <div class="postbox-container" style="width: 90%;">
                        <div
                            class="postbox tooltips-pro-how-to-each-bar"
                            id="tooltips-pro-how-to-each-bar-id"
                            data-user-role="<?php echo esc_attr($membersonly_free_how_to_bar_id); //!!! 3.6.3?>">
                            <span id='bp-members-pro-compent-plus-<?php echo esc_attr($membersonly_free_how_to_bar_id); //!!! 3.6.3?>'>+</span>
                            <h3 class='hndle'
                                style='padding: 10px; ! important; border-bottom: 0px solid #eee !important;'>
                                <?php echo esc_html($membersonly_free_how_to_bar_title); //!!! 3.6.3?>
                            </h3>
                        </div>
                        <div class="inside tomas-tooltips-howto-settings postbox"
                             style='padding-left: 10px; border-top: 1px solid #eee;'
                             id="<?php echo esc_attr($membersonly_free_how_to_bar_id);  //!!! 3.6.3?>">
                            <?php
                            echo $membersonly_free_how_to_bar_content; ?>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear: both"></div>
    <?php
}

/*
 * 3.2.9 move to main function
function members_only_free_setting_panel_head($title)
{
    ?>
        <div style='float:left;margin-right:10px;'>
        <img src='<?php echo get_option('siteurl');  ?>/wp-content/plugins/buddypress-members-only/images/new.png' style='width:30px;height:30px;'>
        </div>
        <div style='padding-top:5px; font-size:22px;'><?php echo $title; ?></div>
        <div style='clear:both'></div>
<?php
}
*/

members_only_free_howto_setting();

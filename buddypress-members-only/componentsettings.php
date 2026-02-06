<?php
if (! defined('WPINC')) {
    exit('Please do not access our files directly.');
}

function buddypress_members_component_setting_free()
{
    global $wpdb, $wp_roles;

    if (isset($_POST ['bpcomponentsubmit'])) {
        check_admin_referer('bpcomponentsubmitnonce');
        if (isset($_POST ['bpstandardcomponent'])) {
            //3.2.3
            $m_bpstandardcomponent = array_map('sanitize_text_field', $_POST ['bpstandardcomponent']);
            //$m_bpstandardcomponent = $_POST ['bpstandardcomponent'];
            update_option('bpstandardcomponent', $m_bpstandardcomponent);
        } else {
            delete_option('bpstandardcomponent');
        }
    }

    $m_bpstandardcomponent = get_option('bpstandardcomponent');

    echo "<br />";

    $setting_panel_head = 'Buddypress Members Only Components Setting:';
    members_only_free_setting_panel_head($setting_panel_head);

    $saved_register_page_url = get_option('bpmoregisterpageurl');

    $bp_component_default_role = array();
    $bp_component_default_role = 'default';
    buddypress_members_setting_panel_free($bp_component_default_role);
}

function buddypress_members_setting_panel_free($bp_component_role)
{
    global $wpdb, $wp_roles;

    $m_bpstandardcomponent = get_option('bpstandardcomponent');

    if (empty($bp_component_role)) {
        $bp_component_role = array();
        $bp_component_role = 'default';
    }

    $bp_component_role_id = str_replace(' ', '-', $bp_component_role);

    $rolebasedstandardcomponent = 'bpstandardcomponent_' . $bp_component_role_id;

    $rolebasedstandardcomponentoption = get_option($rolebasedstandardcomponent);
    ?>
<div class="wrap">
	<div id="dashboard-widgets-wrap">
		<div id="dashboard-widgets" class="metabox-holder">
			<div id="post-body">
				<div id="dashboard-widgets-main-content">
					<div class="postbox-container" style="width: 90%;">
						<div
							class="postbox bp-members-pro-componet-each-role-bar close-bar"
							data-user-role="<?php echo esc_attr($bp_component_role_id); //3.6.3?>">
							<h3 class='hndle'
								style='padding: 10px; ! important; border-bottom: 0px solid #eee !important;'>
	<?php
        if ('default' == $bp_component_role_id) {
            $tomas_roles_single_name = 'default';
            $eachrolestandardcompentname = 'bpstandardcomponent[]';
            $eachrolecustomizedcompentname = 'bpopenedcustomizedcomponent';
            $bpopenedcustomizedcomponentarray = get_option('bpopenedcustomizedcomponent');

            $m_bpstandardcomponent = get_option('bpstandardcomponent');
            $rolebasedstandardcomponentsubmit = 'bpcomponentsubmit';

            echo esc_html__('Restricts These BP Components to -- ', 'bp-members-only') .
                 '<strong>' . esc_html__('Non Members / Guest Users', 'bp-members-only') . '</strong>'; //!!! 3.6.3
        }
    ?>
									</h3>

						</div>
						<div class="inside bp-component-setting postbox"
							style='padding-left: 10px; border-top: 1px solid #eee;'
							id="<?php echo esc_attr($bp_component_role_id); //!!! 3.6.3?>">
							<form id="bpmoform" name="bpmoform" action="" method="POST">
								<table id="bpmotable" width="100%">
									<tr>
										<td width="30%" style="padding: 30px 20px 20px 20px;"
											valign="top">
											<?php
    echo esc_html__('Opened BP Standard Components:', 'bp-members-only'); //!!! 3.6.3
    ?>
											</td>
										<td width="70%" style="padding: 20px;">
											<p>
											<?php
    if ((! (empty($m_bpstandardcomponent))) && (is_array($m_bpstandardcomponent)) && (count($m_bpstandardcomponent) > 0) && (in_array('activity', $m_bpstandardcomponent))) {
        echo '<input type="checkbox" id="bpstandardcomponentactivity" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="activity"  checked="checked"> ' . esc_html__('Buddypress Activity Component', 'bp-members-only'); //!!! 3.6.3
    } else {
        echo '<input type="checkbox" id="bpstandardcomponentactivity" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="activity" > ' . esc_html__('Buddypress Activity Component', 'bp-members-only'); //!!! 3.6.3
    }
    ?>
											</p>
											<p>
											<?php
    if ((! (empty($m_bpstandardcomponent))) && (is_array($m_bpstandardcomponent)) && (count($m_bpstandardcomponent) > 0) && (in_array('members', $m_bpstandardcomponent))) {
        echo '<input type="checkbox" id="bpstandardcomponentmembers" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="members"   checked="checked"> ' . esc_html__('Buddypress Members Component', 'bp-members-only'); //!!! 3.6.3
    } else {
        echo '<input type="checkbox" id="bpstandardcomponentmembers" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="members" > ' . esc_html__('Buddypress Members Component', 'bp-members-only'); //!!! 3.6.3
    }
    ?>
											</p>
											<p>
											 <?php
    if ((! (empty($m_bpstandardcomponent))) && (is_array($m_bpstandardcomponent)) && (count($m_bpstandardcomponent) > 0) && (in_array('profile', $m_bpstandardcomponent))) {
        echo '<input type="checkbox" id="bpstandardcomponentprofile" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="profile" checked="checked"> ' . esc_html__('Buddypress Profile  Component', 'bp-members-only'); //!!! 3.6.3
    } else {
        echo '<input type="checkbox" id="bpstandardcomponentprofile" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="profile" > ' . esc_html__('Buddypress Profile  Component', 'bp-members-only'); //!!! 3.6.3
    }
    ?>
											</p>
											<p>
											 <?php
                                             //!!! 3.2.9
    if ((! (empty($m_bpstandardcomponent))) && (is_array($m_bpstandardcomponent)) && (count($m_bpstandardcomponent) > 0) && (in_array('groups', $m_bpstandardcomponent))) {
        echo '<input type="checkbox" id="bpstandardcomponentgroups" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="groups"  checked="checked"> ' . esc_html__('Buddypress Groups Component', 'bp-members-only'); //!!! 3.6.3
    } else {
        echo '<input type="checkbox" id="bpstandardcomponentgroups" name="' . esc_attr($eachrolestandardcompentname) . '"  style="" value="groups" > ' . esc_html__('Buddypress Groups Component', 'bp-members-only'); //!!! 3.6.3
    }
    ?>
											</p>
											<p>
												<font color="Gray"><i>
											<?php
                                            echo esc_html__('Checked component  will opened to ', 'bp-members-only'); //!!! 3.6.3
    $display_name = ($tomas_roles_single_name === 'default') ? 'guest' : $tomas_roles_single_name;
    echo esc_html($display_name); //!!! 3.6.3
    ?>
											</i>
											</font>
											</p>
										</td>
									</tr>
								</table>
								<br />
											<?php
    wp_nonce_field('bpcomponentsubmitnonce');
    ?>
											<input type="submit" id="bpcomponentsubmit"
									name="<?php echo esc_attr($rolebasedstandardcomponentsubmit); //!!! 3.6.3?>"
									value=" Submit " style="margin: 1px 20px;">
							</form>
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

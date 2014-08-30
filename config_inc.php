<?php
	$g_bug_report_page_fields = array(
          'category_id',
          'handler',
          'priority',
          'product_version',
          'product_build',
          'target_version',
          'summary',
          'description',
          'attachments',
          'due_date',
        ); 
	$g_bug_view_page_fields = array (
					'id',
					'project',
					'category_id',
					'date_submitted',
					'last_updated',
					'reporter',
					'handler',
					'priority',
					'status',
					'projection',
					'eta',
					'summary',
					'description',
					'attachments',
					'due_date',
				);
	$g_bug_update_page_fields = array (
				'id',
				'project',
				'category_id',
				'date_submitted',
				'last_updated',
				'reporter',
				'handler',
				'priority',
				'severity',
				'status',
				'projection',
				'eta',
				'summary',
				'description',
				'attachments',
				'due_date',
				);
	$g_status_icon_arr = array (
		NONE      => 'priority_1.png',
		LOW       => 'priority_2.png',
		NORMAL    => 'priority_3.png',
		HIGH      => 'priority_4.png',
		URGENT    => 'priority_5.png',
		IMMEDIATE => 'priority_6.png'
	);
	
	$g_sort_icon_arr = array (
		ASCENDING  => 'up.png',
		DESCENDING => 'down.png'
	);
	
	$g_reauthentication		= OFF; //Re-authentication required for admin areas

	$g_time_tracking_enabled = ON;
	$g_time_tracking_with_billing =ON;

	$g_short_date_format = 'd-m-y';
	$g_normal_date_format = 'd-m-y H:i';
	$g_complete_date_format = 'd-m-Y H:i'; 

	$g_use_javascript = ON;
	
	$g_login_title_visible = OFF;

	$g_show_avatar = ON;
	$g_show_avatar_threshold = REPORTER;
	$g_default_avatar = "%path%images/no_avatar.png";

	$g_favicon_image="images/favicon.png";

	$g_show_product_version = OFF;
?>

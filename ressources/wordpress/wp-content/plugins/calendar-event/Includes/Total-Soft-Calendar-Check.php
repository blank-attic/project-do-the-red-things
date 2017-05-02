<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	$table_name  = $wpdb->prefix . "totalsoft_fonts";
	$table_name1 = $wpdb->prefix . "totalsoft_cal_1";
	$table_name2 = $wpdb->prefix . "totalsoft_cal_ids";
	$table_name3 = $wpdb->prefix . "totalsoft_cal_events";
	$table_name4 = $wpdb->prefix . "totalsoft_cal_types";
	$table_name5 = $wpdb->prefix . "totalsoft_cal_2";
	$table_name6 = $wpdb->prefix . "totalsoft_cal_events_p2";
	$table_name7 = $wpdb->prefix . "totalsoft_cal_3";
	$table_name8 = $wpdb->prefix . "totalsoft_cal_part";

	$Total_Soft_Cal_Ev_Desc=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE id>%d", 0));

	for($i=0; $i<count($Total_Soft_Cal_Ev_Desc); $i++)
	{
		if(strlen($Total_Soft_Cal_Ev_Desc[$i]->TotalSoftCal_EvDesc)>0 && strpos($Total_Soft_Cal_Ev_Desc[$i]->TotalSoftCal_EvDesc, "&lt;/p&gt;")<=0)
		{
			$Event_Params = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id=%d", $Total_Soft_Cal_Ev_Desc[$i]->TotalSoftCal_EvCal));
			$Cal_Params = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id=%d", $Event_Params[0]->TotalSoftCal_EvCal));

			if($Cal_Params[0]->TotalSoftCal_Type == 'Event Calendar')
			{
				$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftCal_ID = %d", $Cal_Params[0]->id));
				$New_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $TotalSoftCal_Par[0]->TotalSoftCal_08 . '; font-size: ' . $TotalSoftCal_Par[0]->TotalSoftCal_06 . 'px; font-family: ' . $TotalSoftCal_Par[0]->TotalSoftCal_07 . ';">' . str_replace(')*^*(', '"', str_replace(")*&*(", "'", $Total_Soft_Cal_Ev_Desc[$i]->TotalSoftCal_EvDesc)) . '</span></p>'));
			}
			else if($Cal_Params[0]->TotalSoftCal_Type == 'Simple Calendar')
			{
				$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftCal_ID = %d", $Cal_Params[0]->id));
				$New_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $TotalSoftCal_Par[0]->TotalSoftCal2_Ev_DC . '; font-size: ' . $TotalSoftCal_Par[0]->TotalSoftCal2_Ev_DFS . 'px; font-family: ' . $TotalSoftCal_Par[0]->TotalSoftCal2_Ev_DFF . ';">' . str_replace(')*^*(', '"', str_replace(")*&*(", "'", $Total_Soft_Cal_Ev_Desc[$i]->TotalSoftCal_EvDesc)) . '</span></p>'));
			}
			else if($Cal_Params[0]->TotalSoftCal_Type == 'Flexible Calendar')
			{
				$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftCal_ID = %d", $Cal_Params[0]->id));
				$New_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $TotalSoftCal_Par[0]->TotalSoftCal3_Ev_D_C . '; font-size: ' . $TotalSoftCal_Par[0]->TotalSoftCal3_Ev_D_FS . 'px; font-family: ' . $TotalSoftCal_Par[0]->TotalSoftCal3_Ev_D_FF . ';">' . str_replace(')*^*(', '"', str_replace(")*&*(", "'", $Total_Soft_Cal_Ev_Desc[$i]->TotalSoftCal_EvDesc)) . '</span></p>'));
			}

			$wpdb->query($wpdb->prepare("UPDATE $table_name6 set TotalSoftCal_EvDesc=%s WHERE id=%d", $New_Desc, $Total_Soft_Cal_Ev_Desc[$i]->id));
		}
	}
?>
<?php

/*Causes Home Page START*/

function causes_home()
{

  echo "<div style='width:100%;position:relative;top:0;bottom:0' class='mc1inlineContent' id='comp-jteshx9ainlineContent'><div id='comp-jteshx9ainlineContent-gridWrapper'>
  <div id='comp-jteshx9ainlineContent-gridContainer'>
  <div class='userBanner'>
  <div class='container'>
  <h1>FIND A CAUSE HUB</h1>
  <img src='".get_site_url()."/wp-content/plugins/ahubs-woocommerce-subscription-directory/images/location-graphic.jpg'>

  <p>Our prayer hubs are similar to prayer furnaces, prayer burns or prayer rooms. Every prayer hub, though, has the freedom to take on an expression that makes sense for their region. You can find a prayer hub near you by using the interactive directory below. </p>
  </div>
  </div>";
  echo '</div><a href="'.get_site_url().'/findahub/" class="start-hub-btn">Hubs By Region</a></div></div></div></div>';
  echo "<div class='container'> <div class='countryOptiontabList 1256'>";

   global $wpdb;
   $table_name=$wpdb->prefix."register_user";

//ADD ECHO BELOW FOR EACH CAUSE
  echo "<div id='comp-anti-racism' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=anti-racism&country=Anti-Racism%20Hub' target='_self' id='comp-anti-racism' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Anti-Racism Hub</span></a></div>";
  echo "<div id='comp-arts-entertainment' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=arts-entertainment&country=Arts%20and%20Entertainment%20Hub' target='_self' id='comp-arts-entertainment' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Arts & Entertainment Hub</span></a></div>";
  echo "<div id='comp-business-mountain' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=business-mountain&country=Business%20Mountain%20Hub' target='_self' id='comp-business-mountain' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Business Mountain Hub</span></a></div>";
  echo "<div id='comp-child-abuse' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=child-abuse&country=Child%20Abuse%20Hub' target='_self' id='comp-child-abuse' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Child Abuse Hub</span></a></div>";
  echo "<div id='comp-domestic-violence' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=domestic-violence&country=Domestic%20Violence%20Hub' target='_self' id='comp-domestic-violence' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Domestic Violence Hub</span></a></div>";
  echo "<div id='comp-education' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=education&country=Education%20Hub' target='_self' id='comp-education' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Education Hub</span></a></div>";
  echo "<div id='comp-family' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=family&country=Family%20Hub' target='_self' id='comp-family' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Family Hub</span></a></div>";
  echo "<div id='comp-first-nations-airzona' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=first-nations-arizona&country=First%20Nations%20Airzona' target='_self' id='comp-first-nations-arizona' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>First Nations Arizona</span></a></div>";
  echo "<div id='comp-immigration' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=immigration&country=Immigration%20Hub' target='_self' id='comp-immigration' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Immigration Hub</span></a></div>";
  echo "<div id='comp-harvest' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=harvest&country=Harvest%20Hub' target='_self' id='comp-harvest' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Harvest Hub</span></a></div>";
  echo "<div id='comp-healthcare' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=healthcare&country=Healthcare%20Hub' target='_self' id='comp-healthcare' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Healthcare Hub</span></a></div>";
  echo "<div id='comp-human-trafficking' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=human-trafficking&country=Human%20Trafficking%20Hub' target='_self' id='comp-human-trafficking' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Human Trafficking Hub</span></a></div>";
  echo "<div id='comp-marriage ' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=marriage&country=Marriage%20Prayer%20Hub' target='_self' id='comp-marriage' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Marriage Prayer Hub</span></a></div>";
  echo "<div id='comp-media' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=media&country=Media%20Hub' target='_self' id='comp-media' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Media Hub</span></a></div>";
  echo "<div id='comp-mental-illness' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=mental-illness&country=Mental%20Illness%20Hub' target='_self' id='comp-mental-illness' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Mental Illness Hub</span></a></div>";
  echo "<div id='comp-missions' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=missions&country=Missions%20Hub' target='_self' id='comp-missions' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Missions Hub</span></a></div>";
  echo "<div id='comp-prison' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=prison&country=Prison%20Hub' target='_self' id='comp-prison' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Prison Hub</span></a></div>";
  echo "<div id='comp-government' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=government&country=Goverment%20Hub' target='_self' id='comp-government' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Goverment Hub</span></a></div>";
  echo "<div id='comp-pro-life' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=pro-life&country=Pro-Life%20Hub' target='_self' id='comp-pro-life' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Pro-Life Hub</span></a></div>";
  echo "<div id='comp-prodigals' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=prodigals&country=Prodigals%20Hub' target='_self' id='comp-prodigals' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Prodigals Hub</span></a></div>";
  echo "<div id='comp-military' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=military&country=Military%20Hub' target='_self' id='comp-military' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Military Hub</span></a></div>";
  echo "<div id='comp-substance' class='countryOptiontab '><a href='".get_site_url()."/cause-based-hubs/hubs-by-cause/?nearbycity=substance&country=Substance%20Abuse' target='_self' id='comp-substance' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Substance Abuse Hub</span></a></div>";




//ADD TO CSV LIST COUNTRIES THAT ARE PART OF A REGION
   $results = $wpdb->get_results( "SELECT * FROM $table_name where subscription_status='active'

     and causes NOT IN (
        'anti-racism'
        ,'arts-entertainment'
        ,'business-mountain'
        ,'child-abuse'
        ,'domestic-violence'
        ,'education'
        ,'family'
        ,'first-nations-arizona'
        ,'immigration'
        ,'harvest'
        ,'healthcare'
        ,'human-trafficking'
        ,'marriage'
        ,'media'
        ,'mental-illness'
        ,'missions'
        ,'prison'
        ,'government'
        ,'pro-life'
        ,'prodigals'
        ,'military'
        ,'substance'
        )
    GROUP BY causes ORDER BY id ASC");

}

add_shortcode('causes_home','causes_home');

/*Causes Home Page END */


/*Per Cause Page START*/
function cause_page()
  {
    $causeTitle = $_GET['country'];
    echo '<div id="location-banner" class="location-banner">
    <div class="container">
    <h2>'.$causeTitle.'</h2>
    </div>
    </div>';

    global $wpdb;
    $table_name=$wpdb->prefix."register_user";
    $usstatval = explode(",",$_GET['nearbycity']);
    $results = $wpdb->get_results( "SELECT * FROM $table_name where subscription_status='active' AND cause='".$_GET['nearbycity']."' GROUP BY billing_email   ORDER BY id DESC "  );
          echo '<div class="LocationnearByList"><div class="container" ><div class="Location-row">';


             foreach($results as $result)
            {

            $uemail =$result->billing_email;
             $aw_email = explode('@',$uemail);
             if($aw_email[1] == 'awakeningprayerhubs.com' || $aw_email[1] == 'awakeingprayerhubs.com'){

              $order = wc_get_order( $result->order_id );
              $items = $order->get_items();
                 foreach ( $items as $item ) {
                  $proid[] = $item->get_product_id();
                 }
                 if (!in_array("114686,186", $proid)){
             echo '<div class="location-col-sm-4"><div class="location-list-box">
                    <h4>'. $result->billing_first_name.' '.$result->billing_last_name.'</h4>
                    <p>'.$result->billing_state.'</p>
                    <p><a class="change-text" data-value="'.$result->billing_email.'">Click To Show Email</a></p>
                  </div></div>';
                    // }
               }
           }
            }
            echo '</div></div></div>';
            }

add_shortcode('cause_page','cause_page');

/*Page for each Cause END*/


/*Cause Selector Shortcode*/



function select_hub_cause()
{
  global $wpdb;
  $userID = get_current_user_id();

  if( isset( $_POST["CauseVAR"] ) ) {
    $causeVar = $_POST["CauseVAR"];
    $wpdb->query($wpdb->prepare( "UPDATE ahubs_com.wp_register_user SET cause = %s where user_id = %d", $causeVar, $userID));
  }
  
  $cause_array = array(
      "anti-racism"=>"Anti-Racism Hub",
      "arts-entertainment"=>"Arts & Entertainment Hub",
      "business-mountain"=>"Business Mountain Hub",
      "child-abuse"=>"Child Abuse Hub",
      "domestic-violence"=>"Domestic Violence Hub",
      "education"=>"Education Hub",
      "family"=>"Family Hub",
      "first-nations-arizona"=>"First Nations Arizona",
      "immigration"=>"Immigration Hub",
      "harvest"=>"Harvest Hub",
      "healthcare"=>"Healthcare Hub",
      "human-trafficking"=>"Human Trafficking Hub",
      "marriage"=>"Marriage Prayer Hub",
      "media"=>"Media Hub",
      "mental-illness"=>"Mental Illness Hub",
      "missions"=>"Missions Hub",
      "prison"=>"Prison Hub",
      "government"=>"Government Hub",
      "pro-life"=>"Pro-Life Hub",
      "prodigals"=>"Prodigals Hub",
      "military"=>"Military Hub",
      "substance"=>"Substance Abuse Hub"
    );
  
  $cause_menu = '<form name="Cause" method="POST"><select name="CauseVAR" onchange="submit()">';
  $default_cause = '';
  
  $results = $wpdb->get_results("SELECT cause FROM ahubs_com.wp_register_user where subscription_status = 'active' and user_id = ". $userID );

  
  foreach ($results as $row) {
    if($row->cause == ''){
      $cause_menu .= '<option value="" selected disabled hidden>Choose Your Prayer Cause</option>';
      $cmenu_lable = '<h5>You Currently Have No Prayer Cause Selected</h5>';
    }
    else{
      $default_cause = $row->cause;
      $cmenu_lable = '<h5>Current Prayer Cause: '.$cause_array[$default_cause].'</h5>';
    }

  }

  foreach ($cause_array as $k => $v){
    if ($default_cause == $k && $default_cause != ''){
    $cause_menu2 .= '<option hidden selected> -- Change Cause -- </option><option value="'.$k.'">'.$cause_array[$k].'</option>';
    }
    else{
    $cause_menu2 .= '<option value="'.$k.'">'.$cause_array[$k].'</option>';
    }
  }

  if (!str_contains($cause_menu2,'selected')){
    $cause_menu .= '<option hidden selected> -- Select a Cause -- </option>'.$cause_menu2.'</select></form>';
  }
  else{
    $cause_menu .= $cause_menu2.'</select></form>';
  }

  return '<div>'.$cmenu_lable.$cause_menu.'</div>';
}

add_shortcode('leader_cause_selection','select_hub_cause');

?>
<?php

/*Causes Code Below*/

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
  </div>
  <div class='container'> <div class='countryOptiontabList 1256'>";

   global $wpdb;
   $table_name=$wpdb->prefix."register_user";

//ADD ECHO BELOW FOR EACH CAUSE
  echo "<div id='comp-anti-racism' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=anti-racism&country=Anti-Racism%20Hub' target='_self' id='comp-anti-racism' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Anti-Racism Hub</span></a></div>";
  echo "<div id='comp-arts-entertainment' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=arts-entertainment&country=Arts%20and%20Entertainment%20Hub' target='_self' id='comp-arts-entertainment' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Arts & Entertainment Hub</span></a></div>";
  echo "<div id='comp-business-mountain' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=business-mountain&country=Business%20Mountain%20Hub' target='_self' id='comp-business-mountain' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Business Mountain Hub</span></a></div>";
  echo "<div id='comp-child-abuse' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=child-abuse&country=Child%20Abuse%20Hub' target='_self' id='comp-child-abuse' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Child Abuse Hub</span></a></div>";
  echo "<div id='comp-domestic-violence' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=domestic-violence&country=Domestic%20Violence%20Hub' target='_self' id='comp-domestic-violence' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Domestic Violence Hub</span></a></div>";
  echo "<div id='comp-education' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=education&country=Education%20Hub' target='_self' id='comp-education' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Education Hub</span></a></div>";
  echo "<div id='comp-family' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=family&country=Family%20Hub' target='_self' id='comp-family' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Family Hub</span></a></div>";
  echo "<div id='comp-immigration' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=immigration&country=Immigration%20Hub' target='_self' id='comp-immigration' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Immigration Hub</span></a></div>";
  echo "<div id='comp-harvest' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=harvest&country=Harvest%20Hub' target='_self' id='comp-harvest' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Harvest Hub</span></a></div>";
  echo "<div id='comp-healthcare' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=healthcare&country=Healthcare%20Hub' target='_self' id='comp-healthcare' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Healthcare Hub</span></a></div>";
  echo "<div id='comp-human-trafficking' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=human-trafficking&country=Human%20Trafficking%20Hub' target='_self' id='comp-human-trafficking' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Human Trafficking Hub</span></a></div>";
  echo "<div id='comp-media' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=media&country=Media%20Hub' target='_self' id='comp-media' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Media Hub</span></a></div>";
  echo "<div id='comp-mental-illness' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=mental-illness&country=Mental%20Illness%20Hub' target='_self' id='comp-mental-illness' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Mental Illness Hub</span></a></div>";
  echo "<div id='comp-missions' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=missions&country=Missions%20Hub' target='_self' id='comp-missions' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Missions Hub</span></a></div>";
  echo "<div id='comp-prison' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=prison&country=Prison%20Hub' target='_self' id='comp-prison' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Prison Hub</span></a></div>";
  echo "<div id='comp-government' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=government&country=Goverment%20Hub' target='_self' id='comp-government' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Goverment Hub</span></a></div>";
  echo "<div id='comp-pro-life' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=pro-life&country=Pro-Life%20Hub' target='_self' id='comp-pro-life' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Pro-Life Hub</span></a></div>";
  echo "<div id='comp-prodigals' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=prodigals&country=Prodigals%20Hub' target='_self' id='comp-prodigals' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Prodigals Hub</span></a></div>";
  echo "<div id='comp-military' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=military&country=Military%20Hub' target='_self' id='comp-military' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Military Hub</span></a></div>";




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
        ,'immigration'
        ,'harvest'
        ,'healthcare'
        ,'human-trafficking'
        ,'media'
        ,'mental-illness'
        ,'missions'
        ,'prison'
        ,'government'
        ,'pro-life'
        ,'prodigals'
        ,'military'
        )
    GROUP BY causes ORDER BY id ASC");
  foreach($results as $row)
        {
            echo "<div id='comp-".$row->cause."' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=".$row->cause."&country=".$row->billing_country."' target='_self' id='comp-".$row->cause."' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>".$row->cause."</span></a></div>";
        }
}
  echo '</div><a href="'.get_site_url().'/prayer-hub-options/" class="start-hub-btn">Start a hub</a></div></div></div></div>';

add_shortcode('causes_home','causes_home');
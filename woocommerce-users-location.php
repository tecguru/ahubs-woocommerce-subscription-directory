<?php
/*
 Plugin Name: Woocommerce Subscription Directory
 Version: 3.4.2
 Author: TecGuru
 Description: Location Based on Subscriptions
*/
defined('ABSPATH') or die('No script kiddies please!');
?>

<?php
/*
//UK Country Selector


// Enqueue the custom checkout script
add_action( 'wp_enqueue_scripts', 'my_custom_checkout_script' );
function my_custom_checkout_script() {
    // Load the checkout script only on the checkout page
    if ( is_checkout() ) {
        wp_enqueue_script( 'my-custom-checkout-script', plugin_dir_url( __FILE__ ) . 'js/custom-checkout.js', array( 'jquery' ), '1.0', true );
    }
}


// Add custom checkout field for UK customers
add_filter( 'woocommerce_checkout_fields', 'add_custom_checkout_field_uk' );
function add_custom_checkout_field_uk( $fields ) {
    $fields['billing']['uk_field'] = array(
        'type' => 'select',
        'label' => __( 'Select Your UK Country', 'woocommerce' ),
        'required' => false,
        'options' => array(
            '' => __( 'Select an option', 'woocommerce' ),
            'England' => __( 'England', 'woocommerce' ),
            'Scotland' => __( 'Scotland', 'woocommerce' ),
            'Wales' => __( 'Wales', 'woocommerce' ),
            'RepublicofIreland' => __( 'Republic of Ireland', 'woocommerce' ),
            'NorthernIreland' => __( 'Northern Ireland ', 'woocommerce' ),
        ),
        'class' => array( 'form-row-wide' ),
        'clear' => true
    );
    return $fields;
}

// Save custom checkout field data to postmeta
add_action( 'woocommerce_checkout_create_order', 'save_custom_checkout_field_uk', 10, 2 );
function save_custom_checkout_field_uk( $order, $data ) {
    if ( isset( $data['billing']['uk_field'] ) && ! empty( $data['billing']['uk_field'] ) ) {
        $order->update_meta_data( 'uk_field', sanitize_text_field( $data['billing']['uk_field'] ) );
    }
}

// Make the custom field required if the user's country is UK
add_filter( 'woocommerce_checkout_fields', 'make_uk_field_required' );
function make_uk_field_required( $fields ) {
    if ( isset( $fields['billing']['uk_field'] ) && ! empty( $fields['billing']['uk_field'] ) ) {
        $fields['billing']['uk_field']['required'] = ( WC()->customer->get_billing_country() === 'GB' ) ? true : false;
    }
    return $fields;
};

*/

//Edit Regional Leaders Below
$africaLeader ='<div class="r_leader"><h3>Africa</h3><h4>Angela Jennings</h4><h4>capetown@awakeningprayerhubs.com</h4><br></div>';
$asiaLeader='<div class="r_leader"><h3>Asia Pacific</h3><h4>Daisy Wardani</h4><h4>jakartaselatan@awakeningprayerhubs.com</h4><br></div>';
$caribbeanLeader='<div class="r_leader"><h3>Caribbean</h3><h4>Joy Parkman</h4><h4>birmingham@awakeningprayerhubs.com</h4><br></div>';
$canadaLeader='<div class="r_leader"><h3>Canada</h3><h4>Jennifer LeClaire</h4><h4>canada@awakeningprayerhubs.com</h4><br></div>';
$europeLeader='<div class="r_leader"><h3>Europe + UK</h3><h4>Jennifer LeClaire</h4><rb><h4>europe@awakeningprayerhubs.com</h4><br></div>';
$latinAmericaLeader='<div class="r_leader">
<h3>Latin America</h3>
<h4>Jennifer LeClaire</h4>
<h4>latinamerica@awakeningprayerhubs.com</h4>
<br></div>';
$scandanaviaLeader='<div class="r_leader"><h3>Scandinavia</h3><h4>Jennifer LeClaire</h4><h4>europe@awakeningprayerhubs.com</h4><br></div>';
$oceanaLeader ='<div class="r_leader"><h3>Oceana</h3><h4>Jennifer LeClaire</h4><h4>oceana@awakeningprayerhubs.com</h4><br></div>';
$usSouthLeader='<div class="r_leader"><h3>US South</h3><h4>Joy Parkman</h4><h4>birmingham@awakeninghouseofprayer.com</h4><br></div>';
$usNortheastLeader='<div class="r_leader"><h3>US northeast</h3><h4>Audra Moodley</h4><h4>sidney@awakeningprayerhubs.com</h4><br></div>';
$usMidwestLeader='<div class="r_leader">
<center><h3>East Midwest Leader</h3>
<h4>Michigan, Indiana, Ohio, Kentucky</h4>
<h4>Audra Moodley</h4>
<h4>sidney@awakeningprayerhubs.com</h4>
<br>
<h3>Central Midwest Leader</h3>
<h4>North and South Dakota, Iowa, Minnesota, Missouri, Wisconsin, Illinois, Nebraska and Kansas</h4>
<h4>Teanne Lopez</h4>
<h4>dallas2@awakeningprayerhubs.com</h4>
<br>
<h3>Mountain Midwest Leader</h3>
<h4>Montana, Idaho, Wyoming</h4>
<h4>Annette Kotsay-Osen</h4>
<h4>denver@awakeningprayerhubs.com</h4></div>';

$usWestLeader=
'<div class="r_leader">
<center><h3>US West Leaders</h3>
<br>
<h3>West Pacific: Ray and Lidia Gunaka</h3>
<h4>California, Nevada, Oregon, Washington</h4>
<h4>santaclarita@awakeningprayerhubs.com</h4>
<br>
<h3>West Mountain: Annette Kotsay-Osen</h3>
<h4>Arizona, Idaho, New Mexico, Utah, Colorado, Wyoming, Montana</h4>
<h4>denver@awakeningprayerhubs.com</h4>
<br>
<h3>West Central: Teanne Lopez</h3>
<h4>Arkansas, Oklahoma, Texas, Hawaii, Alaska</h4>
<h4>dallas2@awakeningprayerhubs.com</h4><br></center></div>';

function wul_wp_api()
{
  wp_enqueue_style( 'wul-wp-api-css', plugins_url( '/css/main.css', __FILE__ ));
  wp_enqueue_script( 'wul-wp-api-js', plugins_url( '/js/custom.js', __FILE__ ));
  wp_enqueue_script( 'wul-wp-api-js-parallax', plugins_url( '/js/jquery.parallax-1.1.3.js', __FILE__ ));
}
add_action('wp_enqueue_scripts', 'wul_wp_api',999);


//DISPLAY MAIN PAGE FOR DIRECTORY WITH COUNTRY/REGION LIST
function near_by_location()
{

  echo "<div style='width:100%;position:relative;top:0;bottom:0' class='mc1inlineContent' id='comp-jteshx9ainlineContent'><div id='comp-jteshx9ainlineContent-gridWrapper'>
  <div id='comp-jteshx9ainlineContent-gridContainer'>
  <div class='userBanner'>
  <div class='container'>
  <h1>FIND A PRAYER HUB</h1>
  <img src='".get_site_url()."/wp-content/plugins/ahubs-woocommerce-subscription-directory/images/location-graphic.jpg'>

  <p>Our prayer hubs are similar to prayer furnaces, prayer burns or prayer rooms. Every prayer hub, though, has the freedom to take on an expression that makes sense for their region. You can find a prayer hub near you by using the interactive directory below. </p>
  </div>
  </div>";
  echo '</div><a href="'.get_site_url().'/cause-based-hubs/" class="start-hub-btn">Hubs By Cause</a></div></div></div></div>';
  echo "<div class='container'> <div class='countryOptiontabList 1256'>";



   global $wpdb;
   $table_name=$wpdb->prefix."register_user";



//ADD ECHO BELOW FOR EACH REGION
  echo "<div id='comp-africa' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=AFRICA&country=Africa' target='_self' id='comp-africa' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>AFRICA</span></a></div>";
  echo "<div id='comp-asia' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=ASIA&country=Asia' target='_self' id='comp-asia' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>ASIA</span></a></div>";
  echo "<div id='comp-canada' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=CA&country=Canada' target='_self' id='comp-canada' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>CANADA</span></a></div>";
  echo "<div id='comp-caribbean' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=CARIBBEAN&country=Caribbean' target='_self' id='comp-caribbean' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>CARIBBEAN</span></a></div>";
  echo "<div id='comp-europe' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=EUROPE&country=Europe' target='_self' id='comp-europe' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>EUROPE</span></a></div>";
  echo "<div id='comp-latin-america' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=LATIN-AMERICA&country=Latin%20America' target='_self' id='comp-latin-america' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>LATIN AMERICA</span></a></div>";
  echo "<div id='comp-scandanavia' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=SCANDANAVIA&country=Scandinavia' target='_self' id='comp-scandanavia' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>SCANDANAVIA</span></a></div>";
  echo "<div id='comp-middle-east' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=MIDDLE-EAST&country=Middle East' target='_self' id='comp-middle-east' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Middle East</span></a></div>";
  echo "<div id='comp-oceana' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=OCEANA&country=Oceana' target='_self' id='comp-oceana' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>Oceana</span></a></div>";


//ADD TO CSV LIST COUNTRIES THAT ARE PART OF A REGION
   $results = $wpdb->get_results( "SELECT * FROM $table_name where subscription_status='active'

     and billing_country NOT IN (
      'AE',
      'AL', /*Albania*/
      'AR',/*Argentina*/
      'AS',
      'AT',
      'AU',
      'BB',/*Barbados*/
      'BD', /*Bangladesh*/
      'BG', /*Bulgaria*/
      'BJ', /*Benin*/
      'BR',
      'BM', /*Bermuda*/
      'BN', /*Brunei*/
      'BO',
      'BS',
      'BW',
      'BZ', /*Belize*/
      'CA', /*Canada*/
      'CD',/*Congo (Kinshasa)*/
      'CH',
      'CI', /* Ivory Coast */
      'CL', /*Chile*/
      'CN', /*China*/
      'CM', /*Cameroon*/
      'CO',
      'CR', /*Costa Rica*/
      'CU',
      'CZ', /*Czech Republic*/
      'DE',
      'DK',
      'DO',
      'EC', #Ecuador
      'EE',
      'EG', #Egypt
      'ES',
      'ET',/*Ethiopia*/
      'FI',
      'FO',/*Faroe Islands*/
      'FJ', /*Fiji*/
      'FR',
      'GB',
      'GH',
      'GT',
      'GU',
      'GY',
      'HR', /*Croatia*/
      'HT', /*HAITI*/
      'HK', /*Hong Kong*/
      'HN', /*Honduras*/
      'ID',
      'IL',
      'IR', /*Iran*/
      'IS',
      'IT', /*Italy*/
      'IN',
      'JM', /*Jamaica*/
      'JP',
      'KE', /*Kenya*/
      'KH', /*Cambodia*/
      'KR', /*South Korea*/
      'LB', /*Lebanon*/
      'LK', /*Sri Lanka*/
      'LT',/*Lithuania*/
      'LV',
      'MG', /*Madagascar*/
      'MP',
      'MW', /*Malawi*/
      'MX',
      'MU', #Mauritius
      'MY',
      'NA', #Namibia
      'NG',
      'NI', /*Nicaragua*/
      'NP',
      'NL',
      'NO',
      'NZ',
      'PE',
      'PG', #Papua New Guinea
      'PH',
      'PK', /*Pakistan*/
      'PL', /*Poland*/
      'PR',
      'PT', /*Portugal*/
      'RO', /*Romania*/
      'RS', /*Serbia*/
      'RW', /*Rwanda*/
      'SA',
      'SCANDANAVIA',
      'SE',
      'SG',
      'SL', /*Sierra Leone*/
      'SR', /*Suriname*/
      'SS', /*South Sudan*/
      'SV', /*El Salvador*/
      'SZ', /*Eswatini*/
      'TG', /*Togo*/
      'TH', /*Thailand*/
      'TR', /*Turkey*/
      'TT',
      'TJ',
      'TZ', /*Tanzania*/
      'TW',
      'UG',
      'VI',
      'VE',
      'VN',
      'ZA',
      'ZM',
      'ZW'
      )
    GROUP BY billing_country ORDER BY id ASC");
  foreach($results as $row)
    {

      if(WC()->countries->countries[$row->billing_country]!='')
        {
            echo "<div id='comp-".$row->billing_country."' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=".$row->billing_country."&country=".WC()->countries->countries[$row->billing_country]."' target='_self' id='comp-".$row->billing_country."' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>".WC()->countries->countries[$row->billing_country]."</span></a></div>";
        }
    }
  echo '</div><a href="'.get_site_url().'/prayer-hub-options/" class="start-hub-btn">Start a hub</a></div></div></div></div>';

}
add_shortcode('near_by_location','near_by_location');


//DISPLAY STATE PAGES
function near_by_location_city()
  {
   global $usSouthLeader,$usNortheastLeader,$usMidwestLeader,$usWestLeader,$africaLeader,$latinAmericaLeader, $scandanaviaLeader,$asiaLeader,$europeLeader;

      if($_GET['nearby']){
        if($_GET['regions']=='South'){
          echo $usSouthLeader;

          } else if($_GET['regions']=='Northeast'){
            echo $usNortheastLeader;

          } else if($_GET['regions']=='Midwest'){
            echo $usMidwestLeader;

          } else if($_GET['regions']=='West'){
            echo $usWestLeader;
          }
         global $wpdb;
         $table_name=$wpdb->prefix."register_user";
      // $table_name=st_register_user;
          $usstatval = explode(",",$_GET['nearby']);
           echo '<div class="LocationnearByList"><div class="container" style="padding-top:30px;"><div class="Location-row">';
                  foreach($usstatval as $stateus)
          {
                 $results = $wpdb->get_results( "SELECT * FROM $table_name where  subscription_status='active' AND billing_state='".$stateus."' AND billing_country='US' GROUP BY billing_email  ORDER BY id ASC " );

           //echo "<pre>";
          // print_r($results);
              if(!empty($results))                        // Checking if $results have some values or not
                {
                   foreach($results as $row){
              $uemail =$row->billing_email;
               $aw_email = explode('@',$uemail);
               if($aw_email[1] == 'awakeningprayerhubs.com' || $aw_email[1] == 'awakeingprayerhubs.com'){
             if($row->billing_country=='US'){
                $order = wc_get_order( $row->order_id );
                $items = $order->get_items();
                $proid = array();
              foreach ( $items as $item ) {
                  $proid[] = $item->get_product_id();
                 }


                 if (!in_array("114686,186", $proid)){
              //if($item->get_product_id()!=114686 && $item->get_product_id()!=186){


                    echo '<div class="location-col-sm-4"><div class="location-list-box">
                          <h4>'.$row->billing_first_name.' '. $row->billing_last_name.'</h4>
                          <h6>'.$stateus.'</h6>

                          <p>'.$row->billing_city.'</p>
                          <p><a class="change-text" data-value="'.$row->billing_email.'">Click To Show Email</a></p>
                        </div></div>';
                         }

              }
           }
                 }
              }
        }
      echo '</div></div></div>';


      }

        if($_GET['nearbycity']){

        $billing_countrys = array();
        $billing_citys = array();

       global $wpdb;

       $table_name=$wpdb->prefix."register_user";
          $usstatval = explode(",",$_GET['nearbycity']);
          $results = $wpdb->get_results( "SELECT * FROM $table_name where subscription_status='active' AND billing_city='".$_GET['nearbycity']."' AND billing_country='".$_GET['country']."' GROUP BY billing_email   ORDER BY id DESC "  );
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
                    <h6>'.$usstatval[0].'</h6>
                    <p>'.$result->billing_state.'</p>
                    <p><a class="change-text" data-value="'.$result->billing_email.'">Click To Show Email</a></p>
                  </div></div>';
                    // }
               }
           }
            }
            echo '</div></div></div>';
            }
  }
add_shortcode('near_by_location_city','near_by_location_city');


//CREATES REGION PAGES AND CITY PAGES
function get_user_city()
  {
global $africaLeader,$scandanaviaLeader,$asiaLeader,$europeLeader,$latinAmericaLeader, $oceanaLeader,$caribbeanLeader,$canadaLeader;

 if($_GET['region']){
        $billing_country_name = $_GET['country'];
        $billing_country_name_city = $_GET['region'];
        $billing_citys = array();
        $billing_states = array();

        if ($billing_country_name_city == 'AFRICA'){
          echo $africaLeader;
        }
        if ($billing_country_name_city == 'ASIA'){
          echo $asiaLeader;
        }
        if ($billing_country_name_city == 'CARIBBEAN'){
          echo $caribbeanLeader;
        }
        if ($billing_country_name_city == 'CA'){
          echo $canadaLeader;
        }
        if ($billing_country_name_city == 'EUROPE'){
          echo $europeLeader;
        }
        if ($billing_country_name_city == 'LATIN-AMERICA'){
          echo $latinAmericaLeader;
        }
        if ($billing_country_name_city == 'SCANDANAVIA'){
          echo $scandanaviaLeader;
        }
        if ($billing_country_name_city == 'OCEANA'){
          echo $oceanaLeader;
        }


    global $wpdb;
$table_name=$wpdb->prefix."register_user";
    if( $_GET['region'] == 'US'){
     echo $_GET['region'];
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
  </div>
  <div class="container"> <div class="countryOptiontabList">';

      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/near-by-city/?nearby=AL,DC,FL,GA,LA,MS,NC,SC,TN,VA,WV &country=US &regions=South" target="_self">South</a><p><span style="font-size:12px;">( AL, DC, FL, GA, LA, MS, NC, SC, TN, VA, WV )</span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/near-by-city/?nearby=CT,DE,MA,MD,ME,NH,NJ,NY,PA,RI,VT &country=US &regions=Northeast" target="_self">Northeast</a><p><span style="font-size:12px;">( CT, DE, MA, MD, ME, NH, NJ, NY, PA, RI, VT )</span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/near-by-city/?nearby=IA,IL,IN,KS,KY,MI,MN,MO,ND,NE,OH,SD,WI &country=US &regions=Midwest" target="_self">Midwest</a><p><span style="font-size:12px;">( IA, IL, IN, KS, KY, MI, MN, MO, ND, NE, OH, SD, WI )</span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/near-by-city/?nearby=AR,AK,AZ,CA,CO,HI,ID,MT,NM,NV,OK,OR,TX,UT,WA,WY &country=US &regions=West" target="_self">West</a><p><span style="font-size:12px;">( AR, AK, AZ, CA, CO, HI, ID, MT, NM, NV, OK, OR, TX, UT, WA, WY )</span></p></div>';
      echo "<div id='comp-usterritories' class='countryOptiontab '><a href='".get_site_url()."/location-map/?region=US-TERRITORIES&country=US Territories' target='_self' id='comp-usterritories' class='g-transparent-a style-jteshxcwlink'><span id='comp-jteshxcplabel' class='style-jteshxcwlabel'>US Territories</span></a></div>";
  #    echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=VI&country=Virgin Islands" target="_self">Virgin Islands</a><p><span style="font-size:12px;">( VI )</span></p></div>';
    }

//ADD else if statement for each region

else if( $billing_country_name_city == 'US-TERRITORIES'){
  echo '<div id="location-banner" class="location-banner">
     <div class="container">
     <h2>'.$billing_country_name.'</h2>
     </div>
</div>
<div class="container"> <div class="countryOptiontabList">';
  echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=AS&country=American Samoa" target="_self">American Samoa</a><p><span style="font-size:12px;"></span></p></div>';
  echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=GU&country=Guam" target="_self">Guam</a><p><span style="font-size:12px;"></span></p></div>';
  echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=MP&country=Northern Mariana Islands" target="_self">Northern Mariana Islands</a><p><span style="font-size:12px;"></span></p></div>';
  echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PR&country=Puerto Rico" target="_self">Puerto Rico</a><p><span style="font-size:12px;"></span></p></div>';
  echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=VI&country=US Virgin Islands" target="_self">US Virgin Islands</a><p><span style="font-size:12px;"></span></p></div>';
}


    else if( $billing_country_name_city == 'AFRICA'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BJ&country=Benin" target="_self">Benin</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BW&country=Botswana" target="_self">Botswana</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CD&country=Congo (Kinshasa)" target="_self">Congo (Kinshasa)</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CM&country=Cameroon" target="_self">Cameroon</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=EG&country=Egypt" target="_self">Egypt</a><p><span style="font-size:12px;"></span></p></div>';      
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=ET&country=Ethiopia" target="_self">Ethiopia</a><p><span style="font-size:12px;"></span></p></div>';      
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SZ&country=Eswatini" target="_self">Eswatini</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=GH&country=Ghana" target="_self">Ghana</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CI&country=Ivory Coast" target="_self">Ivory Coast</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=KE&country=Kenya" target="_self">Kenya</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=MG&country=Madagascar" target="_self">Madagascar</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=MW&country=Malawi" target="_self">Malawi</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=MU&country=Mauritius" target="_self">Mauritius</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NA&country=Namibia" target="_self">Namibia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NG&country=Nigeria" target="_self">Nigeria</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=RW&country=Rwanda" target="_self">Rwanda</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SL&country=Sierra Leone" target="_self">Sierra Leone</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=ZA&country=South Africa" target="_self">South Africa</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SS&country=South Sudan" target="_self">South Sudan</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=TZ&country=Tanzania" target="_self">Tanzania</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=TG&country=Togo" target="_self">Togo</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=UG&country=Uganda" target="_self">Uganda</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=ZM&country=Zambia" target="_self">Zambia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=ZW&country=Zimbabwe" target="_self">Zimbabwe</a><p><span style="font-size:12px;"></span></p></div>';
    }

    else if( $billing_country_name_city == 'ASIA'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BD&country=Bangladesh" target="_self">Bangladesh</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BN&country=Brunei" target="_self">Brunei</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CN&country=China" target="_self">China</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=HK&country=Hong Kong" target="_self">Hong Kong</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=IN&country=India" target="_self">India</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=ID&country=Indonesia" target="_self">Indonesia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=JP&country=Japan" target="_self">Japan</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=KH&country=Cambodia" target="_self">Cambodia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=LB&country=Lebanon" target="_self">Lebanon</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=MY&country=Malaysia" target="_self">Malaysia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NP&country=Nepal" target="_self">Nepal</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PK&country=Pakistan" target="_self">Pakistan</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PH&country=Philippines" target="_self">Philippines</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SG&country=Singapore" target="_self">Singapore</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=LK&country=Sri Lanka" target="_self">Sri Lanka</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=KR&country=South Korea" target="_self">South Korea</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=TW&country=Taiwan" target="_self">Taiwan</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=Tj&country=Tajikistan" target="_self">Tajikistan</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=TH&country=Thailand" target="_self">Thailand</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=TR&country=Turkey" target="_self">Turkey</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=VN&country=Vietnam" target="_self">Vietnam</a><p><span style="font-size:12px;"></span></p></div>';

    }

    else if( $billing_country_name_city == 'CARIBBEAN'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BS&country=Bahamas" target="_self">Bahamas</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BM&country=Bermuda" target="_self">Bermuda</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BB&country=Barbados" target="_self">Barbados</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=DO&country=Dominican Republic" target="_self">Dominican Republic</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CR&country=Costa Rica" target="_self">Costa Rica</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CU&country=Cuba" target="_self">Cuba</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=GY&country=Guyana" target="_self">Guyana</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=HT&country=Haiti" target="_self">Haiti</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=JM&country=Jamaica" target="_self">Jamaica</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PR&country=Puerto Rico " target="_self">Puerto Rico </a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=TT&country=Trinidad" target="_self">Trinidad & Tobago</a><p><span style="font-size:12px;"></span></p></div>';
    }

    else if( $billing_country_name_city == 'EUROPE'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=AL&country=Albania" target="_self">Albania</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=AT&country=Austria" target="_self">Austria</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BG&country=Bulgaria" target="_self">Bulgaria</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=HR&country=Croatia" target="_self">Croatia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CZ&country=Czech Republic" target="_self">Czech Republic</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=EE&country=Estonia" target="_self">Estonia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=FO&country=Faroe Islands" target="_self">Faroe Islands</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=FR&country=France" target="_self">France</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=DE&country=Germany" target="_self">Germany</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=IT&country=Italy" target="_self">Italy</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=LV&country=Latvia" target="_self">Latvia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=LT&country=Lithuania" target="_self">Lithuania</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NL&country=Netherlands" target="_self">Netherlands</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PT&country=Portugal" target="_self">Portugal</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PL&country=Poland" target="_self">Poland</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=RO&country=Romania" target="_self">Romania</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SCANDANAVIA&country=Scandanavia" target="_self">Scandanavia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=RS&country=Serbia" target="_self">Serbia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=ES&country=Spain" target="_self">Spain</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CH&country=Switzerland" target="_self">Switzerland</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=GB&country=United Kingdom" target="_self">United Kingdom</a><p><span style="font-size:12px;"></span></p></div>';
    }

    else if( $billing_country_name_city == 'LATIN-AMERICA'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=AR&country=Argentina" target="_self">Argentina</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BZ&country=Belize" target="_self">Belize</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BR&country=Brazil" target="_self">Brazil</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=BO&country=Bolivia" target="_self">Bolivia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CL&country=Chile" target="_self">Chile</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=CO&country=Colombia" target="_self">Colombia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=EC&country=Ecuador" target="_self">Ecuador</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SV&country=El Salvador" target="_self">El Salvador</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=GT&country=Guatemala" target="_self">Guatemala</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=HN&country=Honduras" target="_self">Honduras</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=MX&country=Mexico" target="_self">Mexico</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NI&country=Nicaragua" target="_self">Nicaragua</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PE&country=Peru" target="_self">Peru</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SR&country=Suriname" target="_self">Suriname</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=VE&country=Venezuela" target="_self">Venezuela</a><p><span style="font-size:12px;"></span></p></div>';
    }

    else if( $billing_country_name_city == 'SCANDANAVIA'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=IS&country=Iceland" target="_self">Iceland</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NO&country=Norway" target="_self">Norway</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=DK&country=Denmark" target="_self">Denmark</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SE&country=Sweden" target="_self">Sweden</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=FI&country=Finland" target="_self">Finland</a><p><span style="font-size:12px;"></span></p></div>';
    }

    else if( $billing_country_name_city == 'MIDDLE-EAST'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=AE&country=United Arab Emirates" target="_self">United Arab Emirates</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=EG&country=Egypt" target="_self">Egypt</a><p><span style="font-size:12px;"></span></p></div>';      
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=SA&country=Saudi Arabia" target="_self">Saudi Arabia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=IL&country=Israel" target="_self">Israel</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=IR&country=Iran" target="_self">Iran</a><p><span style="font-size:12px;"></span></p></div>';

    }

    else if( $billing_country_name_city == 'OCEANA'){
      echo '<div id="location-banner" class="location-banner">
         <div class="container">
         <h2>'.$billing_country_name.'</h2>
         </div>
    </div>
    <div class="container"> <div class="countryOptiontabList">';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=AU&country=Australia" target="_self">Australia</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=FJ&country=Fiji" target="_self">Fiji</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=NZ&country=New Zealand" target="_self">New Zealand</a><p><span style="font-size:12px;"></span></p></div>';
      echo '<div class="countryOptiontab"><a href="'.get_site_url().'/location-map/?region=PG&country=Papua New Guinea" target="_self">Papua New Guinea</a><p><span style="font-size:12px;"></span></p></div>';
    }

    else  {

    echo '<div id="location-banner" class="location-banner">
       <div class="container">
       <h2>'.$billing_country_name.'</h2>
       </div>
</div>
<div class="container"> <div class="countryOptiontabList">';
$results = $wpdb->get_results( "SELECT billing_city, billing_country, billing_email  FROM $table_name where subscription_status='active' AND billing_email LIKE '%awakeningprayerhubs.com' AND billing_country='".$_GET['region']."'  GROUP BY billing_city ORDER BY id ASC " );
      if(!empty($results))                        // Checking if $results have some values or not
    {
      foreach($results as $row){
         $uemail =$row->billing_email;
                 $aw_email = explode('@',$uemail);
                 //print_r($row);
              //   echo $row->billing_city;
                    //echo  $aw_email[1];
        if($row->billing_city!=''){
         echo '<div class="countryOptiontab"><a href="'.get_site_url().'/near-by-city/?nearbycity='.$row->billing_city.'&country='.$row->billing_country.'" target="_self">'.$row->billing_city.'</a></div>';

      }

      }
    }
    else {
      echo '<h3>No Active Prayer Hubs in This Region.';
    }
    echo '</div><a href="'.get_site_url().'/prayer-hub-options/" class="start-hub-btn">Start a hub</a></div>';
    echo "</div>";
    echo "</div>";

  }

 }
 }

add_shortcode('get_user_city','get_user_city');

include( plugin_dir_path( __FILE__ ) . '/causes.php');



?>
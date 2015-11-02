<?php
/**
 * Change Content Frontend for Cards Layout
 *
 * @package ZikokoTheme
**/

function change_content_frontend($post_id) {

  // This function won't run if adding/updated fields/field-groups in wp-admin
  if ( get_post_type( $post_id ) != 'acf' && get_post_meta($post_id,'content_block_cards_format',true) ) { 



    /* *************************
     *
     *  SETUP POST VARIABLES
     *
     ************************* */

    $post_title = get_the_title( $post_id );
    $number_of_rows = get_post_meta($post_id,'content_block_cards_format',true);
    $mid_point = ceil($number_of_rows / 2);

    $post_content = '';
    $next_page = '<!--nextpage-->';


    //$advert_image = wp_get_attachment_image( get_post_meta($post_id,'in_post_advert',true) );

    $advert = '<div class="cb-advert">ADVERT HERE</div>' . $next_page;


  
    /* *************************
     *
     *  LOOP THROUGH CONTENT BLOCK
     *
     ************************* */
    for ( $i = 0; $i < $number_of_rows; $i++ ) {


    /*
     *
     *  HEADLINE
     *
     */
      $raw_headline = get_post_meta($post_id,'content_block_cards_format_'.$i.'_headline',true);
      $headline = '';
      if ( $raw_headline ) {
        $headline = '<h3 class="pcblock__headline cb__headline cbpadd">'.$raw_headline.'</h3>';
      }
      

    /*
     *
     *  IMAGE
     *
     */
      $raw_image = wp_get_attachment_image( get_post_meta($post_id,'content_block_cards_format_'.$i.'_image_upload',true) );
      $image = '';

      $raw_image_credit = get_post_meta($post_id,'content_block_cards_format_'.$i.'_image_credit',true);
      $raw_image_via = get_post_meta($post_id,'content_block_cards_format_'.$i.'_via',true);

      if ( $raw_image ) {


        if ( $raw_image_credit && $raw_image_via ) {
          $image = '<div class="pcblock__image">
            <div class="cb__image">'.$raw_image.'</div>
            <small class="pcblock__image--credit cbpadd">
              via <a href="'.$raw_image_via.'" target="_blank">'.$raw_image_credit.'</a>
            </small>
            <div class="pcblock__image--zkklogo cb__image--zkklogo"></div>
          </div>';

        } elseif ( $raw_image_credit && !$raw_image_via ) {
          $image = '<div class="pcblock__image">
            <div class="cb__image">'.$raw_image.'</div>
            <small class="pcblock__image--credit cbpadd">
              via '.$raw_image_credit.'
            </small>
            <div class="pcblock__image--zkklogo cb__image--zkklogo"></div>
          </div>';

        } else {
          $image = '<div class="pcblock__image">
          <div class="cb__image">'.$raw_image.'</div>
          <small class="pcblock__image--credit"></small>
          <div class="pcblock__image--zkklogo cb__image--zkklogo"></div></div>';
        }

      }



      /*
       *
       *  ADDITIONAL TEXT
       *
       */
      $raw_additional_text = get_post_meta($post_id,'content_block_cards_format_'.$i.'_additional_text',true);
      $additional_text = '';
      if ( $raw_additional_text ) {
        $additional_text = '<div class="cbpadd">'.$raw_additional_text.'</div>';
      }







      

      


      if ( $i === $mid_point ) {
         $post_content = $post_content . $headline . $image . $additional_text . $next_page . $advert;
      } else {
        $post_content = $post_content . $headline . $image . $additional_text . $next_page;
      }

    } // end for loop




    /* *************************
     *
     *  POST START
     *
     ************************* */
    $post_start = '<div class="cpstart">


      <div class="cpstart__container">
      <a href="/" class="cpstart__branding">
      <img src="http://zikoko.com/wp-content/uploads/2015/07/logo-300x92.png" alt="">
      </a>

      <h1 class="cpstart__title">'.$post_title.'</h1>

      <p class="entry-excerpt--meta">
        Meta Info Here
      </p>
      </div>


      <a href="2/" class="cpstart__cta">
        <span class="cpstart__cta--sub">Click here to</span>
        <span class="cpstart__cta--main">Start Reading</span>
        <span class="cpstart__cta--sub">Or swipe right <i class="fa fa-long-arrow-right"></i></span>
      </a>

    </div>
    <!--nextpage-->';

    //$post_start = $post_start . '';



    /* *************************
     *
     *  POST END
     *
     ************************* */
    $post_end = '<div class="cpstart">
      <div class="cpstart__container">


      <h1 class="cpstart__title">End of the Post Stuff Here</h1>



      </div>
    </div>';






    //$post_content = 

    //$image_upload = ;





    $my_post = array();

        $my_post['ID'] = $post_id;
        $my_post['post_content'] = $post_start . $post_content . $post_end;


    remove_action('acf/save_post', 'change_content_frontend');

        wp_update_post( $my_post );

    add_action('acf/save_post', 'change_content_frontend');

  }

}
add_action('acf/save_post', 'change_content_frontend');


?>
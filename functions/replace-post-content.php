<?php
/**
 * Change Content Frontend for Standard Layout
 *
 * @package ZikokoTheme
**/

function change_content_frontend($post_id) {

  // CHECK LEGACY POST
  $is_legacy_post = get_post_meta( $post_id, 'content_block_standard_format_0_headline', true) === '' && get_post_meta( $post_id, 'content_block_standard_format_0_additional_text', true) === '' && get_post_meta( $post_id, 'content_block_standard_format_0_media_choice', true) === 'none';


  if ( get_post_type( $post_id ) != 'acf' &&
       get_post_meta( $post_id, 'content_block_standard_format', true) &&
       !$is_legacy_post ) { 



    /* *************************
     *
     *  SETUP POST VARIABLES
     *
     ************************* */

    $post_title = get_the_title( $post_id );
    $content_blocks = get_post_meta($post_id,'content_block_standard_format',true);
    $post_type = get_post_meta($post_id,'post_type',true);

    

    if ( $post_type === 'numbered' | $post_type === 'countdown' ) {

      $block_number = 0;
      $number_of_numbered_blocks = 0; 

      for ( $i = 0; $i < $content_blocks; $i++ ) {

        $display_block_number_q = get_post_meta($post_id,'content_block_standard_format_'.$i.'_display_block_number',true);

        if ( $display_block_number_q === '1' ) {
          $number_of_numbered_blocks++;
        }

      }

      if ( $post_type === 'countdown' ) {
        $block_number = $number_of_numbered_blocks;
      }


    }

    

    


    $post_content = '';

  
    /* *************************
     *
     *  LOOP THROUGH CONTENT BLOCK
     *
     ************************* */
    for ( $i = 0; $i < $content_blocks; $i++ ) {


      $this_content_block = 'content_block_standard_format_'.$i;


      // OPEN CONTENT BLOCK
      $content_block = '<div class="pcblock">';


      /* ************************
       *
       *  HEADLINE
       *
       ************************ */
      $raw_headline = get_post_meta($post_id, $this_content_block.'_headline',true);
      $headline = '';


      // BLOCK NUMBER CALCULATIONS
      $display_block_number_q = get_post_meta($post_id,'content_block_standard_format_'.$i.'_display_block_number',true);
      $headline_number = '';

      if ( $post_type === 'numbered' && $display_block_number_q === '1' ) {
        $block_number++;
        $headline_number = $block_number . '.';
      }
      if ( $post_type === 'countdown' && $display_block_number_q === '1' ) {
        $headline_number = $block_number . '.';
        $block_number--;
      }

      if ( $raw_headline ) {

        $headline = '
          <h3 class="pcblock__headline">
          <span>'.$headline_number.'</span>
          '.$raw_headline.'
          </h3>
        ';

      }

     

      $content_block = $content_block . $headline;




      // START MEDIA BLOCK ----------------------------------


      $content_block = $content_block . '<div class="pcblock__media">';

      $media_choice = get_post_meta($post_id, $this_content_block.'_media_choice',true);

      $media_block = '';




      /* ************************
       *
       *  MEDIA - IMAGE
       *
       ************************ */
      if ( $media_choice === 'image' ) {

        $raw_image_id = get_post_meta($post_id,$this_content_block.'_image_upload',true);
        $image_size = false;
        $image_attrs = array(
          'class' => 'pcblock__image--img', 
        );

        $raw_image = wp_get_attachment_image( $raw_image_id, $image_size, false, $image_attrs );

        $raw_image_credit = get_post_meta($post_id, $this_content_block.'_image_credit',true);
        $raw_image_via = get_post_meta($post_id, $this_content_block.'_via',true);


        // IMAGE CREDIT 
        $credit = '';

        if ( $raw_image_credit != '' && $raw_image_via != '' ) {
          $credit = '
            <small class="pcblock__image--credit">
              via <a href="'.$raw_image_via.'" target="_blank">'.$raw_image_credit.'</a>
            </small>
          ';
        } elseif ( $raw_image_credit != '' ) {
          $credit = '
            <small class="pcblock__image--credit">
              via '.$raw_image_credit.'
            </small>
          ';
        } elseif ( $raw_image_via != '' ) {
          $full_url = $raw_image_via;
          $shortened_url = explode("/", $full_url)[2];
          $credit = '
            <small class="pcblock__image--credit">
              via <a href="'.$raw_image_via.'" target="_blank">'.$shortened_url.'</a>
            </small>
          ';
        }


        $image = '
          <div class="pcblock__image">
          '.$raw_image.$credit.'
          <div class="pcblock__image--zkklogo"></div>
          </div>
        ';
        $media_block = $image;
      }





      /* ************************
       *
       *  MEDIA - EMBED
       *
       ************************ */
      elseif ( $media_choice === 'embed' ) {

        $embed_choice = get_post_meta($post_id,$this_content_block.'_choose_embed',true);


        switch ($embed_choice) {
          case 'instagram':
            $raw_embed = get_post_meta($post_id,$this_content_block.'_embed_code_instagram',true);
            $raw_embed = do_shortcode( '[instagram_embed url="'.$raw_embed.'"]' );
            break;
          
          default:
            $raw_embed = get_post_meta($post_id,$this_content_block.'_embed_code_other',true);
            break;
        }

        $embed = '
          <div class="pcblock__embed">
          '.$raw_embed.'
          </div>
        ';
        $media_block = $embed;
      }



      /* ************************
       *
       *  MEDIA - QUOTE
       *
       ************************ */
      elseif ( $media_choice === 'quote' ) {

        $raw_quote_text = get_post_meta($post_id,$this_content_block.'_quote_text',true);
        $raw_quote_from = get_post_meta($post_id,$this_content_block.'_from',true);

        if ( $raw_quote_from != '' ) {
          $cite = '
            <cite class="pcblock__quote--from">
              <span>&mdash;</span> '.$raw_quote_from.'
            </cite>
          ';
        }

        $quote = '
          <blockquote class="pcblock__quote--text">
          <p>'.$raw_quote_text.'</p>
          </blockquote>
          '.$cite.'
        ';

        $media_block = $quote;
      }


      /* ************************
       *
       *  MEDIA - QUIZ
       *
       ************************ */
      elseif ( $media_choice === 'quiz' ) {

        $raw_quiz = get_post_meta($post_id,$this_content_block.'_quiz_shortcode',true);
        $quiz = $raw_quiz; 

        $media_block = $quiz;
      }

      /* ************************
       *
       *  MEDIA - POLL
       *
       ************************ */
      elseif ( $media_choice === 'poll' ) {

        $poll = '[zkk_poll post='.$post_id.' poll='.$this_content_block.']';

        $media_block = $poll;
      }





      $content_block = $content_block . $media_block . '</div>';
      // END MEDIA BLOCK ----------------------------------




      /* ************************
       *
       *  ADDITIONAL TEXT
       *
       ************************ */

      $raw_additional_text = get_post_meta($post_id,$this_content_block.'_additional_text',true);
      $additional_text = '';
      if ( $raw_additional_text ) {
        $additional_text = '<p>'.$raw_additional_text.'</p>';
      }
      $content_block = $content_block . $additional_text;




      // END CONTENT BLOCK
      $content_block = $content_block . '</div>';

      // ADD CONTENT BLOCK TO POST THE_CONTENT
      $post_content = $post_content . $content_block;


    } // end for loop





    $my_post = array();
    $my_post['ID'] = $post_id;
    $my_post['post_content'] = $post_content;


    remove_action('acf/save_post', 'change_content_frontend');    
      wp_update_post( $my_post );
    add_action('acf/save_post', 'change_content_frontend');


  } // end if post content standard format
} // end function

add_action('acf/save_post', 'change_content_frontend');


?>
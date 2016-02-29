<?php
/**
 * The custom fields in the User Profile page 
 *
 * @package ZikokoTheme
**/


/* UPLOAD CUSTOM PROFILE PICTURE FOR AUTHORS */
function my_show_extra_profile_fields( $user ) { 

  $user_profile_image = esc_attr( get_the_author_meta( 'zkk_profile', $user->ID ) ); 

  ?>
  <h3>Zikoko Profile Picture</h3>
  <table class="form-table">
    <tr>
      <th>
        <label for="zkk_profile">Profile Picture</label>
      </th>

      <td>
        <?php if ( $user_profile_image != '' ) { ?>
          <img class="zkk_profile_img" src="<?php echo $user_profile_image; ?>" alt="" style="width: 110px;">
        <?php } else { ?>
          <img class="zkk_profile_img" src="http://0.gravatar.com/avatar/62efdbf0df5ad68a9a7066a287b623c1?s=192&d=mm&r=g" alt="" style="width: 110px;">
        <?php } ?>

        <br><br>

        <input class="image-url zkk_profile" id="zkk_profile" type="text" name="zkk_profile" style="display: none;" />
        <input id="upload-button" type="button" class="button" value="Upload Image" />

      </td>
    </tr>
  </table>
  <?php 
}
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );



function my_save_extra_profile_fields( $user_id ) {

  if ( !current_user_can( 'edit_user', $user_id ) )
    return false;

  update_usermeta( $user_id, 'zkk_profile', $_POST['zkk_profile'] );

}
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );



?>
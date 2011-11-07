<style>
.lcp_form_row{
  padding: 5px;
  clear: left;
}

.lcp_label{
    width: 200px;
    text-align: right;
    float: left;
    padding: 5px;
  }

.lcp_form_elem{
  width: 250px;
  text-align: left;
  float: left;
}


</style>
<div class="wrap">
<div id="icon-tools" class="icon32"></div>
  <h2>List Category Posts</h2>
  <div class="metabox-holder" style="clear: right; float: right; position: relative; width: 250px;">
    <div class="postbox">
      <h3>Support this plugin</h3>
      <div class="inside">
        <p>The plugin is free as in free beer and free speech under the <a href="http://picandocodigo.net/downloads/gpl.txt">GPL License</a>. If you've found the plugin useful and helpful, please consider supporting it with a PayPal donation or buying me something from my Amazon Wishlist :)
        <div style="text-align: center">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_donations" /> <input type="hidden" name="business" value="DPETC6TJ7457J" /> <input type="hidden" name="lc" value="UY" /> <input type="hidden" name="item_name" value="List Category Posts - WordPress Plugin" /> <input type="hidden" name="item_number" value="lcp" /> <input type="hidden" name="currency_code" value="EUR" /> <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHosted" /> <input type="image" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="PayPal - The safer, easier way to pay online!" /> <img src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form><a href="http://www.amazon.com/gp/registry/wishlist/2HU1JYOF7DX5Q/ref=wl_web">
          <img src="http://g-ecx.images-amazon.com/images/G/01/gifts/registries/wishlist/v2/web/wl-btn-113-c._V46776234_.gif" alt="My Amazon.com Wish List" width="113" height="35" border="0" /></a>
        </div>
        </p>
      </div>
    </div>
  </div>
  
  <p>This options page generates the List Category Posts shortcode for you to use in your post/page. Please select the options below, copy the generated code and pase it in your page.</p>
  <form method="post" >
    <div class="lcp_form_row">
      <div class="lcp_label"><label for="categoryid"><?php _e("Category", 'list-category-posts')?></label></div>
      <div class="lcp_form_elem"><select name="categoryid">
            <?php 
                    $categories=  get_categories();
                    foreach ($categories as $cat) :
                            $option = '<option value="' . $cat->cat_ID . '" ';
                            if ( isset($_POST['categoryid']) && $cat->cat_ID == $_POST['categoryid']) :
                                    $option .= ' selected = "selected" ';
                            endif;
                            $option .=  '">';
                            $option .= $cat->cat_name;
                            $option .= '</option>';
                            echo $option;
                    endforeach;
            ?>
        </select></div>
    </div>
    <div class="lcp_form_row">
      <div class="lcp_label"><label for="numberposts"><?php _e("Number of posts", 'list-category-posts')?></label></div>
      <div class="lcp_form_elem"><input size="2" id="numberposts" name="numberposts" type="text" 
      value="<?php echo isset($_POST['numberposts']) ? $_POST['numberposts'] : -1; ?>" />
        <small>Default is -1 (all posts).</small></div>
    </div>

    <div class="lcp_form_row">
      <div class="lcp_label"><label for="offset"><?php _e("Offset", 'list-category-posts')?></label></div>
      <div class="lcp_form_elem"><input size="2" id="offset" name="offset" type="text" 
      value="<?php echo isset($_POST['offset']) ? $_POST['offset'] : 0; ?>" />
      <small>Default is 0.</small></div>
    </div>
  
    <div class="lcp_form_row">
      <div class="lcp_label"><label for="orderby"><?php _e("Order by", 'list-category-posts')?></label></div>
        <div class="lcp_form_elem"><select  id="orderby" name="orderby" type="text" >
                <option value='date'><?php _e("Date", 'list-category-posts')?></option>
                <option value='title'><?php _e("Post title", 'list-category-posts')?></option>
                <option value='author'><?php _e("Author", 'list-category-posts')?></option>
                <option value='rand'><?php _e("Random", 'list-category-posts')?></option>
          </select>
        </div>
      </div>
    </div>

    <div class="lcp_form_row">
      <div class="lcp_label"><label for="order"><?php _e("Order", 'list-category-posts')?></label></div>
        <div class="lcp_form_elem"><select id="order" name="order" type="text">
                <option value='desc'><?php _e("Descending", 'list-category-posts')?></option>
                <option value='asc'><?php _e("Ascending", 'list-category-posts')?></option>
          </select>
        </div>
    </div>

    <div class="lcp_form_row">
      <div class="lcp_label"><label for="tag"><?php _e("Tags", 'list-category-posts')?></label></div>
      <div class="lcp_form_elem"><input size="24" id="tags" name="tags" type="text"
      value="<?php echo isset($_POST['tags']) ? $_POST['tags'] : ''; ?>" />
        </select></div>
    </div>

    <div class="lcp_form_row">
      <div class="lcp_label"><label for="exclude"><?php _e("Exclude categories (id's)", 'list-category-posts')?></label></div>
        <div class="lcp_form_elem">
          <input id="exclude" name="exclude" type="text"
          value="<?php echo isset($_POST['exclude']) ? esc_attr($_POST['exclude']) : '';?>" />
        </div>
    </div>
    
    <div class="lcp_form_row">
      <div class="lcp_label"><label for="excludeposts"><?php _e("Exclude posts (id's)", 'list-category-posts')?></label></div>
        <div class="lcp_form_elem">
          <input id="excludeposts" name="excludeposts" type="text" 
          value="<?php echo isset($_POST['excludeposts']) ? esc_attr($_POST['excludeposts']) : '';?>" />
        </div>
    </div>

    <div class="lcp_form_row">
      <div class="lcp_label"><label><?php _e("Show", 'list-category-posts')?>: </label></div>
        <div class="lcp_form_elem">
            <input type="checkbox" <?php checked( (bool) isset($_POST['thumbnail']), true ); ?>
            name="thumbnail" /> <?php _e("Thumbnail - size", 'list-category-posts')?>
            <select id="thumbnail_size" name="thumbnail_size" type="text">
                <option value='thumbnail'>thumbnail</option>
                <option value='medium'>medium</option>
                <option value='large'>large</option>
                <option value='full'>full</option>
            </select></br>
            <input type="checkbox" <?php checked( (bool) isset($_POST['show_date']), true ); ?>
            name="show_date" /> <?php _e("Date", 'list-category-posts')?></br>
            <input type="checkbox" <?php checked( (bool) isset($_POST['show_author']), true ); ?>
            name="show_author" /> <?php _e("Author", 'list-category-posts')?></br>
            <input type="checkbox" <?php checked( (bool) $instance['show_catlink'], true ); ?>
            name="show_catlink" /> <?php _e("Link to category", 'list-category-posts')?></br>
              <input type="checkbox" <?php checked( (bool) $instance['show_excerpt'], true ); ?>
            name="show_excerpt" /> <?php _e("Excerpt", 'list-category-posts')?></br>
        </div>
      </div>
    
    
      <div style="clear: both"><input class='button-primary' type='submit' name='getcode' value='<?php _e('Get code'); ?>' id='submitbutton' /></div>
    
  </form>

<?php if (isset($_POST['categoryid'])){ ?>

  <h3>Generated code</h3>
  <code>
    <?php echo '[catlist id=' . $_POST['categoryid'];
    if (isset($_POST['numberposts']) && $_POST['numberposts'] != -1): echo ' numberposts=' . intval($_POST['numberposts']); endif;
    if (isset($_POST['offset']) && $_POST['offset'] != '0'): echo ' offset=' . intval($_POST['tags']); endif;
    if (isset($_POST['orderby']) && $_POST['orderby'] != ''): echo ' orderby=' . $_POST['orderby']; endif;
    if (isset($_POST['order']) && $_POST['order'] != ''): echo ' order=' . $_POST['order']; endif;
    if (isset($_POST['tags']) && $_POST['tags'] != ''): echo ' tags=' . preg_replace('/\s/', '', $_POST['tags']); endif;
    echo ']';?>
  </code>

  <p>Copy this code and paste it in the edit post/page textarea.</p>
<?php } ?>


<p><small>This page doesn't save any data to your database. It's just a helper page for you to generate valid List Category Posts shortcodes.</small></p>
</div>

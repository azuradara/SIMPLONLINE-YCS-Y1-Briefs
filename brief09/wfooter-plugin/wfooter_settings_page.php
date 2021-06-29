<?php
global $wf_opt_text;

if (isset($_POST['wf_submit'])) resolve();

function resolve()
{
  $opt_TEXT = $_POST['wf_opt_text'];
  $opt_BRAND = $_POST['wf_opt_brand'];
  $opt_GITHUB = $_POST['wf_opt_github'];

  global $wf_opt_text, $wf_opt_brand, $wf_opt_github;

  if (get_option('wf_opt_text') != trim($opt_TEXT))
    $wf_opt_text = update_option('wf_opt_text', trim($opt_TEXT));

  if (get_option('wf_opt_brand') != trim($opt_BRAND))
    $wf_opt_brand = update_option('wf_opt_brand', trim($opt_BRAND));

  if (get_option('wf_opt_github') != trim($opt_GITHUB))
    $wf_opt_github = update_option('wf_opt_github', trim($opt_GITHUB));
}
?>

<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>

  <!--  -->
  <?php if (isset($_POST['wf_submit'])) : ?>
  <div id="message" class="updated below-h2">
    <p>Updated successfully.</p>
  </div>
  <?php endif; ?>
  <!--  -->

  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter footer text and click on save button.</strong></h3>
      <h3>
        <form method="post" action="">
          <table class="form-table">
            <tr>
              <th scope="row">Footer Text</th>
              <td><input type="text" name="wf_opt_text" value="<?php echo get_option('wf_opt_text'); ?>"
                  style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Brand Name (Copyright)</th>
              <td><input type="text" name="wf_opt_brand" value="<?php echo get_option('wf_opt_brand'); ?>"
                  style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Github Username</th>
              <td><input type="text" name="wf_opt_github" value="<?php echo get_option('wf_opt_github'); ?>"
                  style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td style="padding-top:10px;  padding-bottom:10px;">
                <input type="submit" name="wf_submit" value="Save changes" class="button-primary" />
              </td>
            </tr>
          </table>
        </form>
      </h3>
    </div>
  </div>
</div>
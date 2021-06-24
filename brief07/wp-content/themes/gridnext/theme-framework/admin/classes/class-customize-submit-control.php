<?php
/**
* GridNext_Customize_Submit_Control class
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

class GridNext_Customize_Submit_Control extends WP_Customize_Control {
        public $type = 'gridnext-submit-button';
        protected $button_class = '';
        protected $button_id = '';
        protected $button_value = '';
        protected $button_onclick = '';

        public function render_content() {
        ?>
        <form action="customize.php" method="get">
        <label>
        <span style="font-weight:normal;margin-bottom:10px;" class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php
        echo '<input type="submit"';
        if (!empty($this->button_class)) {
            echo ' class="' . esc_attr($this->button_class) . '"';
        }
        if (!empty($this->button_id)) {
            echo ' name="' . esc_attr($this->button_id) . '"';
        }
        if (!empty($this->button_id)) {
            echo ' id="' . esc_attr($this->button_id) . '"';
        }
        if (!empty($this->button_value)) {
            echo ' value="' . esc_attr($this->button_value) . '"';
        }
        if (!empty($this->button_onclick)) {
            echo ' onclick="return confirm(\'' . esc_js($this->button_onclick) . '\');"';
        }
        echo '/>';
        ?>
        </label>
        </form>
        <?php
        }
}
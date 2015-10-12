<?php
/*
 * Base file for widgets
 */
class WoPP_Widget extends WP_Widget {
    public $defaults;
    function __construct($widget_id='wopp_widget', $widget_name=null, $widget_ops=null) {
            // Widget settings
            if($widget_name==null){
                $widget_name=__('Widget Name', 'WoPP_locale');
            }
            if($widget_ops==null){
                $widget_ops = array(
                    'classname' => 'wopp_widget someclass',
                    'description' => __('Explicit description.', 'WoPP_locale')
                );
            }

            // Create the widget
            parent::__construct(
                    $widget_id,
                    $widget_name,
                    $widget_ops
            );

            $this->defaults = array(
                'title'=>''
            );
    }
    // PHP4 caller
    function WoPP_Widget(){
       $this->__construct();
    }
    function widget($args, $_instance) {
        $instance = wp_parse_args( (array) $_instance, $this->defaults );

        echo $args['before_widget'];
        if(!empty($instance['title'])){
                echo $args['before_title'];
                echo $instance['title'];
                echo $args['after_title'];
        }

        // Some content here

	echo $args['after_widget'];
    }

    function update($new_instance, $old_instance) {
       return $new_instance;
    }

    function form($_instance) {
        $instance = wp_parse_args( (array) $_instance, $this->defaults );
       ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'WoPP_locale' ) ?></label>
          <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?>"/>
        </p>
       <?php
   }

}


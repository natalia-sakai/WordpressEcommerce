<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: Widgets Teste
Description: This is my first plugin! It makes a new widgets!
Author: Natalia
*/

class widgets_teste extends WP_Widgets
{
    function TesteWidgets()
    {
        $widgets_ops = array('classname'=>'TesteWidgets', 'description'=>'Displays a random post with thumbnail');
        $this->WP_Widgets('TesteWidgets', 'Random Post and Thumbanail', $widgets_ops);
    }

    function form($instance)
    {
        $instance = wp_parse_args((array) $instance, array('title'=>''));
    

        $title = $instance['title'];

?>

<p>
    <label for="<?php echo $this->get_field_id('title');?>">Title:<input class="widefat" id="<?echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="texte" value="<?php echo attribute_escape($title);?>"/></label>
</p>

<?php
    }
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args,EXTR SKIP);
        echo $before_widget;
        $title = empty($instance['title']) ? '': apply_filters('widget_title',$instance['title']);
        if(!empty($title))
        {
            echo $before_title . $title .$after_title;
        }

        //widget code
        query_posts('posts_per_page=10');
        if(have_posts()) :
            echo "";
            while(have_posts()):the_post();
                echo '<a href=" '.get_permalink().'">'.get_the_title().'</a>'."<hr>";
            endwhile;
            echo "";
        endif;
        wp_reset_query();
        echo $after_widget;
    }
}

add_action('widgets_init', create_function('','return register_widget("TesteWidgets");'));

?>

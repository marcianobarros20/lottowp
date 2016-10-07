<?php

/**
 * Plugin Name: Lotto WP API
 * Description: JSON-based REST API for WordPress for hoosier lottery helper blog.
 * Author: Tier5
 * Author URI: http://tier5.us
 * Version: 1.0.0
 * Plugin URI: http://tier5.us
 * License: GPL2+
 */

class Lotto_WP_API {
    
    protected $namespace = 'lotto/v1';
    protected $endpoint = '/posts';
    protected $post_type = 'post';
    protected $taxonomy = 'category';
    protected $posts_per_page = -1;
    
    public function __construct() {
        add_action( 'rest_api_init', array($this, 'prepare'));
    }
    
    public function prepare(){
        register_rest_route( $this->namespace, $this->endpoint, array(
            'methods' => 'GET',
            'callback' => array($this, 'response'),
        ));
    }
    
    public function response(){
        $args = array(
            'post_type' => $this->post_type,
            'posts_per_page' => $this->posts_per_page,
            'taxonomy' => $this->taxonomy
        );
        $data = array();
        query_posts($args);
        if(have_posts()){
            while (have_posts()){
                the_post();
                $limage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');
                $mimage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                $timage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail');
                $fimage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                $tmp['title'] = get_the_title();
                $tmp['content'] = get_the_content();
                $tmp['author'] = get_the_author();
                $tmp['date'] = get_the_date();
                $tmp['time'] = get_the_time();
                $tmp['permalink'] = get_permalink();
                $tmp['image']['large'] = $limage[0];
                $tmp['image']['medium'] = $mimage[0];
                $tmp['image']['thumbnail'] = $timage[0];
                $tmp['image']['full'] = $fimage[0];
                array_push($data, $tmp);
            }
            wp_reset_query();
        }
        return $data;
    }
    
}

new Lotto_WP_API;
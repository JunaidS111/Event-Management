<?php
// Register Custom Post Type for Events

    $labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'corporate-event-manager'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'corporate-event-manager'),
        'menu_name'             => __('Events', 'corporate-event-manager'),
        'all_items'             => __('All Events', 'corporate-event-manager'),
        'add_new_item'          => __('Add New Event', 'corporate-event-manager'),
        'edit_item'             => __('Edit Event', 'corporate-event-manager'),
        'new_item'              => __('New Event', 'corporate-event-manager'),
    );

    $args = array(
        'label'                 => __('Event', 'corporate-event-manager'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'events'),
        'show_in_rest'          => true,
    );
    register_post_type('cem_event', $args);
}
add_action('init', 'cem_register_event_cpt');

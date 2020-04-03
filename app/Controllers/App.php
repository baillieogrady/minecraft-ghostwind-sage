<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function latest()
    {
        $posts = get_posts([
            'post_type' => 'post',
            'posts_per_page'=>'1',
        ]);

        return array_map(function ($post) {
            return [
                'title' => apply_filters('the_title', $post->post_title),
                'excerpt' => apply_filters('get_the_excerpt', $post->post_excerpt),
                'content' => apply_filters('get_the_content', $post->post_content),
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'avatar' => get_avatar_url($post->ID),
                'author' => get_the_author_meta('user_nicename', $post->post_author),
                'permalink' => get_the_permalink($post->ID),
                'category' => get_the_category($post->ID)[0]->name,
            ];
        }, $posts);
    }

    public static function readTime($words = "test")
    {
        if($words != null) {
            $content = $words;
        } else {
            $content = get_the_content();
        }
        $word_count = str_word_count( strip_tags( $content ) );
        $readingtime = ceil($word_count / 200);

        if($readingtime < 1) {
            $readingtime = 1;
        }
    
        return $readingtime;
    }
}

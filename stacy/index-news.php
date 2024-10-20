<?php

$stacy_latest_news_section_enable = get_theme_mod('latest_news_section_enable', 'on');
if ($stacy_latest_news_section_enable != 'off') {

    if (get_theme_mod('blog_type', false)) {
        if (get_theme_mod('blog_type', 'list') == 'default') {
            stacy_default_blog_type();
        } else {
            stacy_list_blog_type();
        }
    } else {
        if (get_option('stacy_user', 'new') == 'old') {
            stacy_default_blog_type();
        } else {
            stacy_list_blog_type();
        }
    }
}
<?php

load_theme_textdomain( 'zodkoo', get_template_directory() . '/languages' );

require get_parent_theme_file_path('framework/init.php');
require get_parent_theme_file_path('framework/zodkoo-add-theme-support.php');
require get_parent_theme_file_path('extend/menu-register.php');
require get_parent_theme_file_path('framework/zodkoo-theme-option.php');
require get_parent_theme_file_path('framework/zodkoo-redux-setting.php');
require get_parent_theme_file_path('framework/zodkoo-demo-import.php');
require get_parent_theme_file_path('extend/register-widget.php');
require get_parent_theme_file_path('extend/js-and-css.php');
require get_parent_theme_file_path('extend/dynamic-css.php');
require get_parent_theme_file_path('extend/pagination.php');
require get_parent_theme_file_path('extend/template-tags.php');
require get_parent_theme_file_path('extend/comment.php');
require get_parent_theme_file_path('extend/page-title-section.php');
require get_parent_theme_file_path('extend/breadcrumbs.php');
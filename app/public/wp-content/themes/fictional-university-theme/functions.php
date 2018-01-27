<?php function college_files() {
  // link to external customed font
  wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  // link to external font awesome
  wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // link to internal style.css
  wp_enqueue_style('college_main_styles', get_stylesheet_uri());
} ?>

<!-- assign custom function name college_files -->
<?php add_action('wp_enqueue_scripts', 'college_files'); ?>
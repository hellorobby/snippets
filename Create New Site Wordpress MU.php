






global $wpdb;

$domain = 'example.com';          // your domain (or subdomain)
$path = '/blog';                  // path to your site
$title = 'My Site';               // site title
$user_id = get_current_user_id(); // the user id that owns this site

// hide db errors
$wpdb->hide_errors();
// create the new site
$id = wpmu_create_blog( $domain, $path, $title, $user_id , array( 'public' => true ) );
// enable db errors
$wpdb->show_errors();
//register 
<?php 
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
   register_nav_menus(
    array(
      'header-menu' =>  'Header Menu' ,
      
    )
  );
}
function my_fallback_menu(){
	echo "<ul class='nav navbar-nav'>";
	if('page' != get_option('show_on_front')){
			echo '<li><a href="' .site_url(). '">Home</a></li>';
		}
	echo wp_list_pages( 'title_li');
	echo "</ul>";
}

?>
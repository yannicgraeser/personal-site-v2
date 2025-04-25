<?php define('ROOT_ACCESSED', TRUE);

require_once 'lib/view.php';

$template = View::factory( 'template' );


if( array_key_exists('page', $_GET))
{
  $page = $_GET[ 'page' ];
}
else
{
  $page = 'home';
}

$template->path = explode( '/', $page );
$template->page = $template->path[count( $template->path ) - 1];

$template->content = View::factory( $page );

echo $template;
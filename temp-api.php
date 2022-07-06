<?php
/**
 * Template Name: API 
 */

get_header();
?>


<?php

$request = new HttpRequest();
$request->setUrl('https://api.mindbodyonline.com/public/v6/site/locations');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
  'SiteId' => '{yourSiteId}',
  'Api-Key' => '{yourApiKey}'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}


?>



<?php

get_footer();

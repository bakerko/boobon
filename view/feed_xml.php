<?
echo '

<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
<channel>
<title> Ассортимент интернет-магазина Boobon </title>
<link> https://boobon.com.ua/ </link>
<description> В этом файле перечислены товары интернет-магазина </description>
';

$counter=0;
foreach($products as $product){
    /*
    $counter++;
    if($counter>1000)break;
    */
    
    echo '
    
<item>
<g:id>'.$product->id.'</g:id>
<g:title>'.htmlspecialchars($product->name).'</g:title>
<g:description>'.htmlspecialchars($product->descr).' </g:description>
<g:link>https://boobon.com.ua/home/product_card/'.$product->id.'</g:link> 
<g:mobile_link>https://boobon.com.ua/home/product_card/'.$product->id.'</g:mobile_link>
<g:image_link>https://boobon.com.ua/content/images/'.$product->id.'/1.jpg</g:image_link> 
<g:additional_image_link>https://boobon.com.ua/content/images/'.$product->id.'/2.jpg</g:additional_image_link> 
<g:additional_image_link>https://boobon.com.ua/content/images/'.$product->id.'/3.jpg</g:additional_image_link>
 <g:condition> new </g:condition>
<g:availability> in stock </g:availability>
<g:google_product_category> 2587 </g:google_product_category>
<g:mpn> '.$product->artikul.' </g:mpn> 
<g:brand> Markes </g:brand>
<g:price> '.$product->price.' UAH </g:price>
</item>    
    
    
    ';
}

echo '
  </channel>
</rss>
';


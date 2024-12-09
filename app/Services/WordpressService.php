<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;

class WordpressService
{
    public static function fetch()
    {
      try {
        $url = env('APP_URL').'blog/wp-json/wp/v2/posts?per_page=3&_embed';
        $response = Http::get($url);
        $json_array = array();
        $data = array();
        
        if($response->successful()){
            $blogs = json_decode($response->body());
            foreach($blogs as $k=>$blog) {
                $json_array["url"] = $blog->link;
                $json_array["title"] = $blog->title->rendered;
                $json_array["blog_desc"] = strip_tags(html_entity_decode($blog->excerpt->rendered));
                
                $embedded = $blog->_embedded;
                
                if(property_exists($embedded, "wp:featuredmedia")) {
                    if(property_exists($embedded->{"wp:featuredmedia"}[0], "media_details")){
                        if(property_exists($embedded->{"wp:featuredmedia"}[0]->media_details->sizes, "medium")){
                            $json_array["featured_image"] = $embedded->{"wp:featuredmedia"}[0]->media_details->sizes->medium->source_url;
                        } else if(property_exists($embedded->{"wp:featuredmedia"}[0], "source_url")) {
                            
                            $json_array["featured_image"] = $embedded->{"wp:featuredmedia"}[0]->source_url;
                        } else {
                          $json_array["featured_image"] =null;  
                        }
                    } else {
                        $json_array["featured_image"] = null;
                    }
                } else {
                    $json_array["featured_image"] = null;
                }

                $category = $embedded->{"wp:term"}[0];

                $json_array["category"] = array("name"=>$category[0]->name, "link"=>$category[0]->link,);
                $json_array["author"] = $embedded->author[0]->name;
                $json_array["created_date"] = $blog->date;
                
                $data[]=$json_array;
            }    
        } else {
            throw new Exception("No blogs found", 404);
        }
        
        return $data;
    } catch (\Exception $e) {
        return ([
            'code' => $e->getCode(),
            'message' => $e->getMessage()
        ]);
    }
    }
}

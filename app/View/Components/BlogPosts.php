<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class BlogPosts extends Component
{
    public $posts;

    public function __construct()
    {
        $this->posts = $this->fetchPosts();
    }

    protected function fetchPosts()
    {
        $response = Http::get('https://websitedigitals.com/blog/wp-json/wp/v2/posts');
        $posts = $response->json();

        // Fetch media URLs for featured images
        foreach ($posts as &$post) {
            if (!empty($post['featured_media'])) {
                $mediaResponse = Http::get('https://websitedigitals.com/blog/wp-json/wp/v2/media/' . $post['featured_media']);
                
                // Check if the media response was successful
                if ($mediaResponse->successful()) {
                    $media = $mediaResponse->json();
                    $post['featured_image_url'] = $media['source_url'] ?? asset('frontend/assets/images/previewimg.png'); // Fallback to default image
                } else {
                    $post['featured_image_url'] = asset('frontend/assets/images/previewimg.png'); // Fallback to default image
                }
            } else {
                $post['featured_image_url'] = asset('frontend/assets/images/previewimg.png'); // Fallback to default image
            }
        }

        return $posts;
    }

    public function render()
    {
        return view('components.blog-posts');
    }
}

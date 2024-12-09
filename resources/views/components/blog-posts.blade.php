<!--<div class="blog-posts">
    <h1>Blog Posts</h1>
    @foreach($posts as $post)
        <h2>{{ $post['title']['rendered'] }}</h2>
        <div>{!! $post['content']['rendered'] !!}</div>
        <a href="{{ $post['link'] }}">Read More</a>
    @endforeach
</div>-->


<section class="section-padding gray-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Explore Our Latest Blog</h2>
                </div>
            </div>
        </div>
        <div class="row rowGap2">
            @foreach(array_slice($posts, 0, 4) as $post) <!-- Limit to 4 posts -->
                <div class="col-lg-3 col-md-6 single-blog-container">
                    <div class="single-blog">
                        <div class="blog-imageArea">
                            <img src="{{ $post['featured_image_url'] }}" alt="blog image" loading="lazy">
                        </div>
                        <div class="blog-cardDetail">
                            <ul class="blog-tags">
                                <li>Website Digital</li>
                            </ul>

                            <h3>{{ Str::limit(strip_tags($post['title']['rendered']), 50, '...') }}</h3>
                            <ul class="blog-timeAuthor">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <span>{{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}</span>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <span>By: {{ $post['author'] ?? 'Admin' }}</span>
                                </li>
                            </ul>
                            <p>{{ Str::limit(strip_tags($post['content']['rendered']), 80, '...') }}</p>
                            <a href="{{ $post['link'] }}" class="read-more-link">
                                <span>Learn More</span>
                                <i class="fa fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<div class="views-element-container form-group">
    <div class="view view-blogs-list view-id-blogs_list view-display-id-block_1 js-view-dom-id-27ba5065a3a86dd7165f45626242dfb3afaba92a5cb9fb35fb5c607dcc410dbe container-max-width">
        <div class="">
            <div class="blog-list-header">
                <div class="view-header">
                    <h2>Don’t miss out on our updates</h2>
                </div>
                <div class="blogs-show-more-button">
                    <span>
                        <div class="more-link form-group"><a href="/getPostData">VIEW ALL POSTS</a></div>
                    </span>
                    <div class="new_custom_arrow lg"><span class="arrow_custom_line" style="background: #006778;"><span style="border: solid #006778;"></span></span></div>
                </div>
            </div>
            <div class="view-content">
                <div class="views-view-grid horizontal cols-3 clearfix">
                    <div>
                    @foreach($Updates as $data)
                        @include('components.blog-card',['data'=>$data])
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
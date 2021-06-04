<div>
    <div class="views-element-container form-group">
        <div class="view view-news-more view-id-news_more view-display-id-block_1 js-view-dom-id-95d8ad79955e03b24c8458c8cf67546efc4c0cd8b4beab55e87eb84d929714f2 container-max-width news-more-layout-block-view-container">

            <div class="">
                <div class="news-block-list-header">
                    <div class="view-header">
                        <h2>News and more</h2>
                    </div>
                    <div class="blogs-show-more-button">
                        <span>
                            <div class="more-link form-group"><a href="/getNewsData">VIEW ALL NEWS</a></div>
                        </span>
                        <div class="new_custom_arrow lg"><span class="arrow_custom_line" style="background: #006778;"><span style="border: solid #006778;"></span></span></div>
                    </div>
                </div>
                <div class="view-content">
                    <div id="views-bootstrap-news-more-block-1" class="grid views-view-grid horizontal">
                        <div class="row">
                            @foreach($News as $data )
                            @include('components.news-card',['data' => $data])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
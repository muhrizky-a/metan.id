<div class="col-lg-4 aside bg-gray">

    <div class="news-category">
        <h4>ARTIKEL POPULER</h4>
        
        @foreach ($popular_articles as $row)
        
            <div class="card mb-3 horizontal-card sidebar">
                @php
                    $popular_article = $row[0]->article;
                @endphp

                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/article/'.$popular_article->image_url ) }}"  class="img-fluid rounded-start" alt="{{$popular_article->title}}">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">
                                <a href="{{ route('article.detail', $popular_article->link) }}">
                                    {{ $popular_article->title}}
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        
        @endforeach
    </div>      
</div>
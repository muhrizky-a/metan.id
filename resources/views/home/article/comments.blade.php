<section>
    <div class="row gy-2 d-flex">
        @foreach ($article->comments->sortByDesc('created_at') as $comment)

            <div class="col-full">
                <div class="card">
                    <div class="card-body p-3">

                        <div class="row">
                            <div class="col">

                                <div class="d-flex flex-start">
                                    <img
                                        class="rounded-circle shadow-1-strong me-3"
                                        src="{{ asset('img/blank-profile-picture.png') }}"
                                        alt="avatar"
                                        width="65"
                                        height="65"
                                    />
                                    <div class="flex-grow-1 flex-shrink-1">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1 text-secondary small">
                                                    {{ $comment->name }} 
                                                    <span class="small">
                                                        - {{ $comment->created_at->diffForHumans() }}
                                                    </span>
                                                </p>
                                            </div>
                                            <p class="mb-0 text-dark">
                                                {{ $comment->comments }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
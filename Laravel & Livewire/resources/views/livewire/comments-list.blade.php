<div class="comment-list">
    <div class="single-comment justify-content-between d-flex">
    <div class="user justify-content-between d-flex">
        <div class="thumb">
            <img src="{{ asset('') }}assets/img/comment/comment_1.png" alt="">
        </div>
        <div class="desc">
            <p class="comment">
            <h3>{{ $comments->family }}</h3>
            {{ $comments->content }}
            </p>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                <p class="date">{{ $comments->created_at}}</p>
                </div>
                <div class="reply-btn">
                <a class="btn-reply text-uppercase" wire:click="reply_comment">reply</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

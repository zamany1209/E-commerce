            <div class="col-lg-8 posts-list container">
               <div class="comments-area">
                  <h4>{{ $comment_total }}  Comments</h4>
                  @foreach ($comment as $comments)
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
                                    <a class="btn-reply text-uppercase ml-2" wire:click.prevent="reply({{$comments}})">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                    @if (DB::table('product_comments')->where('com_id','=',"$comments->id")->get())
                        @foreach ( as )

                        @endforeach
                    @endif
                  @endforeach
               </div>

               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                    <h3>Replys to : <b> {{ $family_comment }}</b></h3>
                  <p>
                    @if(Session::get('comment'))
                        {{ Session::get('comment') }}
                    @endif
                  </p>
                  <p>
                    @if(Session::get('error_comment'))
                        {{ Session::get('error_comment') }}
                    @endif
                  </p>
                  <form class="form-contact comment_form" id="commentForm" action="{{ route('auth.comment') }}" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product_id+524 }}">
                  <input type="hidden" name="comment_id" value="{{ $comment_id }}">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                                 <span>@error('comment') {{ $message }} @enderror</span>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="family" id="family" type="text" placeholder="Family">
                              <span>@error('family') {{ $message }} @enderror</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>

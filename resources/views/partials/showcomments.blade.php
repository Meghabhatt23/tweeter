<div class="row">
    <div class="col-xs-12 col-md-12">
        @foreach($tweet->comments as $comment)
            <div class="single-comment" style="font-size: 17px; color:#4D4D58; font-weight:bold; font-style: italic;">
                {{ $comment->comments }} <br />
                by - {{ $comment->user_id }}
                <br />
            </div>
        @endforeach
    </div>
</div>
<div class="col-md-6" style="text-align:right">

    {{-- <form name="comment-form" method="post" action="comment">
        @csrf
        <textarea name="comment" class="form-control" placeholder="comment here" style="text-align:right"></textarea>
        <br />
        <input type="hidden" name="tweet_id" value="{{ $tweet->id }}" />
        <div class="align-right" style="text-align:right">
            <button class="btn btn-twitter btn-sm align-right" style="background-color: #1da1f2; color:white;">Post Comment</button>
        </div>
    </form> --}}
    <div id="commentsWrapper">
        {{-- @{{ title}} --}}
        <comment-component v-for="comment in comments" :comment=comment>  </comment-component>
    </div>
<br />
    @foreach($tweet->comments as $comment)
        <a href="/delete/{{ $comment->id}}">
            <button class="btn btn-sm btn-twitter" style="background-color: #1da1f2; color:white;"> Delete </button>

            <br>
            <a href="/edit-comment/ {{ $comment->id }}" class="float-right-section">Edit</a>
        </a>

    @endforeach

</div>

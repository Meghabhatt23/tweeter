@foreach($tweets as $tweet)

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="tweet">
                {{$tweet->tweets}}
                <br />
                <div class="user align-right">
                    -{{ $tweet->user_id }}
                    <form name="delete-form" method="post" action="/delete-tweet">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="tweet_id" value="{{ $tweet->id }} /">
                        <button class="btn btn-sm btn-twitter" style="background-color: #1da1f2; color:white;">Delete</button>
                    </form>
                    <br /><br />



                    <div class="row">
                        <div class="col-md-11 offset-md-1">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">

{{--
                            @foreach ($tweet->comments as $comment)
                                <div class="single-comment">
                                    {{ $comment->comment }} <br />
                                     by - {{ $comment->user_id }}
                                     <br />
                                 </div>
                            @endforeach --}}
                </div>
            </div>
</div>
                    @include('partials.showcomments')

            </div>
        </div>
    </div>
</div>
</div>
    @endforeach

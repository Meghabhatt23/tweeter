@foreach($tweets as $tweet)

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="tweet">
                {{$tweet->tweet}}
                <br />
                <div class="user align-right">
                    -{{ $tweet->user_id }}
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

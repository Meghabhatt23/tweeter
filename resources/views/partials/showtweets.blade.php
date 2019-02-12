@foreach($tweets as $tweet)

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="tweet">

                    {{ $tweet->tweet }}
                    <br />

                <form method="post" action="">
                    <textarea class="tweets-display-text-area" disabled> {{$tweet->tweets}}</textarea>
                </form>
                <a href="/edit-tweet/{{$tweet->id}}">Edit</a> {{ $tweet->user_id }} @ {{ $tweet->created_at }}
@php
    if(isset($tweet->can_delete)){


        @endphp


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
@php
}
        @endphp


                    <div class="row">
                        <div class="col-md-11 offset-md-1">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">

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

@foreach($tweets as $tweet)

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="tweet">
                <div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
                    {{ $tweet->tweets }}
                </div>
                <br />

                {{ $tweet->user->name }} @  {{ $tweet->created_at }}
                @php
                if(isset($tweet->has_permissions)){
                    @endphp
                    <a href="/edit-tweet/ {{ $tweet->id }}" class="float-left-section">Edit</a>
                    @php
                    if(isset($tweet->liked) && ($tweet->liked==true)){
                        @endphp

                        <form name="like-form" method="post"  action="/like-tweet" class="float-left-section">
                        @csrf
                        <input type="hidden" name="tweet_id" value="{{ $tweet->id }}"/>
                        <input type="hidden" name="like" value="0" />
                        <button class="btn btn-sm btn-twitter" style="background-color: #1da1f2; color:white;">unlike</button>
                        </form>

                        @php
                    }
                    else{
                        @endphp

                        <form name="like-form" method="post"  action="/like-tweet" class="float-left-section">
                        @csrf
                        <input type="hidden" name="tweet_id" value="{{ $tweet->id }}"/>
                        <input type="hidden" name="like" value="1" />
                        <button class="btn btn-sm btn-twitter" style="background-color: #1da1f2; color:white;">like</button>
                        </form>

                        @php
                    }
                    @endphp
                    <br />
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


            <div class="user align-right">
                {{-- {{ $tweet->user_id }} --}}
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        @include('partials.showcomments')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endforeach

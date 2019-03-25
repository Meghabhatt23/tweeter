@foreach($tweets as $tweet)

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="tweet">
                <div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
                    {{ $tweet->tweets }}
                </div>

<div class="container">
                 {{ $tweet->created_at }} @ {{ $tweet->user->name }}
                @php
                if(isset($tweet->has_permissions)){
                    @endphp
                    <a href="/edit-tweet/ {{ $tweet->id }}" class="card-link class">
                        <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px; color:#1da1f2;"></i>
                    </a>
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
                    <form name="delete-form" method="post" action="/delete-tweet">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE"/>
                    <input type="hidden" name="tweet_id" value="{{ $tweet->id }} /">
                    <button class="btn"  style="background-color:white;"><i class="fa fa-trash" style="color:#1da1f2; font-size:20px; margin-top:0;"></i></button>
                    </form>
                    @php
                }
            @endphp
            </div>
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

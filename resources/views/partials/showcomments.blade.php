
    <div class="col-md-6" style="text-align:right">

         <form name="comment-form" method="post" action="comment">
                @csrf
                <textarea name="comment" class="form-control" placeholder="comment here" style="text-align:right"></textarea>
                <br />
                 <input type="hidden" name="tweet_id" value="{{ $tweet->id }}" />
                 <div class="align-right" style="text-align:right">
                    <a href="#" class="card-link" style="font-size:15px"><i class="fa fa-gittip" style="font-size:20px"></i> Like</a>
                    <button class="btn btn-twitter btn-sm align-right" style="background-color: #1da1f2; color:white;">Post</button>
                </div>
            </form>

</div>

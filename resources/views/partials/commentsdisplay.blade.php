
<div class="row">

    <div class="col-xs-9 col-md-12">

         <form name="comment-form" method="post" action="comment">
                @csrf
                <textarea name="comment" class="form-control" placeholder="comment here"></textarea>
                <br />
                 <input type="hidden" name="tweet_id" value="{{ $tweet->id }}" />
                 <div class="align-right">
                    <button class="btn btn-twitter btn-sm align-right">Comment</button>
                </div>
            </form>

</div>

</div>

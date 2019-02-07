
<div class="row">
    <div class="col-xs-12">
    </div>




    <div class="row">
        <div class="col-...">
         <form name="comment-form" method="post" action="comment" style="textalign: right;">
                @csrf
                <textarea name="comment" class="form-control" placeholder="comment here"></textarea>
                <br />
                <input type="hidden" name="tweet_id" value="{{ $tweet->id }}" />
                <div class="align-right">
                    <button class="btn btn-twitter btn smalign-right">Comment</button>
                </div>
            </form>
        </div>
    </div>
</div>

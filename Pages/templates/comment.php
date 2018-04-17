<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="col-lg-4 col-sm-6 text-center">
    <div class="well">
        <h4>What is on your mind?</h4>
    <div class="input-group">
        <input type="text" id="userComment" class="form-control input-sm chat-input" placeholder="Write your message here..." />
	    <span class="input-group-btn" onclick="addComment()">
            <a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-comment"></span> Add Comment</a>
        </span>
    </div>
    <hr data-brackets-id="12673">
    <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
        <strong class="pull-left primary-font">James</strong>
        <small class="pull-right text-muted">
           <span class="glyphicon glyphicon-time"></span>7 mins ago</small>
        <br>
        <li class="ui-state-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
        <br>
         <strong class="pull-left primary-font">Taylor</strong>
        <small class="pull-right text-muted">
           <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
        <br>
        <li class="ui-state-default">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>

    </ul>
    </div>

</div>

<script>
    function addComment(){
    var userComment = document.getElementById("userComment").value;
	document.getElementById("ui-state-default").innerHTML = userComment;
}
</script>

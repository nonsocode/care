@extends('layouts.admin')

@section('main')
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="header">
						<h4 class="pull-left">Requests Details</h4>
						@unless ($dr->owner)
							<a id="convert" href="#" class="btn pull-right btn-success" data-id="{{$dr->id}}">Convert to Client</a>
						@else
							<a href="{{ route('clients.show', $dr->owner->id) }}" class="btn pull-right btn-success">View Client</a>
						@endunless
					</div>
					<div class="clearfix"></div>
					<div class="content">
						<div class="row">
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Request ID</div>
									<div class="dr-data">{{$dr->id}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Name</div>
									<div class="dr-data">{{$dr->name}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Phone</div>
									<div class="dr-data">{{$dr->phone}}</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="dr">
									<div class="small-title">Address</div>
									<div class="dr-data">{{$dr->address}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">L.G.A</div>
									<div class="dr-data">{{$dr->lga->name}}</div>								
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Call Time</div>
									<div class="dr-data">
										@if ($dr->call_time_from)
											{{(new Carbon\Carbon($dr->call_time_from))->format('h:i a')}}
											@if ($dr->call_time_to)
												to {{(new Carbon\Carbon($dr->call_time_to))->format('h:i a')}}
											@endif
										@else
											Anytime
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Job Description</div>
									<div class="dr-data">{{$dr->job_description}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Driver Type</div>
									<div class="dr-data">{{$dr->driver_type_name}}</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Working Hours</div>
									<div class="dr-data">
										@if ($dr->working_hours_start)
											{{(new Carbon\Carbon($dr->working_hours_start))->format('h:i a')}}
											@if ($dr->working_hours_end)
												to {{(new Carbon\Carbon($dr->working_hours_end))->format('h:i a')}}
											@endif
										@else
											Anytime
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Start Date</div>
									<div class="dr-data">{{$dr->start_date}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Frequency</div>
									<div class="dr-data">{{$dr->frequency}}</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="dr">
									<div class="small-title">Expect Pay</div>
									<div class="dr-data">{{$dr->pay}}</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="dr">
									<div class="small-title">Notes</div>
									<div class="dr-data">{{$dr->notes}}</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="header"><h5>SMS Log</h5></div>
					<div class="content">
						<div class="messages-wrapper">
							<div class="messages-container">
								@forelse ($dr->smsMessages as $message)
									<div class="message">
										<div class="message-content">
											<div class="message-text">{{$message->text}}</div>
											<div class="message-meta text-right">
												<span class="message-status" title="{{$message->created_at}}" data-toggle="tooltip">{{$message->created_at->diffForHumans()}}</span> &#9679; 
												<span class="message-sender">{{$message->sender->short_name}}</span>
											</div>
										</div>
										<div class="message-sender-avatar"><img src="{{ secure_asset('img/faces/face-0.jpg') }}" alt="avatar" height="50" width="50" class="img img-circle img-thumbnail"></div>
									</div>
								@empty
									<h6 class="text-center" id="emptyMessage" style="margin-top: 20px">Nothing to see yet</h6>
								@endforelse
							</div>
							<div class="message-form">
								<form action="" id="message-form">
									{{csrf_field()}}
									<label>New Message</label>
									<textarea required name="text" class="form-control" id="message-input"></textarea>
									<div id="sms-count">
										<span class="text-remaining">160</span>/<span class="message-count">1</span>
									</div>
									<div class="text-right">
										<button class="btn btn-success" id="send-message-button">Send</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="header"><h5 class="bold">Comments</h5></div>
					<div class="content">
						<div class="comments-wrapper">
							<div class="comments-container">
							@forelse ($dr->receivedComments as $comment)
								<div class="comment">
									<div class="comment-content">
										<div class="comment-text">
											{{$comment->text}}
										</div>
										<div class="comment-meta text-right">
											<span class="comment-status">{{$comment->created_at->diffForHumans()}}</span>
											|
											<span class="comment-sender">{{ $comment->commenter->shortName}}</span>
										</div>
									</div>
									<div class="comment-sender-avatar">
										<img class="img img-circle img-thumbnail" width="50" height="50" src="https://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
									</div>
								</div>
							@empty
								<h6 id="emptyMessage">
									No comments yet
								</h6>
							@endforelse
							</div>
							<div class="comments-form">
								<label>New Comment</label>
								<form id="comments-form" action="" method="POST">
									<textarea name="text" id="comment-input" class="form-control"></textarea>
									<div class="text-right">
										<button id="send-comment-button">Post</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script-links')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	@if(env('APP_ENV') == 'development')
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	@endif
@endsection

@section('modals')
	
	<div class="modal fade" id="user-select">
	</div>
@endsection

@section('script')
<script type="text/javascript">
	jQuery(function($){
		var $mc = $('.messages-container'),
			$text = $('#message-input');
			$emptyMessage = $('#emptyMessage'),
			$cc = $('.comments-container'),
			$commentInput = $('#comment-input');
			$emptyComment = $('#emptyComment');
			$convertBtn = $("#convert")

		function scrollMessageBottom(animate) {
			console.log($mc[0].scrollHeight);
			$mc.animate({scrollTop : $mc[0].scrollHeight }, animate ? 400:0);
		}
		function scrollCommentBottom(animate) {
			console.log($cc[0].scrollHeight);
			$mc.animate({scrollTop : $cc[0].scrollHeight }, animate ? 400:0);
		}
		function buildMessageDom(text) {
			var message = $("<div class='message'>"),
				messageContent = $("<div class='message-content'>"),
				messageText= $("<div class='message-text'>").text(text),
				messageMeta = $("<div class='message-meta text-right'>"),
				messageStatus = $("<span class='message-status'>").text('Sending...').attr({'data-toggle':'tooltip','title': 'Sending'}),
				messageSender = $("<span class='message-sender'>").text('You'),
				avatarHolder = $("<div class='message-sender-avatar'>")
				img = $('<img alt="avatar" height="50" width="50" class="img img-circle img-thumbnail">').attr('src', '/img/faces/face-0.jpg');
				
				avatarHolder.append(img);
				messageMeta.append(messageStatus," &#9679; ", messageSender);
				messageContent.append(messageText,messageMeta);
				message.append(messageContent,avatarHolder)
				
				return {message, messageContent, messageText, messageMeta, messageStatus, messageSender, avatarHolder, img}
		}
		function buildCommentDom(text) {
			var message = $("<div class='comment'>"),
				messageContent = $("<div class='comment-content'>"),
				messageText= $("<div class='comment-text'>").text(text),
				messageMeta = $("<div class='comment-meta text-right'>"),
				messageStatus = $("<span class='comment-status'>").text('Sending...').attr({'data-toggle':'tooltip','title': 'Sending'}),
				messageSender = $("<span class='comment-sender'>").text('You'),
				avatarHolder = $("<div class='comment-sender-avatar'>")
				img = $('<img alt="avatar" height="50" width="50" class="img img-circle img-thumbnail">').attr('src', '/img/faces/face-0.jpg');
				
				avatarHolder.append(img);
				messageMeta.append(messageStatus," | ", messageSender);
				messageContent.append(messageText,messageMeta);
				message.append(messageContent,avatarHolder)
				
				return {message, messageContent, messageText, messageMeta, messageStatus, messageSender, avatarHolder, img}
		}

		function initTooltips(){
			$("[data-toggle='tooltip']").tooltip();
		}

		$text.keydown(function (e) {
		  if (e.ctrlKey && e.keyCode == 13) {
		    $("#send-message-button").click()
		  }
		});
		$commentInput.keydown(function (e) {
		  if (e.ctrlKey && e.keyCode == 13) {
		    $("#send-comment-button").click()
		  }
		});
		
		$("#message-form").submit(function(event) {
			event.preventDefault();
			$dom = buildMessageDom($text.val());
			$emptyMessage.remove();
			$mc.append($dom.message);
			$.post(
				'{{route("driver-requests.store.message",[$dr->id])}}', 
				$(this).serialize(), 
				function(data, textStatus, xhr) {
					console.log(data);
					$dom.messageText.text(data.text);
					$dom.messageSender.text(data.sender.shortName);
					$dom.messageStatus.text(moment(data.created_at).fromNow()).attr('title', data.created_at);
					initTooltips();
				},
				'json'
			).fail(function () {
				console.log("somn went wrong");
				$text.val($dom.messageText.text());
				$dom.message.remove();
			});
			$text.val('');
			scrollMessageBottom(true);
		});
		$("#comments-form").submit(function(event) {
			event.preventDefault();

			$dom = buildCommentDom($commentInput.val());
			$emptyComment.remove();
			$cc.append($dom.message);

			$.post(
				'{{route("driver-requests.store.comment",[$dr->id])}}', 
				$(this).serialize(), 
				function(data, textStatus, xhr) {
					$dom.messageText.text(data.text);
					$dom.messageSender.text(data.commenter.shortName);
					$dom.messageStatus.text(moment(data.created_at).fromNow()).attr('title', data.created_at);
					initTooltips();
				},
				'json'
			).fail(function () {
				console.log("somn went wrong");
				$text.val($dom.messageText.text());
				$dom.message.remove();
			});
			$commentInput.val('');
			scrollMessageBottom(true);
		});

		function disableBtn(btn){
			$(btn).prop('disabled', true);
		}
		function enableBtn(btn){
			$(btn).prop('disabled', false);
		}
		function convertToClient(){
			var $btn = $(this);
			disableBtn(this);
			$(this).off('click');
			$.post('{{ route('clients.createFromRequest', $dr->id) }}', function(data, textStatus, xhr) {
				if (data.status == 'success') {
					swal({
						type : "success",
						title : "Success",
						html : true,
						text: `Client successfully created. <a href="${laroute.route('clients.show',{client : data.user.id})}">Go to Client</a>`
					})
					$btn.text('Go to Client').attr('href', laroute.route('clients.show',{client : data.user.id}));
				}
				else if (data.status == 'exists'){
					// swal('Sorry', 'A similar use exists','error');
					$("#user-select").html(data.html).modal('show');
				}
			},'json')
			.fail(function(){
				swal('Sorry', 'We could not create the client. Please try again later','error')
			})
			.always(function(){
				enableBtn(this);
				$('#convert').on('click', convertToClient)
			});

		}

		$('body').on('click', '.user-selector', function(event) {
			$("#user-select").modal('hide');
			$.post($(this).data('url'), function(data, textStatus, xhr) {
				swal({
					type : "success",
					title : "Success",
					html : true,
					text: `Client successfully created. <a href="${laroute.route('clients.show',{client : data.user.id})}">Go to Client</a>`
				})
				$convertBtn.text('Go to Client').attr('href', laroute.route('clients.show',{client : data.user.id}));
			});
		});

		$('#convert').on('click', convertToClient)

		scrollMessageBottom();
		scrollCommentBottom();
		initTooltips();
	})
</script>
@endsection
@extends('layouts.admin')

@section('main')
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="header">
						<h4>Requests Details</h4>
					</div>
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
									<div class="dr-data">{{$dr->call_time}}</div>
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
									<div class="dr-data">{{$dr->working_hours}}</div>
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
										<div class="message-sender-avatar"><img src="{{ asset('img/faces/face-0.jpg') }}" alt="avatar" height="50" width="50" class="img img-circle img-thumbnail"></div>
									</div>
								@empty
									<h6 class="text-center" id="emptyMessage" style="margin-top: 20px">Nothing to see yet</h6>
								@endforelse
							</div>
							<div class="message-form">
								<form action="" id="message-form">
									{{csrf_field()}}
									<label>New Message</label>
									<textarea required name="text" class="form-control" id="text"></textarea>
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
	</div>
</div>
@endsection

@section('script-links')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	@if(env('APP_ENV') == 'development')
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	@endif
@endsection

@section('script')
<script type="text/javascript">
	jQuery(function($){
		var $mc = $('.messages-container'),
			$text = $('#text');
			$emptyMessage = $('#emptyMessage');

		function scrollMessageBottom(animate) {
			console.log($mc[0].scrollHeight);
			$mc.animate({scrollTop : $mc[0].scrollHeight }, animate ? 400:0);
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

		function initTooltips(){
			$("[data-toggle='tooltip']").tooltip();
		}

		$text.keydown(function (e) {
		  if (e.ctrlKey && e.keyCode == 13) {
		    $("#send-message-button").click()
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
		
		scrollMessageBottom();
		initTooltips();
	})
</script>
@endsection
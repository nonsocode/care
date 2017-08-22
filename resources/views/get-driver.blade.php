@extends('layouts.master')

@section('main')
    <section class="pt30" id="contact-page">
        <div class="container">
            <div class="text-center mb20">        
                <h1 style="color:#333;">Driver Request Form</h1>
                <p class="lead">Kindly fill out your details in the form below and one of our customer service representatives will get back to you</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                @if ($errors->count())
                	<div class="alert alert-danger">
                		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                		<span>{{$errors->first()}}</span>
                	</div>
                @endif
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{ route('get-driver') }}">
                    {{csrf_field()}}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <div class="row">
                                <div class="col-xs-3">
                                    <select name="title" class="form-control" id="title">
                                        <option value="">Title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Miss">Miss</option>
                                    </select>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" id="name" name="name" class="form-control" required="required" value="{{old('name')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" id="email" name="email" class="form-control" required="required"  value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input id="phone" type="text" name="phone" required class="form-control" value="{{old('phone')}}">
                        </div>
                        <div class="form-group">
                            <label>Repeat Phone *</label>
                            <input type="text" id="phone_confirmation" name="phone_confirmation" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Please Specify your LGA of Residence? *</label>
                            <select class="form-control" required name="lga" id="lga">
								<option>Select an Option</option>
								@foreach ($lgas as $lga)
									<option value="{{$lga->id}}" {{old('lga') == $lga->id ? "selected" : ""}}>{{$lga->name}}</option>
								@endforeach
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label>What type of Driver do you require? *</label>
                            <select class="form-control" required="required" name="driver_type" id="driver_type" value="{{old('driver_type')}}">
                            <option>Select an Option</option>
                                @foreach ($driverTypes as $type)
                                	<option value="{{$type->id}}" {{old('driver_type' == $type->id ? "selected" :"")}}>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">What is the job description of the driver ?*</label>
                            <select id="job_description" class="form-control" name="job_description">
                                <option value='' >Select the job description</option>
                                <option value='Drive Around' >Just drive around</option>
                                <option value='Drive Around and Domestic Services'>Drive around, wash the car and other domestic services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Please indicate the working hours of the Driver</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">Between</div>
                                        <input name="working_hours_start" id="working_hours_start"  class="form-control" >
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">And</div>
                                        <input name="working_hours_end" id="working_hours_end"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>         
                        <div class="form-group">
                            <label for="">When exactly do you want to start ?</label>
                            <input name="start_date" id="start_date"   class="form-control" >
                        </div>         
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Please indicate your exact house or office address </label>
                            <p><small>You don't have to give specifics just tell us the location the driver would be required to meet you. e.g. just saying Alagomeji Yaba Lagos is okay</small></p>
                            <input name="address" id="address" required="required" class="form-control" />
                        </div>   

                        <div class="form-group">
                            <label for="">How often would you need a driver? *</label>
                            <select name="frequency" id="frequency" class="form-control">
                                <option value=''>Select an Option</option>
                                <option value='Whenever the Driver is needed'>Only when ever I ask</option>
                                <option value='Weekly Plan'>Weekly Subscription Plan (Cheaper)</option>
                                <option value='Monthly Plan'>Monthly Subscription Plan (Cheapest)</option>
                            </select>
                        </div>         

                        <div class="form-group">
                            <label>How much are you willing to pay? </label>
                            <div class="input-group">
                                <div class="input-group-addon">₦</div>
                                <input class="form-control" id="pay" type="text" name="pay" placeholder="e.g 30000">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Time of the day you liked to be called ?</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">From </div>
                                        <input name="call_time_from" id="call_time_from" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"> To</div>
                                        <input name="call_time_to" id="call_time_to" class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>       

                        <div class="form-group">
                            <label>Any additional notes? </label>
                            <p><small>you can give a little detail about the type of driver you want. Please kindly keep the specifications realistic</small></p>
                            <textarea name="notes" id="notes" class="form-control" rows="8"></textarea>
                        </div>   


                    </div>
                    <div class="col-xs-12 col-md-4 col-md-offset-4">
                        <div class="form-group text-center">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg" required="required">Submit</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
@endsection

@section('link')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@endsection

@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/0.9.2/cleave.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/0.9.2/addons/cleave-phone.ng.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#start_date').datetimepicker();
        $('#working_hours_start, #working_hours_end, #call_time_from, #call_time_to').datetimepicker({
            format : "LT",
            useCurrent : false
        })
        $("#call_time_from").on("dp.change", function (e) {
            $('#call_time_to').data("DateTimePicker").minDate(e.date);
        });
        $("#call_time_to").on("dp.change", function (e) {
            $('#call_time_from').data("DateTimePicker").maxDate(e.date);
        });
        $("#working_hours_start").on("dp.change", function (e) {
            $('#working_hours_end').data("DateTimePicker").minDate(e.date);
        });
        $("#working_hours_end").on("dp.change", function (e) {
            $('#working_hours_start').data("DateTimePicker").maxDate(e.date);
        });
        var cleave = new Cleave('#phone', {
            phone: true,
            phoneRegionCode: 'NG'
        });
        var cleave = new Cleave(' #phone_confirmation', {
            phone: true,
            phoneRegionCode: 'NG'
        });
        var cleave = new Cleave('#pay', {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
    });
    </script>
@endsection
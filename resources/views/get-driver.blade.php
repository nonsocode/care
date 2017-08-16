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
                            <input type="text" name="name" class="form-control" required="required" placeholder="E.g. Mrs Eze Emeka" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required" placeholder="e.g. emeka@gmail.com" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" required class="form-control" placeholder="e.g 08031234567" value="{{old('phone')}}">
                        </div>
                        <div class="form-group">
                            <label>Repeat Phone *</label>
                            <input type="number" name="phone_confirmation" required class="form-control" placeholder="e.g 08031234567">
                        </div>
                        <div class="form-group">
                            <label>Please Specify your LGA of Residence? *</label>
                            <select class="form-control" required name="lga">
								<option>Select an Option</option>
								@foreach ($lgas as $lga)
									<option value="{{$lga->id}}" {{old('lga') == $lga->id ? "selected" : ""}}>{{$lga->name}}</option>
								@endforeach
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label>What type of Driver do you require? *</label>
                            <select class="form-control" required="required" name="driver_type" value="{{old('driver_type')}}">
                            <option>Select an Option</option>
                                @foreach ($driverTypes as $type)
                                	<option value="{{$type->id}}" {{old('driver_type' == $type->id ? "selected" :"")}}>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">What is the job description of the driver ?*</label>
                            <select id="" class="form-control" name="job_description">
                                <option value='' >Select the job description</option>
                                <option value='Drive Around' >Just drive around</option>
                                <option value='Drive Around and Domestic Services'>Drive around, wash the car and other domestic services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Please indicate the working hours of the Driver</label>
                            <input name="working_hours" id=""  class="form-control" placeholder="E.g. The driver would work 3 hours from 8 am to 11 am">
                        </div>         
                        <div class="form-group">
                            <label for="">When exactly do you want to start ?</label>
                            <input name="start_date" id=""   class="form-control" placeholder="E.g. Tomorrow? Within a week? Sometime this month? Next month">
                        </div>         
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Please indicate your exact house or office address </label>
                            <p><small>You don't have to give specifics just tell us the location the driver would be required to meet you. e.g. just saying Alagomeji Yaba Lagos is okay</small></p>
                            <input name="address" id="message" required="required" class="form-control" />
                        </div>   

                        <div class="form-group">
                            <label for="">How often would you need a driver? *</label>
                            <select name="frequency" id="" class="form-control">
                                <option value=''>Select an Option</option>
                                <option value='Whenever the Driver is needed'>Only when ever I ask</option>
                                <option value='Weekly Plan'>Weekly Subscription Plan (Cheaper)</option>
                                <option value='Monthly Plan'>Monthly Subscription Plan (Cheapest)</option>
                            </select>
                        </div>         

                        <div class="form-group">
                            <label>How much are you willing to pay? </label>
                            <input class="form-control" name="pay" placeholder="e.g 30000">
                        </div>
                        <div class="form-group">
                            <label for="">Time of the day you liked to be called ?</label>
                            <input name="call_time" id="" class="form-control" placeholder="E.g. Morning around 10am or afternoon around 2pm">
                        </div>       

                        <div class="form-group">
                            <label>Any additional notes? </label>
                            <p><small>you can give a little detail about the type of driver you want. Please kindly keep the specifications realistic</small></p>
                            <textarea name="notes" class="form-control" rows="8"></textarea>
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
@extends('layouts.default')
@section('content')

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Academic Registration</h3>
	  </div>
	  <div class="panel-body">
	    <div class="row">
			<div class="col-md-6">
			    <form class="form-horizontal to-start form-register" id="form-register" method="post" enctype="multipart/form-data">
			      <div class="form-group">
			        <label class="col-sm-3 control-label" for="exampleInputUsername">Username</label>
			        <div class="col-sm-9">
			            <input name="username" type="text" class="form-control" id="exampleInputUsername" placeholder="john" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputEmail1">Email</label>
			        <div class="col-sm-9">
			            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="john@gmail.com" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputAcademy">Academy Name</label>
			        <div class="col-sm-9">
			            <input name="academy_name" type="text" class="form-control" id="exampleInputAcademy" placeholder="Lorem Ipsum School" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputTimeslots">Timeslots</label>
			        <div class="col-sm-9">
			            <input name="timeslots" type="hidden" class="form-control" id="exampleInputTimeslots" placeholder="10:00AM to 06:00PM" value="">
			                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			                <div class="input-group">
			                  <!-- <div class="input-group-addon">$</div> -->
			                  <select class="form-control" name="timeslot1" id="timeslot1">
			                    <option value="12:00">12:00</option>
			                    <option value="12:30">12:30</option>
			                    <option value="1:00">1:00</option>
			                    <option value="1:30">1:30</option>
			                    <option value="2:00">2:00</option>
			                    <option value="2:30">2:30</option>
			                    <option value="3:00">3:00</option>
			                    <option value="3:30">3:30</option>
			                    <option value="4:00">4:00</option>
			                    <option value="4:30">4:30</option>
			                    <option value="5:00">5:00</option>
			                    <option value="5:30">5:30</option>
			                    <option value="6:00">6:00</option>
			                    <option value="6:30">6:30</option>
			                    <option value="7:00">7:00</option>
			                    <option value="7:30">7:30</option>
			                    <option value="8:00">8:00</option>
			                    <option value="8:30">8:30</option>
			                    <option value="9:00">9:00</option>
			                    <option value="9:30" selected="selected">9:30</option>
			                    <option value="10:00">10:00</option>
			                    <option value="10:30">10:30</option>
			                    <option value="11:00">11:00</option>
			                    <option value="11:30">11:30</option>
			                  </select>
			                  <div class="input-group-addon">:</div>
			                  <select class="form-control" name="timeslot1_1" id="timeslot1_1">
			                    <option value="AM">AM</option>
			                    <option value="PM">PM</option>
			                  </select>
			                  <div class="input-group-addon" >to</div>
			                  <select class="form-control" name="timeslot2" id="timeslot2">
			                    <option value="12:00">12:00</option>
			                    <option value="12:30">12:30</option>
			                    <option value="1:00">1:00</option>
			                    <option value="1:30">1:30</option>
			                    <option value="2:00">2:00</option>
			                    <option value="2:30">2:30</option>
			                    <option value="3:00">3:00</option>
			                    <option value="3:30">3:30</option>
			                    <option value="4:00">4:00</option>
			                    <option value="4:30" selected="selected">4:30</option>
			                    <option value="5:00">5:00</option>
			                    <option value="5:30">5:30</option>
			                    <option value="6:00">6:00</option>
			                    <option value="6:30">6:30</option>
			                    <option value="7:00">7:00</option>
			                    <option value="7:30">7:30</option>
			                    <option value="8:00">8:00</option>
			                    <option value="8:30">8:30</option>
			                    <option value="9:00">9:00</option>
			                    <option value="9:30">9:30</option>
			                    <option value="10:00">10:00</option>
			                    <option value="10:30">10:30</option>
			                    <option value="11:00">11:00</option>
			                    <option value="11:30">11:30</option>
			                  </select>
			                  <div class="input-group-addon">:</div>
			                  <select class="form-control" name="timeslot2_1" id="timeslot2_1">
			                    <option value="AM">AM</option>
			                    <option value="PM" selected="selected">PM</option>
			                  </select>
			                </div>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputPhone">Phone</label>
			        <div class="col-sm-9">
			            <input name="phone" type="text" class="form-control" id="exampleInputPhone" placeholder="+91 9876543219" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputDescription">Description</label>
			        <div class="col-sm-9">
			            <textarea name="description" class="form-control" id="exampleInputDescription" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. " rows="3"></textarea>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputLatitude">Latitude</label>
			        <div class="col-sm-9">
			            <input name="latitude" type="text" class="form-control" id="exampleInputLatitude" placeholder="28.98765783" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputLongitude">Longitude</label>
			        <div class="col-sm-9">
			            <input name="longitude" type="text" class="form-control" id="exampleInputLongitude" placeholder="42.56748927" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputFile">Image</label>
			        <div class="col-sm-9">
			            <input name="image" type="file" id="exampleInputFile" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for="exampleInputTags">Tags</label>
			        <div class="col-sm-9">
			            <textarea name="tags" class="form-control" id="exampleInputTags" placeholder="School, University, Tuition" rows="3"></textarea>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-3 control-label"  for=""></label>
			        <div class="col-sm-9">
			            <button type="submit" class="btn btn-default">Submit</button>
			        </div>
			      </div>
			      
			    </form>
			</div>	 
			<div class="col-md-6" id="alert-messages">
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Welcome!</strong>
				</div>
			</div>     
	    </div>
	  </div>
	</div>
	<script type="text/javascript">
	function loadTimslot()
	{
		var t1 = document.getElementById("timeslot1").value;
		var t11 = document.getElementById("timeslot1_1").value;
		var t2 = document.getElementById("timeslot2").value;
		var t21 = document.getElementById("timeslot2_1").value;

		var timeslots = (t1+" "+t11+" to "+t2+" "+t21);
		document.getElementById("exampleInputTimeslots").value = timeslots;
	}
	loadTimslot();

	    $(".form-register").submit(function(){
	    	loadTimslot();
	        var formData = new FormData($(this)[0]);
	        $.ajax({
	            url: "<?php echo url('/'); ?>/api/signup",
	            type: 'POST',
	            data: formData,
	            async: false,
	            success: function (data) {
	                if(data.status == 'success'){
	                    // alert('Successfully registred.');
	                    document.getElementById("alert-messages").innerHTML += ('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Successfully registred. <a href="<?php echo url('/'); ?>/explore">Goto Explore</a></div>');
	                    document.getElementById("form-register").reset();
	                }else{
	                    // alert(data.message);
	                    document.getElementById("alert-messages").innerHTML += ('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+data.message+'</div>');
	                }
	            },
	            error: function (data){
	                alert("Error : "+data);
	            },
	            cache: false,
	            contentType: false,
	            processData: false
	        });

	        return false;
	    });
	</script>
	<style type="text/css">
	.form-register label{
		text-align: left !important;
	}
	</style>
@stop
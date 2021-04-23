<?php include 'headernew.php';?>



<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/bannerE.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown"></h1>
                <p class="animated fadeInUp"></p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="">

    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/dmabJ7UPND0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>

<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/hey_01.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/hey_02.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/hey_03.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Products<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a><a data-toggle="modal" data-target="#uploadModal" href="#" class="pull-right"><i class="fa fa-upload"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/hey_05.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/hey_06.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/hey_07.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Services Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a><a data-toggle="modal" data-target="#uploadModal" href="#" class="pull-right"><i class="fa fa-upload"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/hey_08.png" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/hey_09.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/hey_10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Branches<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a><a data-toggle="modal" data-target="#uploadModal" href="#" class="pull-right"><i class="fa fa-upload"></i></a></div>
        </div>
		<!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload file</button>-->
		<!-- Modal -->
		<div id="uploadModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">File upload form</h4>
			  </div>
			  <div class="modal-body">
				<!-- Form -->
				<form method='post' action='' enctype="multipart/form-data">
				  Select file : <input type='file' name='file' id='file' class='form-control' ><br>
				  <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
				</form>

				<!-- Preview-->
				<div id='preview'></div>
			  </div>
		 
			</div>

		  </div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>
		
$(document).ready(function(){
  $('#btn_upload').click(function(){

    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file',files);

    // AJAX request
    $.ajax({
      url: 'ajaxfile.php',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response){
        if(response != 0){
          // Show image preview
          $('#preview').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
        }else{
          alert('file not uploaded');
        }
      }
    });
  });
});
</script>
    </div>
</div>
</div>
<!-- services-->



<?php include 'footer.php';?>
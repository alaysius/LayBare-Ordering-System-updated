<?php include 'headernew.php';?>
<div class="container">

       <h1 class="title">Gallery</h1>
       <div class="row gallery">
	   
              <!--<div class="col-sm-4 wowload fadeInUp"><a href="images/photos/hey_04.jpg" title="Fairview" class="gallery-image" data-gallery></a></div>-->
			  <?php $dir          = 'images/photos/packages/';
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \''. $dir. '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
		$value = explode(".", $file);
        $file_type = strtolower(array_pop($value));
		$fileName = array_shift($value);

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
            echo '<div class="col-sm-4 wowload fadeInUp"><button value="', $dir . $file. '" data-toggle="modal" data-target="#editModal" style="position: absolute; top: 4px; right: 50px" class="edit"><i class="fa fa-edit"></i></button><button value="', $dir . $file. '" style="position: absolute; top: 4px; right: 20px" class="remove"><i class="fa fa-remove"></i></button><a href="', $dir. '/'. $file. '" title="Fairview" class="gallery-image" data-gallery><img src="'. $dir. '/'. $file. '" alt="'. $file. '" class="img-responsive"/></a></div>';
        }
    }
};?>
    <div id="editModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Rename Image File</h4>
			  </div>
			  <div class="modal-body">
				<!-- Form -->
				<form method='post' action='' enctype="multipart/form-data">
				<h4>File Name:</h4>
				<label id="label_id"></label><br/><br>
				  Input new name : <input type='text' name='new_name' id='myInput' class='form-control' ><br>
				  <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
				</form>

				<!-- Preview-->
				<div id='preview'></div>
			  </div>
		 
			</div>

		  </div>
		</div>
       </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.remove').click(function() {
                var val = $(this).val();
				
                $.ajax({
                    // your uri, pay attention if the post is going to the right place
                    url: "delete.php",
                    type: "POST",
                    // myVar = name of the var that you will be able to call in php
                    // val = your data
                    data: {'postvar': val}
                });
				location.reload(true);
            });
        });
    </script>
	<script type="text/javascript">
	$(document).ready(function(){
		var val1="";
		$('.edit').click(function() {
                val1 = $(this).val();
				$( "#label_id" ).text(val1);
            });
		$('#btn_upload').click(function() {
                var inputval = $('#myInput').val();
				alert(inputval);
                $.ajax({
                    // your uri, pay attention if the post is going to the right place
                    url: "edit.php",
                    type: "POST",
                    // myVar = name of the var that you will be able to call in php
                    // val = your data
                    data: {'namevar1': inputval, 'namevar': val1}
                });
				location.reload(true);
            });
})
	</script>
	

<?php include 'footer.php';?>
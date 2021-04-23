<?php include 'headernew.php';?>

<div class="container">

<h1 class="title">Visibly Smooth Vanilla Sugar Scrub</h1>



 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/pic/14.jpg" class="img-responsive"  alt="slide" style="height: auto; width: 100%;"></div>
                <div class="item  height-full"><img src="images/pic/02.jpg"  class="img-responsive"  alt="slide" style="height: auto; width: 100%;"></div>
                <div class="item  height-full"><img src="images/pic/03.jpg"  class="img-responsive" alt="slide" style="height: auto; width: 100%;"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p>A nutrient-rich sugar scrub enriched with vanilla extracts that hydrates and brightens the skin.</p>
    <p>Directions for Use: Scoop a small amount to consume. Gently rub onto skin until the oil dries out. Then rinse thoroughly with water and pat dry. Can be used on dry skin but slightly wet area is recommended.</p>
    <p>Storage Conditions: Store at room temperature. If you keep it in your shower, just make sure it's not directly under water.</p>
	</div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Ingredients</h3>   
    <ul>
     <li>Sucrose, caprylic/capric triglyceride </li>
      <li>Aloe Barbadensis leaf extract</li>
      <li>Argania Spinosa (Argan) kernel oil, vanilla scent</li>
      
      <li></li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Net Weight<span>60 ml</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span>Php 350.00</span></div>
    </div>
	<div class="col-sm-5 col-md-4">
<h3>Fill out to Order</h3>
    <form action="reserveE.php" role="form" class="wowload fadeInRight"method="POST" onSubmit="alert('Order Placed!');">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required= "">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required= "">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control" name="phone"  placeholder="Phone" required= "">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="quantity">
              <option>Quantity</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="modeofpayment">
              <option>Mode of Payment</option>
              <option value="Cash on Delivery">COD</option>
              <option value="Credit Card">Credit Card</option>
              <option value="GCash">Thru GCash or 7/11</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="date" id="expiry-month">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
			    <option value="18">18</option>
				<option value="19">19</option>	 
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
			    <option value="23">23</option>
			    <option value="24">24</option>
			    <option value="25">25</option>
			    <option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="month">
                <option>Month</option>
                <option value="January">Jan</option>
                <option value="February">Feb</option>
                <option value="March">Mar</option>
                <option value="April">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">Aug</option>
                <option value="September">Sep</option>
                <option value="October">Oct</option>
                <option value="November">Nov</option>
                <option value="December">Dec</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
			    <option>Year</option>
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="insertdata">
    </form>    
</div>
</div>  
</div>
</div>
	</div>
	</div>
                     


</div>
<?php include 'footer.php';?>
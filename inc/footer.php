   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<!-- <div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="faq.php">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.php"><span>Site Map</span></a></li>
						<li><a href="preview.php"><span>Search Terms</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.php">Sign In</a></li>
							<li><a href="index.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.php">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+84 389876543</span></li>
							<li><span>+84 388884432</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div> -->
			<!-- <div class="copy_right">
				<hr>
		   </div> -->
		   <ul>
			<h4>INFORMATION</h4>
			<li><a href="">About Us</a></li>
			<li><a href="">Customer Service</a></li>
			<li><a href="">Advanced Search</a></li>
			<li><a href="">Orders and Returns</a></li>
			<li><a href="">Contact Us</a></li>
		   </ul>
		   <ul>
			<h4>WHY BUY FROM US</h4>
			<li><a href="">Customer Service</a></li>
			<li><a href="">Privacy Policy</a></li>
			<li><a href="">Site Map</a></li>
		   </ul>
		   <ul>
			<h4>MY ACCOUNT</h4>
			<li><a href="">Sign in</a></li>
			<li><a href="">View cart</a></li>
			<li><a href="">My Wishlist</a></li>
			<li><a href="">Order Tracking</a></li>
		   </ul>
		   <ul>
			<h4>CONTACT</h4>
			<li>+84 395119174</li>
			<li>+84 123459999</li>
			<li>
				<ul class="footer_socials">
					<li><i class="fa-brands fa-facebook"></i></li>
					<li><i class="fa-brands fa-twitter"></i></li>
					<li><i class="fa-brands fa-instagram"></i></li>
					<li><i class="fa-brands fa-youtube"></i></li>
				</ul>
			</li>
		   </ul>
     </div>
	 <div class="copy_right">
				<hr>
				<p>Copyright by NQT&NTKD® Since 2023</p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});


		function onmota(){
    var divmota=document.getElementById("motanhe");
    var divbaohanh=document.getElementById("baohanhnhe");

    var idmota=document.getElementById("moTa");
    var idbaohanh=document.getElementById("BaoHanh");

    divmota.style.display="block";

    idmota.style.background ="#efebeb87";
    idmota.style.border="1px solid";
    idmota.style.color="gray";

    divbaohanh.style.display="none";

    idbaohanh.style.background ="#c8c2c2";
    idbaohanh.style.border="1px solid";
    idbaohanh.style.color="white";

}
function onbaohanh(){
    var divmota=document.getElementById("motanhe");
    var divbaohanh=document.getElementById("baohanhnhe");

    var idmota=document.getElementById("moTa");
    var idbaohanh=document.getElementById("BaoHanh");

    divbaohanh.style.display="block";
    idbaohanh.style.background ="#efebeb87";
    idbaohanh.style.border="1px solid";
    idbaohanh.style.color="gray";
    // idbaohanh.style.borderBottom="5px solid white";

    divmota.style.display="none";

    idmota.style.background ="#c8c2c2";
    idmota.style.border="1px solid";
    idmota.style.color="white";

}


// cho menu
var $stickyHeight = 50; // chiều cao của menu
var $padding = 0; // khoảng cách top của menu khi dính
var $topOffset = 30; // khoảng cách từ top của menu khi bắt đầu dính (tức là khoảng cách tính từ trên xuống đến vị trí đặt menu )
var $footerHeight = 0; // Định vị điểm dừng của menu, tính từ chân lên 
/* <![CDATA[ */
function scrollSticky(){
 if($(window).height() >= $stickyHeight) {
     var aOffset = $('#sticky').offset();
if($(document).height() - $footerHeight - $padding < $(window).scrollTop() + $stickyHeight) {
         var $top = $(document).height() - $stickyHeight - $footerHeight - $padding - 0;
         $('#sticky').attr('style', 'position:absolute; top:'+$top+'px;');

     }else if($(window).scrollTop() + $padding > $topOffset) {
         $('#sticky').attr('style', 'position:fixed; top:'+$padding+'px;');
}else{
         $('#sticky').attr('style', 'position:relative;');
     }
 }
}
$(window).scroll(function(){
 scrollSticky();
});
	</script>
</body>
</html>

<!-- script-for sticky-nav -->
<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>&copy; 2022 <a>Wholesale Online Shop</a> | All Rights Reserved. Designed by <a>Divyaraj Mehta</a> and <a>Vrunda Vadaliya</a></p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="/admin/"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										{{-- <li id="menu-academico" ><a href="/admin/blank"><i class="fa fa-square nav_icon"></i><span>Blank</span><div class="clearfix"></div></a></li> --}}
										<li><a href="/admin/users/list"><i class="fa fa-users"></i> <span>Users</span><div class="clearfix"></div></a></li>
										<li><a href="/admin/products"><i class="fa fa-lightbulb-o"></i> <span>Products</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="/admin/carts"><i class="fa fa-archive"></i><span>Carts</span><div class="clearfix"></div></a></li>
										<li><a href="/admin/orders"><i class="fa fa-truck"></i> <span>Orders</span><div class="clearfix"></div></a></li>
										<li><a href="/admin/invoices"><i class="fa fa-file-text-o"></i> <span>Invoices</span><div class="clearfix"></div></a></li>
										
										<li><a href="/admin/gallery"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-edit" aria-hidden="true"></i><span> Useful Pages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul id="menu-academico-sub" >
											 <li id="menu-academico-avaliacoes" ><a href="/admin/blank">Blank Page</a></li>
											<li id="menu-academico-avaliacoes" ><a href="/admin/button">Buttons</a></li>
											<li id="menu-academico-avaliacoes" ><a href="/admin/input">Forms</a></li>
											<li id="menu-academico-avaliacoes" ><a href="/admin/icons">Icons</a></li>
											<li id="menu-academico-avaliacoes" ><a href="/admin/tabels">Tables</a></li>
											 <li id="menu-academico-avaliacoes" ><a href="/admin/typography">Typography</a></li>
											 {{-- <li id="menu-academico-avaliacoes" ><a href="/admin/grid">Grids</a></li> --}}
										   </ul>	
										 </li>
									  
										{{-- <li><a href="/admin/tabels"><i class="fa fa-table"></i>  <span>Tables</span><div class="clearfix"></div></a></li>
										<li><a href="/admin/input"><i class="fa fa-check-square-o nav_icon"></i>  <span>Forms</span><div class="clearfix"></div></a></li> --}}
										<li id="menu-academico" ><a href="/admin/profile"><i class="fa fa-user nav_icon"></i><span>Profile</span><div class="clearfix"></div></a></li>
										
										 {{-- <li id="menu-academico" ><a href="/admin/inbox"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li> --}}
									
									{{-- <li id="menu-academico" ><a href="/admin/charts"><i class="fa fa-bar-chart"></i><span>Charts</span><div class="clearfix"></div></a></li> --}}
									{{-- <li id="menu-academico" ><a href="/admin/errorpage"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Error Page</span><div class="clearfix"></div></a></li> --}}
									  
									{{-- <li><a href="/admin/maps"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Maps</span><div class="clearfix"></div></a></li> --}}
									<li><a href="{{ route('admin.logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i>  <span>Logout</span><div class="clearfix"></div>
                                </a></li>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							        
									 
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
							
<!--js -->
<script src="{{url('admin_side/js/jquery.nicescroll.js')}}"></script>
<script src="{{url('admin_side/js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{url('admin_side/js/bootstrap.min.js')}}"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="{{url('admin_side/js/raphael-min.js')}}"></script>
<script src="{{url('admin_side/js/morris.js')}}"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
	<!-- candlestick -->
	<script type="text/javascript" src="{{url('admin_side/js/jquery.jqcandlestick.min.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{url('admin_side/css/jqcandlestick.css')}}" />
		<!-- //candlestick -->
		<!-- calendar -->
	<script type="text/javascript" src="{{url('admin_side/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
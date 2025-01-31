<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">
							<p>Designed by <a href="">Waste Management System</a></p>
						</div>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="js/lightbox-plus-jquery.min.js"></script>
<script>
      function Attended(id)
      {
          var txt;
          var r=confirm("Do you Clear Complent?");
          if(r==true)
          {
              window.location.replace("compattended?id="+id+"");
          }
          else
          {

          }
          document.getElementById("demo").innerHTML=txt;
      }
  </script>
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>


</div>
</body></html>
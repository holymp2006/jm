{**
 * templates/common/footer.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}
 {if $displayCreativeCommons}
 {translate key="common.ccLicense"}
 {/if}
 {if $pageFooter}
 <br /><br />
 <div id="pageFooter">{$pageFooter}</div>
 {/if}
 {call_hook name="Templates::Common::Footer::PageFooter"}
</div><!-- content -->
</div><!-- main -->

{call_hook|assign:"leftSidebarCode" name="Templates::Common::LeftSidebar"}
{call_hook|assign:"rightSidebarCode" name="Templates::Common::RightSidebar"}

{if $leftSidebarCode || $rightSidebarCode}
<div id="sidebar" class="col-md-3">
		{* {if $leftSidebarCode}
			<div id="leftSidebar">
				{$leftSidebarCode}
			</div>
			{/if}  *}
			{if $rightSidebarCode}
			<div id="rightSidebar">
				{$rightSidebarCode}
			</div>
			{/if}
		</div>
		{/if}


	</div><!-- .row -->

</div><!-- body -->
{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}

<!-- </div> --><!-- container -->

<footer  class="footer">
	
	<div class="footer_top well well-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#"> <img src="{$baseUrl}/public/assets/images/journal.png" class="img-circle" alt="View Journals"> <span class="footer_top">&nbsp;Journals</span></a>	
				</div>	
				<div class="col-sm-4">
					<a href="#"> <img src="{$baseUrl}/public/assets/images/archive.png" class="img-circle" alt="Our Archive"> <span class="footer_top">&nbsp;Archives </span></a>				
				</div>
				<div class="col-sm-4">
					<a href="#"> <img src="{$baseUrl}/public/assets/images/editorial.png" class="img-circle" alt="Editorials"> <span class="footer_top">&nbsp;Editorials </span> </a>				
				</div>		
			</div>	 <!--.row-->		
		</div>
	</div>
	

	<div class="dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text">
					<div style="background: url('{$baseUrl}/public/assets/images/footer-logo-bg.png') no-repeat;">
						<img src="{$baseUrl}/public/assets/images/footer-logo.png" alt="" class="footer-logo">
						<div style="background: url('{$baseUrl}/public/assets/images/world-map.png') no-repeat center center; background-size: 100%;"> <p></p>
							<address>
								<i class="fa fa-map-marker"></i><strong>  Headquarters:</strong><br>
								C/O Jos University Teaching Hospital,<br>
								P.M.B. 2076, Jos. Nigeria.<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> +234 (80) 3715 4469 <br>
							<abbr title="Email Address"><strong>Email:</strong></abbr><a href="mailto:info@journalmanagers.com"> info@journalmanagers.com</a> 
						</div>
					</div>
				</div>
				<div class="col-sm-4 text">
					<h4>
						About Us
					</h4>
					<p align="justify" class="about-us">
						Journal Managers is committed to providing and discriminating World Class Information Globally, by making genuine contributions to the science and health communities through publishing trusted leading-edge Scientific, Technical and Medical (STM) information - pushing the frotiers and fueling a continuous cycle of exploration, discovery and application, diseminating and preserving STM literature to meet the information needs of the World's present future scientists and clinicians - transforming ideas to realities.
					</p>
					<div class="social">
						<a href="#" alt="Like us on Facebook"><i class="fa fa-facebook social-item"></i></a>
						<a href="#" alt="Follow us on Twitter"><i class="fa fa-twitter social-item"></i></a>
						<a href="#" alt="Let's Connect on LinkedIn"><i class="fa fa-linkedin social-item"></i></a>
						<!-- <a href="#"><i class="fa fa-github social-item"></i></a> -->
					</div>				
				</div>		
				<div class="col-sm-4 text">
					<div class="row">

						<div class="col-md-6">
							<div class="counter counter-small"><span data-from="0" data-to="9" data-refresh-interval="1" data-speed="30000" data-comma="false">3</span></div>
							<h5 style="color: #CCC;">JOURNALS</h5>
						</div>

						<div class="col-md-6">
							<div class="counter counter-small"><span data-from="0" data-to="99" data-refresh-interval="1" data-speed="20000" data-comma="true">20</span></div>
							<h5 style="color: #CCC;">EDITORS</h5>
						</div>

					</div>				
					<h5><strong>Subscribe</strong> to Our Newsletter to get Important News on our Journals</h5>				
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input aria-required="true" id="sub-form-email" name="sub-form-email" class="form-control required email" placeholder="Enter your Email" type="email">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit">Subscribe</button>
						</span>
					</div>
					<p></p>
					<p>Copyright © 2016 <a href="http://www.journalmanagers.com/" target="blank"><Journal Managers</a> / All rights reserved.</p>                				
				</div>
			</div> <!-- end row -->
		</div>
	</footer>
</body>
</html>
{**
	* templates/common/navbar.tpl
	*
	* Copyright (c) 2013-2015 Simon Fraser University Library
	* Copyright (c) 2003-2015 John Willinsky
	* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
	*
	* Navigation Bar
	*
	*}
	
	<nav id="navbar" class="navbar navbar-default row" role="navigation">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div id="headerlogo" class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" id="logo" class="navbar-brand logo">
					<img src="{$baseUrl}/public/assets/images/navbar-logo.png" alt="JM logo" class="img-responsive">
				</a>
			</div> <!-- end #headerlogo -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse top-menu">
				<ul class="nav navbar-nav navbar-right menu" role="menu">
					
					<!--<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#" role="button" aria-expanded="false">About Umuawulu<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu bullet pull-right" role="menu"> 
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-users"></i> History</a></li>
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-users"></i> People And Culture</a></li>
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-bank"></i> U.P.U.</a></li>	
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-hand-o-right"></i> Get Direction</a></li>	
						</ul> 
					</li> -->
					
					<li id="home"><a href="{url page="index"}">{translate key="navigation.home"}</a></li>
					<li id="about"><a href="{url page="about"}">{translate key="navigation.about"}</a></li>


					{if $currentJournal && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#" role="button" aria-expanded="false">Browse<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu bullet pull-right" role="menu">
					{/if}

							{if $siteCategoriesEnabled}
							<li class="navbar-main-menu-item" id="categories"><a href="{url journal="index" page="search" op="categories"}"><i class="fa fa-th"></i>&nbsp;{translate key="navigation.categories"}</a></li>
							
							<li role="separator" class="divider"></li>
							{/if}{* $categoriesEnabled *}

							{if $currentJournal && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}

							<li class="navbar-main-menu-item" id="current"><a href="{url page="issue" op="current"}"><i class="fa fa-history"></i>&nbsp;{translate key="navigation.current"}</a></li>
							<li class="navbar-main-menu-item" id="archives"><a href="{url page="issue" op="archive"}"><i class="fa fa-files-o"></i>&nbsp;{translate key="navigation.archives"}</a></li>
							{/if}

							{if $enableAnnouncements}
							<li role="separator" class="divider"></li>
							<li class="navbar-main-menu-item" id="announcements"><a href="{url page="announcement"}"><i class="fa fa-bullhorn"></i>&nbsp;{translate key="announcement.announcements"}</a></li>
							{/if}{* enableAnnouncements *}


					{if $currentJournal && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
						</ul> <!--.dropdown-menu.bullet.pull-right-->
					</li>
					{/if}

					{call_hook name="Templates::Common::Header::Navbar::CurrentJournal"}

					{foreach from=$navMenuItems item=navItem key=navItemKey}
					{if $navItem.url != '' && $navItem.name != ''}
					<li class="navItem" id="navItem-{$navItemKey|escape}"><a href="{if $navItem.isAbsolute}{$navItem.url|escape}{else}{$baseUrl}{$navItem.url|escape}{/if}">{if $navItem.isLiteral}{$navItem.name|escape}{else}{translate key=$navItem.name}{/if}</a></li>
					{/if}
					{/foreach}



					{if !$currentJournal || $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
					<li>
						<div class="col-sm-12 col-md-12">
							<form class="navbar-form" role="search" method="post"  action="{url page="search" op="search"}">

								{capture assign="filterInput"}{call_hook name="Templates::Search::SearchResults::FilterInput" filterName="simpleQuery" filterValue="" size=8 filterPlaceholder="Search"}{/capture}

								<div class="input-group">
									{if empty($filterInput)}
									<input id="simpleQuery" type="text" class="form-control" placeholder='{translate key="navigation.search"}' name="simpleQuery">
									{else}
									{$filterInput}
									{/if}
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
									</div>
								</div>
							</form>
						</div>					
					</li>
					{/if}


					{if $isUserLoggedIn}
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#" role="button" aria-expanded="false">
							<div class="img-circle profile-img">
								<img class="img-responsive img-circle" alt="" src="">
							</div>
							{$loggedInUsername|escape}<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu bullet pull-right" role="menu">
							{if $hasOtherJournals}
							<li class="navbar-main-menu-item"><a href="{url journal="index" page="user"}">{translate key="plugins.block.user.myJournals"}</a></li>
							{/if}
							<li class="navbar-main-menu-item"><a href="{url page="user" op="profile"}">{translate key="plugins.block.user.myProfile"}</a></li>

							<li role="separator" class="divider"></li>

							<li class="navbar-main-menu-item"><a href="{url page="login" op="signOut"}">{translate key="plugins.block.user.logout"}</a></li>
							{if $userSession->getSessionVar('signedInAs')}
							<li class="navbar-main-menu-item"><a href="{url page="login" op="signOutAsUser"}">{translate key="plugins.block.user.signOutAsUser"}</a></li>
							{/if}				

						</ul>
					</li>
					{else}
					<li>
						<a>{translate key="common.already.a.user"}</a>
					</li>
					<li id="login" role="presentation" class="dropdown">
						<a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#">{translate key="navigation.login"}
							<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>


						<ul id="login-nav" class="dropdown-menu bullet pull-right">
							<li>
								<div class="row">
									<div class="col-md-12">
										<form class="form" role="form" method="post" action="{$userBlockLoginUrl}" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<label class="sr-only" for="sidebar-username">{translate key="user.username"}</label>
												<input type="text" id="sidebar-username" name="username" class="form-control" id="sidebar-username" placeholder='{translate key="user.username"}' required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="sidebar-password">{translate key="user.password"}</label>
												<input type="password" class="form-control" id="sidebar-password" name="password" value="{$password|escape}" placeholder='{translate key="user.password"}' required>
												<div class="help-block text-right"><a  href="{url page="login" op="lostPassword"}">{translate key="user.login.forgotPassword"}</a>
												</div>
											</div>
											<div class="form-group">
												<input type="submit" value="{translate key="user.login"}" class="btn btn-primary btn-block">
											</div>
											
											<div class="checkbox">
												<label>
													<input type="checkbox" id="remember" name="remember" value="1" >{translate key="plugins.block.user.rememberMe"}
												</label>
											</div>

										</form>
									</div>

									<div class="bottom text-center">
										Not Registered ? <a href="{url page="user" op="register"}"><b>Join Us</b></a>
									</div>

								</div>
							</li>

						</ul>


					</li>
					{/if}{* $isUserLoggedIn *}

				</ul>
			</div> <!-- end .collapse .navbar-collapse -->

		</div> <!-- end .container -->

            </nav> <!-- end nav -->
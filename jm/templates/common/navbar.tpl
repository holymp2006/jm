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
					
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#" role="button" aria-expanded="false">About Umuawulu<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu bullet pull-right" role="menu"> 
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-users"></i> History</a></li>
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-users"></i> People And Culture</a></li>
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-bank"></i> U.P.U.</a></li>	
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-hand-o-right"></i> Get Direction</a></li>	
						</ul> 
					</li>  
					
					<li id="home"><a href="{url page="index"}">{translate key="navigation.home"}</a></li>
					<li id="about"><a href="{url page="about"}">{translate key="navigation.about"}</a></li>

					{if $siteCategoriesEnabled}
					<li id="categories"><a href="{url journal="index" page="search" op="categories"}">{translate key="navigation.categories"}</a></li>
					{/if}{* $categoriesEnabled *}

					{if $currentJournal && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
					<li id="current"><a href="{url page="issue" op="current"}">{translate key="navigation.current"}</a></li>
					<li id="archives"><a href="{url page="issue" op="archive"}">{translate key="navigation.archives"}</a></li>
					{/if}

					{if $enableAnnouncements}
					<li id="announcements"><a href="{url page="announcement"}">{translate key="announcement.announcements"}</a></li>
					{/if}{* enableAnnouncements *}

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
					<li id="login"><a class="btn btn-default btn-primary" href="{url page="login"}">{translate key="navigation.login"}</a></li>
					{if !$hideRegisterLink}
					<li id="register"><a class="btn btn-default btn-primary" href="{url page="user" op="register"}">{translate key="navigation.register"}</a></li>
					{/if}
					{/if}{* $isUserLoggedIn *}

				</ul>
			</div> <!-- end .collapse .navbar-collapse -->

		</div> <!-- end .container -->

            </nav> <!-- end nav -->
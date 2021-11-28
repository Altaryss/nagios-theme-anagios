<?php
include_once(dirname(__FILE__).'/includes/utils.inc.php');

$this_version = '4.4.6';
$link_target = 'main';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<title>Nagios Core</title>
<link href="stylesheets/common.css?<?php echo $this_version; ?>" type="text/css" rel="stylesheet">
</head>


<body class='navbar'>

<div class="navbarlogo">
	<a href="https://www.github.com/Altaryss" target="_blank">
		<img src="images/MMiFoen.png" alt="Altaryss">
		<h1>A'Nagios</h1>
	</a>
</div>

<div class="navsection">
	<div class="navsectiontitle">General</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li class="std">
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    				<path fill="currentColor" d="M13,3V9H21V3M13,21H21V11H13M3,21H11V15H3M3,13H11V3H3V13Z" />
				</svg>
				<a class="tra-gb" href="main.php" target="<?php echo $link_target;?>">Home</a>
			</li>
			<li class="std">
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    				<path fill="currentColor" d="M4 4V22H20V24H4C2.9 24 2 23.1 2 22V4H4M15 7H20.5L15 1.5V7M8 0H16L22 6V18C22 19.11 21.11 20 20 20H8C6.89 20 6 19.1 6 18V2C6 .89 6.89 0 8 0M17 16V14H8V16H17M20 12V10H8V12H20Z" />
				</svg>
				<a class="tra-gb" href="https://go.nagios.com/nagioscore/docs" target="_blank">Documentation</a>
			</li>
		</ul>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">Current Status</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li class="std">
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    				<path fill="currentColor" d="M3 4V16H21V4H3M3 2H21C22.1 2 23 2.89 23 4V16C23 16.53 22.79 17.04 22.41 17.41C22.04 17.79 21.53 18 21 18H14V20H16V22H8V20H10V18H3C2.47 18 1.96 17.79 1.59 17.41C1.21 17.04 1 16.53 1 16V4C1 2.89 1.89 2 3 2M10.84 8.93C11.15 8.63 11.57 8.45 12 8.45C12.43 8.46 12.85 8.63 13.16 8.94C13.46 9.24 13.64 9.66 13.64 10.09C13.64 10.53 13.46 10.94 13.16 11.25C12.85 11.56 12.43 11.73 12 11.73C11.57 11.73 11.15 11.55 10.84 11.25C10.54 10.94 10.36 10.53 10.36 10.09C10.36 9.66 10.54 9.24 10.84 8.93M10.07 12C10.58 12.53 11.28 12.82 12 12.82C12.72 12.82 13.42 12.53 13.93 12C14.44 11.5 14.73 10.81 14.73 10.09C14.73 9.37 14.44 8.67 13.93 8.16C13.42 7.65 12.72 7.36 12 7.36C11.28 7.36 10.58 7.65 10.07 8.16C9.56 8.67 9.27 9.37 9.27 10.09C9.27 10.81 9.56 11.5 10.07 12M6 10.09C6.94 7.7 9.27 6 12 6C14.73 6 17.06 7.7 18 10.09C17.06 12.5 14.73 14.18 12 14.18C9.27 14.18 6.94 12.5 6 10.09Z" />
				</svg>
				<a href="<?php echo $cfg["cgi_base_url"];?>/tac.cgi" target="<?php echo $link_target;?>">Tactical Overview</a></li>
			<li class="std">
				<svg width="22" height="22" viewBox="0 0 24 24">
    				<path fill="currentColor" d="M18,15A3,3 0 0,1 21,18A3,3 0 0,1 18,21C16.69,21 15.58,20.17 15.17,19H14V17H15.17C15.58,15.83 16.69,15 18,15M18,17A1,1 0 0,0 17,18A1,1 0 0,0 18,19A1,1 0 0,0 19,18A1,1 0 0,0 18,17M18,8A1.43,1.43 0 0,0 19.43,6.57C19.43,5.78 18.79,5.14 18,5.14C17.21,5.14 16.57,5.78 16.57,6.57A1.43,1.43 0 0,0 18,8M18,2.57A4,4 0 0,1 22,6.57C22,9.56 18,14 18,14C18,14 14,9.56 14,6.57A4,4 0 0,1 18,2.57M8.83,17H10V19H8.83C8.42,20.17 7.31,21 6,21A3,3 0 0,1 3,18C3,16.69 3.83,15.58 5,15.17V14H7V15.17C7.85,15.47 8.53,16.15 8.83,17M6,17A1,1 0 0,0 5,18A1,1 0 0,0 6,19A1,1 0 0,0 7,18A1,1 0 0,0 6,17M6,3A3,3 0 0,1 9,6C9,7.31 8.17,8.42 7,8.83V10H5V8.83C3.83,8.42 3,7.31 3,6A3,3 0 0,1 6,3M6,5A1,1 0 0,0 5,6A1,1 0 0,0 6,7A1,1 0 0,0 7,6A1,1 0 0,0 6,5M11,19V17H13V19H11M7,13H5V11H7V13Z" />
				</svg>
				<div class="lg-cat">
					<a href="map.php?host=all" target="<?php echo $link_target;?>">Map</a><a class="just-ct" href="<?php echo $cfg["cgi_base_url"];?>/statusmap.cgi?host=all" target="<?php echo $link_target;?>">(Legacy)</a>
				</div>
			</li>
			<li class="std">
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    				<path fill="currentColor" d="M5 9C3.9 9 3 9.9 3 11V15C3 16.11 3.9 17 5 17H11V19H10C9.45 19 9 19.45 9 20H2V22H9C9 22.55 9.45 23 10 23H14C14.55 23 15 22.55 15 22H22V20H15C15 19.45 14.55 19 14 19H13V17H19C20.11 17 21 16.11 21 15V11C21 9.9 20.11 9 19 9H5M6 12H8V14H6V12M9.5 12H11.5V14H9.5V12M13 12H15V14H13V12Z" />
				</svg>
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail" target="<?php echo $link_target;?>">Hosts</a>
			</li>
			<li class="std">
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    				<path fill="currentColor" d="M4.93,3.93C3.12,5.74 2,8.24 2,11C2,13.76 3.12,16.26 4.93,18.07L6.34,16.66C4.89,15.22 4,13.22 4,11C4,8.79 4.89,6.78 6.34,5.34L4.93,3.93M19.07,3.93L17.66,5.34C19.11,6.78 20,8.79 20,11C20,13.22 19.11,15.22 17.66,16.66L19.07,18.07C20.88,16.26 22,13.76 22,11C22,8.24 20.88,5.74 19.07,3.93M7.76,6.76C6.67,7.85 6,9.35 6,11C6,12.65 6.67,14.15 7.76,15.24L9.17,13.83C8.45,13.11 8,12.11 8,11C8,9.89 8.45,8.89 9.17,8.17L7.76,6.76M16.24,6.76L14.83,8.17C15.55,8.89 16,9.89 16,11C16,12.11 15.55,13.11 14.83,13.83L16.24,15.24C17.33,14.15 18,12.65 18,11C18,9.35 17.33,7.85 16.24,6.76M12,9A2,2 0 0,0 10,11A2,2 0 0,0 12,13A2,2 0 0,0 14,11A2,2 0 0,0 12,9M11,15V19H10A1,1 0 0,0 9,20H2V22H9A1,1 0 0,0 10,23H14A1,1 0 0,0 15,22H22V20H15A1,1 0 0,0 14,19H13V15H11Z" />
				</svg>
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all" target="<?php echo $link_target;?>">Services</a>
			</li>
			<li class="col">
				<div class="linksh">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    					<path fill="currentColor" d="M13,19H14A1,1 0 0,1 15,20H22V22H15A1,1 0 0,1 14,23H10A1,1 0 0,1 9,22H2V20H9A1,1 0 0,1 10,19H11V17H4A1,1 0 0,1 3,16V12A1,1 0 0,1 4,11H20A1,1 0 0,1 21,12V16A1,1 0 0,1 20,17H13V19M4,3H20A1,1 0 0,1 21,4V8A1,1 0 0,1 20,9H4A1,1 0 0,1 3,8V4A1,1 0 0,1 4,3M9,7H10V5H9V7M9,15H10V13H9V15M5,5V7H7V5H5M5,13V15H7V13H5Z" />
					</svg>
					<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=overview" target="<?php echo $link_target;?>">Host Groups</a>
				</div>	
				<ul>
					<div class="line"></div>
					<li>
						<div class="corner"></div>
						<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=summary" target="<?php echo $link_target;?>">Summary</a>
					</li>
					<li>
						<div class="corner"></div>
						<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=grid" target="<?php echo $link_target;?>">Grid</a>
					</li>
				</ul>
			</li>
			<li class="col">
				<div class="linksh">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    					<path fill="currentColor" d="M12,2A8,8 0 0,0 4,10C4,14.03 7,17.42 11,17.93V19H10A1,1 0 0,0 9,20H2V22H9A1,1 0 0,0 10,23H14A1,1 0 0,0 15,22H22V20H15A1,1 0 0,0 14,19H13V17.93C17,17.43 20,14.03 20,10A8,8 0 0,0 12,2M12,4C12,4 12.74,5.28 13.26,7H10.74C11.26,5.28 12,4 12,4M9.77,4.43C9.5,4.93 9.09,5.84 8.74,7H6.81C7.5,5.84 8.5,4.93 9.77,4.43M14.23,4.44C15.5,4.94 16.5,5.84 17.19,7H15.26C14.91,5.84 14.5,4.93 14.23,4.44M6.09,9H8.32C8.28,9.33 8.25,9.66 8.25,10C8.25,10.34 8.28,10.67 8.32,11H6.09C6.03,10.67 6,10.34 6,10C6,9.66 6.03,9.33 6.09,9M10.32,9H13.68C13.72,9.33 13.75,9.66 13.75,10C13.75,10.34 13.72,10.67 13.68,11H10.32C10.28,10.67 10.25,10.34 10.25,10C10.25,9.66 10.28,9.33 10.32,9M15.68,9H17.91C17.97,9.33 18,9.66 18,10C18,10.34 17.97,10.67 17.91,11H15.68C15.72,10.67 15.75,10.34 15.75,10C15.75,9.66 15.72,9.33 15.68,9M6.81,13H8.74C9.09,14.16 9.5,15.07 9.77,15.56C8.5,15.06 7.5,14.16 6.81,13M10.74,13H13.26C12.74,14.72 12,16 12,16C12,16 11.26,14.72 10.74,13M15.26,13H17.19C16.5,14.16 15.5,15.07 14.23,15.57C14.5,15.07 14.91,14.16 15.26,13Z" />
					</svg>
					<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=overview" target="<?php echo $link_target;?>">Service Groups</a>
				</div>
				<ul>
					<div class="line"></div>
					<li>
						<div class="corner"></div>
						<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=summary" target="<?php echo $link_target;?>">Summary</a>
					</li>
					<li>
						<div class="corner"></div>
						<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=grid" target="<?php echo $link_target;?>">Grid</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="navsectionheader">
		<div class="navsectiontitle">Problems</div>
		<ul class="navsectionlinks">
			<li class="std">
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&amp;servicestatustypes=28" target="<?php echo $link_target;?>">Services</a>
				<a class="just-ct" href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&amp;type=detail&amp;hoststatustypes=3&amp;serviceprops=10&amp;servicestatustypes=28" target="<?php echo $link_target;?>">(Unhandled)</a>
			</li>
			<li class="std">
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12" target="<?php echo $link_target;?>">Hosts</a>
				<a class="just-ct" href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12&amp;hostprops=42" target="<?php echo $link_target;?>">(Unhandled)</a>
			</li>
			<li class="std">
				<a href="<?php echo $cfg["cgi_base_url"];?>/outages.cgi" target="<?php echo $link_target;?>">Network Outages</a>
			</li>
		</ul>
	</div>
	<div class="navbarsearch">
		<form method="get" action="<?php echo $cfg["cgi_base_url"];?>/status.cgi" target="<?php echo $link_target;?>">
			<fieldset>
				<legend>Quick Search</legend>
				<input type='hidden' name='navbarsearch' value='1'>
				<input type='text' name='host' size='15' class="NavBarSearchItem" placeholder="Enter your search...">
			</fieldset>
		</form>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">Reports</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li class="std">
				<a href="<?php echo $cfg["cgi_base_url"];?>/avail.cgi" target="<?php echo $link_target;?>">Availability</a>
			</li>
			<li class="std">
				<a href="trends.html" target="<?php echo $link_target;?>">Trends</a>
				<a class="just-ct" href="<?php echo $cfg["cgi_base_url"];?>/trends.cgi" target="<?php echo $link_target;?>">(Legacy)</a>
			</li>
			<li class="col">
				<div class="linksh">
					<a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">Alerts</a>
				</div>
				<ul>
					<div class="line" style="height"></div>
					<li>
						<div class="corner"></div>
						<a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">History</a>
					</li>
					<li>
						<div class="corner"></div>
						<a href="<?php echo $cfg["cgi_base_url"];?>/summary.cgi" target="<?php echo $link_target;?>">Summary</a></li>
					<li>
						<div class="corner"></div>
						<a href="histogram.html" target="<?php echo $link_target;?>">Histogram</a>
						<a class="just-ct" href="<?php echo $cfg["cgi_base_url"];?>/histogram.cgi" target="<?php echo $link_target;?>">(Legacy)</a>
					</li>
				</ul>
			</li>
			<li class="std">
				<a href="<?php echo $cfg["cgi_base_url"];?>/notifications.cgi?contact=all" target="<?php echo $link_target;?>">Notifications</a>
			</li>
			<li class="std">
				<a href="<?php echo $cfg["cgi_base_url"];?>/showlog.cgi" target="<?php echo $link_target;?>">Event Log</a>
			</li>
		</ul>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">System</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li class="std"><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=3" target="<?php echo $link_target;?>">Comments</a></li>
			<li class="std"><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=6" target="<?php echo $link_target;?>">Downtime</a></li>
			<li class="std"><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=0" target="<?php echo $link_target;?>">Process Info</a></li>
			<li class="std"><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=4" target="<?php echo $link_target;?>">Performance Info</a></li>
			<li class="std"><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=7" target="<?php echo $link_target;?>">Scheduling Queue</a></li>
			<li class="std"><a href="<?php echo $cfg["cgi_base_url"];?>/config.cgi" target="<?php echo $link_target;?>">Configuration</a></li>
		</ul>
	</div>
</div>

</body>
</html>

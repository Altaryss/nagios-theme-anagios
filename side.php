<?php
include_once(dirname(__FILE__) . '/includes/utils.inc.php');

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
               <a class="link" href="main.php" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M13,3V9H21V3M13,21H21V11H13M3,21H11V15H3M3,13H11V3H3V13Z" />
                  </svg>
                  <span class="tra-gb">Home</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="https://go.nagios.com/nagioscore/docs" target="_blank">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M4 4V22H20V24H4C2.9 24 2 23.1 2 22V4H4M15 7H20.5L15 1.5V7M8 0H16L22 6V18C22 19.11 21.11 20 20 20H8C6.89 20 6 19.1 6 18V2C6 .89 6.89 0 8 0M17 16V14H8V16H17M20 12V10H8V12H20Z" />
                  </svg>
                  <span class="tra-gb">Documentation</span>
               </a>
            </li>
         </ul>
      </div>
   </div>

   <div class="navsection">
      <div class="navsectiontitle">Current Status</div>
      <div class="navsectionlinks">
         <ul class="navsectionlinks">
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/tac.cgi" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M3 4V16H21V4H3M3 2H21C22.1 2 23 2.89 23 4V16C23 16.53 22.79 17.04 22.41 17.41C22.04 17.79 21.53 18 21 18H14V20H16V22H8V20H10V18H3C2.47 18 1.96 17.79 1.59 17.41C1.21 17.04 1 16.53 1 16V4C1 2.89 1.89 2 3 2M10.84 8.93C11.15 8.63 11.57 8.45 12 8.45C12.43 8.46 12.85 8.63 13.16 8.94C13.46 9.24 13.64 9.66 13.64 10.09C13.64 10.53 13.46 10.94 13.16 11.25C12.85 11.56 12.43 11.73 12 11.73C11.57 11.73 11.15 11.55 10.84 11.25C10.54 10.94 10.36 10.53 10.36 10.09C10.36 9.66 10.54 9.24 10.84 8.93M10.07 12C10.58 12.53 11.28 12.82 12 12.82C12.72 12.82 13.42 12.53 13.93 12C14.44 11.5 14.73 10.81 14.73 10.09C14.73 9.37 14.44 8.67 13.93 8.16C13.42 7.65 12.72 7.36 12 7.36C11.28 7.36 10.58 7.65 10.07 8.16C9.56 8.67 9.27 9.37 9.27 10.09C9.27 10.81 9.56 11.5 10.07 12M6 10.09C6.94 7.7 9.27 6 12 6C14.73 6 17.06 7.7 18 10.09C17.06 12.5 14.73 14.18 12 14.18C9.27 14.18 6.94 12.5 6 10.09Z" />
                  </svg>
                  <span>Tactical Overview</span>
               </a>
            </li>
            <li class="std rel">
               <a class="link" href="map.php?host=all" target="<?php echo $link_target; ?>">
                  <svg width="22" height="22" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M18,15A3,3 0 0,1 21,18A3,3 0 0,1 18,21C16.69,21 15.58,20.17 15.17,19H14V17H15.17C15.58,15.83 16.69,15 18,15M18,17A1,1 0 0,0 17,18A1,1 0 0,0 18,19A1,1 0 0,0 19,18A1,1 0 0,0 18,17M18,8A1.43,1.43 0 0,0 19.43,6.57C19.43,5.78 18.79,5.14 18,5.14C17.21,5.14 16.57,5.78 16.57,6.57A1.43,1.43 0 0,0 18,8M18,2.57A4,4 0 0,1 22,6.57C22,9.56 18,14 18,14C18,14 14,9.56 14,6.57A4,4 0 0,1 18,2.57M8.83,17H10V19H8.83C8.42,20.17 7.31,21 6,21A3,3 0 0,1 3,18C3,16.69 3.83,15.58 5,15.17V14H7V15.17C7.85,15.47 8.53,16.15 8.83,17M6,17A1,1 0 0,0 5,18A1,1 0 0,0 6,19A1,1 0 0,0 7,18A1,1 0 0,0 6,17M6,3A3,3 0 0,1 9,6C9,7.31 8.17,8.42 7,8.83V10H5V8.83C3.83,8.42 3,7.31 3,6A3,3 0 0,1 6,3M6,5A1,1 0 0,0 5,6A1,1 0 0,0 6,7A1,1 0 0,0 7,6A1,1 0 0,0 6,5M11,19V17H13V19H11M7,13H5V11H7V13Z" />
                  </svg>
                  <div class="lg-cat">
                     <span>Map</span>
                  </div>
               </a>
               <a class="just-ct abs" href="<?php echo $cfg["cgi_base_url"]; ?>/statusmap.cgi?host=all" target="<?php echo $link_target; ?>">(Legacy)</a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=hostdetail" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M5 9C3.9 9 3 9.9 3 11V15C3 16.11 3.9 17 5 17H11V19H10C9.45 19 9 19.45 9 20H2V22H9C9 22.55 9.45 23 10 23H14C14.55 23 15 22.55 15 22H22V20H15C15 19.45 14.55 19 14 19H13V17H19C20.11 17 21 16.11 21 15V11C21 9.9 20.11 9 19 9H5M6 12H8V14H6V12M9.5 12H11.5V14H9.5V12M13 12H15V14H13V12Z" />
                  </svg>
                  <span>Hosts</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M4.93,3.93C3.12,5.74 2,8.24 2,11C2,13.76 3.12,16.26 4.93,18.07L6.34,16.66C4.89,15.22 4,13.22 4,11C4,8.79 4.89,6.78 6.34,5.34L4.93,3.93M19.07,3.93L17.66,5.34C19.11,6.78 20,8.79 20,11C20,13.22 19.11,15.22 17.66,16.66L19.07,18.07C20.88,16.26 22,13.76 22,11C22,8.24 20.88,5.74 19.07,3.93M7.76,6.76C6.67,7.85 6,9.35 6,11C6,12.65 6.67,14.15 7.76,15.24L9.17,13.83C8.45,13.11 8,12.11 8,11C8,9.89 8.45,8.89 9.17,8.17L7.76,6.76M16.24,6.76L14.83,8.17C15.55,8.89 16,9.89 16,11C16,12.11 15.55,13.11 14.83,13.83L16.24,15.24C17.33,14.15 18,12.65 18,11C18,9.35 17.33,7.85 16.24,6.76M12,9A2,2 0 0,0 10,11A2,2 0 0,0 12,13A2,2 0 0,0 14,11A2,2 0 0,0 12,9M11,15V19H10A1,1 0 0,0 9,20H2V22H9A1,1 0 0,0 10,23H14A1,1 0 0,0 15,22H22V20H15A1,1 0 0,0 14,19H13V15H11Z" />
                  </svg>
                  <span>Services</span>
               </a>
            </li>
            <li class="col">
               <div class="linksh">
                  <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=overview" target="<?php echo $link_target; ?>">
                     <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13,19H14A1,1 0 0,1 15,20H22V22H15A1,1 0 0,1 14,23H10A1,1 0 0,1 9,22H2V20H9A1,1 0 0,1 10,19H11V17H4A1,1 0 0,1 3,16V12A1,1 0 0,1 4,11H20A1,1 0 0,1 21,12V16A1,1 0 0,1 20,17H13V19M4,3H20A1,1 0 0,1 21,4V8A1,1 0 0,1 20,9H4A1,1 0 0,1 3,8V4A1,1 0 0,1 4,3M9,7H10V5H9V7M9,15H10V13H9V15M5,5V7H7V5H5M5,13V15H7V13H5Z" />
                     </svg>
                     <span>Host Groups</span>
                  </a>
               </div>
               <ul>
                  <div class="line"></div>
                  <li>
                     <div class="corner"></div>
                     <a class="sub" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=summary" target="<?php echo $link_target; ?>">
                        <span>Summary</span>
                     </a>
                  </li>
                  <li>
                     <div class="corner"></div>
                     <a class="sub" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=grid" target="<?php echo $link_target; ?>">
                        <span>Grid</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="col">
               <div class="linksh">
                  <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?servicegroup=all&amp;style=overview" target="<?php echo $link_target; ?>">
                     <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2A8,8 0 0,0 4,10C4,14.03 7,17.42 11,17.93V19H10A1,1 0 0,0 9,20H2V22H9A1,1 0 0,0 10,23H14A1,1 0 0,0 15,22H22V20H15A1,1 0 0,0 14,19H13V17.93C17,17.43 20,14.03 20,10A8,8 0 0,0 12,2M12,4C12,4 12.74,5.28 13.26,7H10.74C11.26,5.28 12,4 12,4M9.77,4.43C9.5,4.93 9.09,5.84 8.74,7H6.81C7.5,5.84 8.5,4.93 9.77,4.43M14.23,4.44C15.5,4.94 16.5,5.84 17.19,7H15.26C14.91,5.84 14.5,4.93 14.23,4.44M6.09,9H8.32C8.28,9.33 8.25,9.66 8.25,10C8.25,10.34 8.28,10.67 8.32,11H6.09C6.03,10.67 6,10.34 6,10C6,9.66 6.03,9.33 6.09,9M10.32,9H13.68C13.72,9.33 13.75,9.66 13.75,10C13.75,10.34 13.72,10.67 13.68,11H10.32C10.28,10.67 10.25,10.34 10.25,10C10.25,9.66 10.28,9.33 10.32,9M15.68,9H17.91C17.97,9.33 18,9.66 18,10C18,10.34 17.97,10.67 17.91,11H15.68C15.72,10.67 15.75,10.34 15.75,10C15.75,9.66 15.72,9.33 15.68,9M6.81,13H8.74C9.09,14.16 9.5,15.07 9.77,15.56C8.5,15.06 7.5,14.16 6.81,13M10.74,13H13.26C12.74,14.72 12,16 12,16C12,16 11.26,14.72 10.74,13M15.26,13H17.19C16.5,14.16 15.5,15.07 14.23,15.57C14.5,15.07 14.91,14.16 15.26,13Z" />
                     </svg>
                     <span>Service Groups</span>
                  </a>
               </div>
               <ul>
                  <div class="line"></div>
                  <li>
                     <div class="corner"></div>
                     <a class="sub" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?servicegroup=all&amp;style=summary" target="<?php echo $link_target; ?>">
                        <span>Summary</span>
                     </a>
                  </li>
                  <li>
                     <div class="corner"></div>
                     <a class="sub" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?servicegroup=all&amp;style=grid" target="<?php echo $link_target; ?>">
                        <span>Grid</span>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      <div class="navsectionheader">
         <div class="navsectiontitle">Problems</div>
         <ul class="navsectionlinks">
            <li class="std rel">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all&amp;servicestatustypes=28" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                  </svg>
                  <span>Services</span>
               </a>
               <a class="just-ct abs" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all&amp;type=detail&amp;hoststatustypes=3&amp;serviceprops=10&amp;servicestatustypes=28" target="<?php echo $link_target; ?>">(Unhandled)</a>
            </li>
            <li class="std rel">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M4,1H20A1,1 0 0,1 21,2V6A1,1 0 0,1 20,7H4A1,1 0 0,1 3,6V2A1,1 0 0,1 4,1M4,9H20A1,1 0 0,1 21,10V14A1,1 0 0,1 20,15H4A1,1 0 0,1 3,14V10A1,1 0 0,1 4,9M4,17H20A1,1 0 0,1 21,18V22A1,1 0 0,1 20,23H4A1,1 0 0,1 3,22V18A1,1 0 0,1 4,17M9,5H10V3H9V5M9,13H10V11H9V13M9,21H10V19H9V21M5,3V5H7V3H5M5,11V13H7V11H5M5,19V21H7V19H5Z" />
                  </svg>
                  <span>Hosts</span>
               </a>
               <a class="just-ct abs" href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12&amp;hostprops=42" target="<?php echo $link_target; ?>">(Unhandled)</a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/outages.cgi" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M14.59,6L12,8.59L9.41,6L8,7.41L10.59,10L8,12.59L9.41,14L12,11.41L14.59,14L16,12.59L13.41,10L16,7.41L14.59,6M17,3A2,2 0 0,1 19,5V15A2,2 0 0,1 17,17H13V19H14A1,1 0 0,1 15,20H22V22H15A1,1 0 0,1 14,23H10A1,1 0 0,1 9,22H2V20H9A1,1 0 0,1 10,19H11V17H7C5.89,17 5,16.1 5,15V5A2,2 0 0,1 7,3H17Z" />
                  </svg>
                  <span>Network Outages</span>
               </a>
            </li>
         </ul>
      </div>
      <div class="navbarsearch">
         <form method="get" action="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi" target="<?php echo $link_target; ?>">
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
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/avail.cgi" target="<?php echo $link_target; ?>">
                  <svg width="24" height="24" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                     <path d="M 301 180C 357 180 411 202 450 241C 450 241 450 242 450 242C 465 258 476 271 484 278C 493 286 497 288 500 288C 503 288 507 286 516 278C 524 271 535 258 550 242C 550 242 550 241 550 241C 590 202 644 180 700 180C 756 180 810 202 850 241C 890 281 912 336 912 392C 912 445 892 496 857 535C 856 536 855 537 854 539C 854 539 820 575 820 575C 820 575 554 575 554 575C 548 574 542 575 537 578C 532 581 528 586 526 592C 526 592 505 635 505 635C 505 635 424 392 424 392C 420 382 412 376 401 375C 389 374 379 382 376 394C 376 394 330 575 330 575C 330 575 181 575 181 575C 181 575 150 542 150 542C 149 541 149 541 148 540C 109 500 88 447 88 392C 88 336 110 281 150 241C 190 202 244 180 300 180C 300 179 301 180 301 180C 301 180 301 180 301 180M 476 708C 479 717 488 724 498 725C 508 726 518 720 522 711C 522 711 565 625 565 625C 565 625 773 625 773 625C 773 625 559 855 559 855C 559 855 559 855 558 855C 538 874 520 885 500 885C 479 885 461 874 441 855C 441 855 441 855 441 855C 441 855 227 625 227 625C 227 625 350 625 350 625C 361 625 371 617 374 606C 374 606 403 489 403 489C 403 489 476 708 476 708" />
                  </svg>
                  <span>Availability</span>
               </a>
            </li>
            <li class="std rel">
               <a class="link" href="trends.html" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M16,6L18.29,8.29L13.41,13.17L9.41,9.17L2,16.59L3.41,18L9.41,12L13.41,16L19.71,9.71L22,12V6H16Z" />
                  </svg>
                  <span>Trends</span>
               </a>
               <a class="just-ct abs" href="<?php echo $cfg["cgi_base_url"]; ?>/trends.cgi" target="<?php echo $link_target; ?>">(Legacy)</a>
            </li>
            <li class="col">
               <div class="linksh">
                  <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/history.cgi?host=all" target="<?php echo $link_target; ?>">
                     <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2C11.5 2 11 2.19 10.59 2.59L2.59 10.59C1.8 11.37 1.8 12.63 2.59 13.41L10.59 21.41C11.37 22.2 12.63 22.2 13.41 21.41L21.41 13.41C22.2 12.63 22.2 11.37 21.41 10.59L13.41 2.59C13 2.19 12.5 2 12 2M11 7H13V13H11V7M11 15H13V17H11V15Z" />
                     </svg>
                     <span>Alerts</span>
                  </a>
               </div>
               <ul>
                  <div class="line"></div>
                  <li>
                     <div class="corner"></div>
                     <a class="sub" href="<?php echo $cfg["cgi_base_url"]; ?>/history.cgi?host=all" target="<?php echo $link_target; ?>">
                        <span>History</span>
                     </a>
                  </li>
                  <li>
                     <div class="corner"></div>
                     <a class="sub" href="<?php echo $cfg["cgi_base_url"]; ?>/summary.cgi" target="<?php echo $link_target; ?>">
                        <span>Summary</span>
                     </a>
                  </li>
                  <li>
                     <div class="corner"></div>
                     <div class="rel">
                        <a class="sub" href="histogram.html" target="<?php echo $link_target; ?>">
                           <span>Histogram</span>
                        </a>
                        <a class="just-ct abs" href="<?php echo $cfg["cgi_base_url"]; ?>/histogram.cgi" target="<?php echo $link_target; ?>">(Legacy)</a>
                     </div>
                  </li>
               </ul>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/notifications.cgi?contact=all" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21" />
                  </svg>
                  <span>Notifications</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/showlog.cgi" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M16,15H9V13H16M19,11H9V9H19M19,7H9V5H19M21,1H7C5.89,1 5,1.89 5,3V17C5,18.11 5.9,19 7,19H21C22.11,19 23,18.11 23,17V3C23,1.89 22.1,1 21,1M3,5V21H19V23H3A2,2 0 0,1 1,21V5H3Z" />
                  </svg>
                  <span>Event Log</span>
               </a>
            </li>
         </ul>
      </div>
   </div>

   <div class="navsection">
      <div class="navsectiontitle">System</div>
      <div class="navsectionlinks">
         <ul class="navsectionlinks">
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=3" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21" />
                  </svg>
                  <span>Comments</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=6" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M4 8H2V2H4V8M2 22H4V16H2V22M3 10C1.9 10 1 10.9 1 12C1 13.11 1.9 14 3 14C4.11 14 5 13.11 5 12C5 10.9 4.11 10 3 10M24 6V18C24 19.11 23.11 20 22 20H10C8.9 20 8 19.11 8 18V14L6 12L8 10V6C8 4.89 8.9 4 10 4H22C23.11 4 24 4.89 24 6M17.41 12L19.53 9.88L18.12 8.47L16 10.59L13.88 8.47L12.47 9.88L14.59 12L12.47 14.12L13.88 15.53L16 13.41L18.12 15.53L19.53 14.12L17.41 12Z" />
                  </svg>
                  <span>Downtime</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=0" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M9,3V5H7A2,2 0 0,0 5,7V9H3V11H5V13H3V15H5V17A2,2 0 0,0 7,19H9V21H11V19H13V21H15V19H17A2,2 0 0,0 19,17V15H21V13H19V11H21V9H19V7A2,2 0 0,0 17,5H15V3H13V5H11V3M8,9H11.5V10.5H8.5V11.25H10.5A1,1 0 0,1 11.5,12.25V14A1,1 0 0,1 10.5,15H8A1,1 0 0,1 7,14V10A1,1 0 0,1 8,9M12.5,9H14V11H15.5V9H17V15H15.5V12.5H12.5M8.5,12.75V13.5H10V12.75" />
                  </svg>
                  <span>Process Info</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=4" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M3,22V8H7V22H3M10,22V2H14V22H10M17,22V14H21V22H17Z" />
                  </svg>
                  <span>Performance Info</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=7" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M15 13H16.5V15.82L18.94 17.23L18.19 18.53L15 16.69V13M18.13 9.33C17.23 6.81 14.83 5 12 5C9.3 5 7 6.65 6 9C3.24 9 1 11.24 1 14S3.24 19 6 19H9.68C10.81 21.36 13.21 23 16 23C19.87 23 23 19.87 23 16C23 12.88 20.96 10.24 18.13 9.33M6 17C4.34 17 3 15.66 3 14S4.34 11 6 11C6.37 11 6.73 11.07 7.06 11.19C7.45 8.82 9.5 7 12 7C13.63 7 15.07 7.79 16 9C12.12 9 9 12.14 9 16C9 16.34 9.03 16.67 9.08 17H6M16 21C13.24 21 11 18.76 11 16S13.24 11 16 11 21 13.24 21 16 18.76 21 16 21Z" />
                  </svg>
                  <span>Scheduling Queue</span>
               </a>
            </li>
            <li class="std">
               <a class="link" href="<?php echo $cfg["cgi_base_url"]; ?>/config.cgi" target="<?php echo $link_target; ?>">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                     <path fill="currentColor" d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" />
                  </svg>
                  <span>Configuration</span>
               </a>
            </li>
         </ul>
      </div>
   </div>

</body>

</html>
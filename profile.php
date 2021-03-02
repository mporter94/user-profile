<?php
# Overland Missions Expeditions Portal 2.0
# 2020 (c) Overland Missions
# Charles S. Jones
# 10.28.2020

# Header Scripts Called on every page
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tag checks if JavaScript is enabled, if not, shows error page -->
        <noscript> <META HTTP-EQUIV="Refresh" CONTENT="0;URL=/Error_Page.html"> </noscript>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo 'FAKECSRFTOKEN'; ?>">

        <!-- NEED SET META TAGS FROM SESSION VARIABLES BASED ON PAGE?? -->
        <!-- Social Media Meta Tags -->
        <meta name="title" property="og:title" content="Go | Overland Missions | Christian Missions">
        <meta name="description" property="og:description" content="Short term missions, missions training, career missionaries.">
        <meta name="image" property="og:image" content="https:/go.overlandmissions.com/images/default_exp_header.jpg">
        <meta name="url" property="og:url" content="https://go.overlandmissions.com">
        <meta name="twittercard" name="twitter:card" content="Missions">

        <!--  Non-Essential, But Recommended -->
        <meta name="site_name" property="og:site_name" content="Overland Missions">
        <meta name="twitter:image:alt" content="Expeditions Boat">

        <!-- The title to the page, set by the pages JS -->
        <title></title>
        
        <!-- Set the favicon -->
        <link rel="icon" href="/images/favicon.png">

        <!-- Bootstrap CSS -->
        <link id="bootstrap-stylesheet" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!-- jQuery-ui CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

        <!-- JQuery-ui CSS Time Picker Add on -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
        
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/datatables.min.css"/>

        <!-- Google Font Desired Montserrat, Noto Serif, Roboto -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Serif&family=Roboto&display=swap" rel="stylesheet">

        <!-- Flickity CSS CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css">

        <!-- CDN For Font Awesome Icons AND Font Awesome Solid.css -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">

        <!-- jQuery, then jQuery-ui, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- JQuery-ui Time Picker Add On -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

        <!-- DataTables JS to enable print to PDF and save to Excel and datetime formating  -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/r-2.2.2/datatables.min.js"></script>
        <script type="text/javascript" src="https:///cdn.datatables.net/plug-ins/1.10.19/sorting/datetime-moment.js"></script>

        <!-- Html2Canvas JS to screenshot downloads  -->
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

        <!-- Flickity JavaScript CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>

        <!-- Touch Punch Allow Touch Actions on jQuery-UI -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

        <!-- CDN FOR CHART.JS -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

        <!-- CDN FOR EXIF -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/exif-js/2.3.0/exif.min.js"></script>

        <!-- CDN FOR ACCEPT.js -->
        <script type="text/javascript" src="https://jstest.authorize.net/v1/Accept.js" charset="utf-8"></script>

        <!-- CDN FOR MAPBOX --> 
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css' rel='stylesheet' />
        
        <!-- GOOGLE FONT --> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&display=swap" rel="stylesheet">
        
        <!--BOOTSTRAP TOGGLE SWITCH---->
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

        <!-- Custom CSS Listed Last to take priority  -->
        <link aysnc id="custom-stylesheet" href="/styles/custom.css?v=1.1.1" rel="stylesheet">

        <style type="text/css">
            body {
                font-family: 'Roboto', sans-serif;
                background-image: linear-gradient(white,white,grey);
                min-height: 100vh !important;
                height: 100%;
                width: 100vw;
                max-width: 100vw;
                overflow-x: hidden; 
            }
            .profileContainer {
                display: grid;
                grid-gap: 15px;
            }
                .photoContainer {
                    grid-row: 1;
                    
                    display: grid;
                    grid-template-rows: repeat(2,max-content);
                }
                    .profile_backPhoto {
                        grid-row: 1/3;
                        grid-column: 1/3;
                        
                        background-image: url(images/background.jpg);
                        background-position: center;
                        background-size: cover;
                        
                        box-shadow: inset 0 0 10px #000000;
                        height:250px;
                        width:85%;
                        border-radius: 20px;
                        margin:20px auto;
                        
                        display: flex;
                        justify-content: flex-end;
                    }
                    .changePhoto {
                        height:35px;
                        width:35px;
                        border-radius: 50%;
                        border:3px white solid;
                        background-color:lightgray;
                        margin:10px;
                        
                        display: flex;
                        justify-content: center;
                    }
                    .changePhoto i {
                        position: relative;
                        top:6px;
                    }
                .profilePhoto {
                    grid-row: 2/3;
                    grid-column: 2/3;
                    
                    background-image: url(images/headshot2.jpg);
                    background-position: center;
                    background-size: cover;
                        
                    height: 150px;
                    width: 150px;
                    border-radius: 50%;
                    border: 6px white solid;
                    
                    display: flex;
                    flex-wrap: wrap;
                    align-content: flex-end;
                    justify-content: flex-end;
                    }
                    #second {
                        position: relative;
                        top:15px;
                    }
                .profileName h1 {
                    grid-row: 2;
                    text-align: center;
                }
                .subTopbar {
                    background-color: transparent;
                    border-top: 2px #3e3e3e solid;
                    border-bottom: 2px #3e3e3e solid;
                    grid-row: 3;
                    margin-top: 10px;
                    margin-bottom: 20px;
                    }
                    .navbar-toggler {
                        border:1px #3e3e3e solid;
                    }
                    .subTopbar a:hover, .navbar-nav > .active  {
                        background-color: #3e3e3e !important;
                        color: white !important;
                    }
                .cardNavBodyContainer {
                    grid-row: 4;
                    min-height: 500px;
                    justify-content: center;
                    margin:0px auto 40px auto;
                    width: 75%;
                    
                    display: grid;
                    grid-template-columns: 1fr 3fr;
                    }
                    .cardNavContainer {
                        background-color: #3e3e3e;
                        border-right: 1px lightgray solid;
                        padding:15px;

                        border-top-left-radius: 15px;
                        border-bottom-left-radius: 15px;
                    }
                    .cardToggleContainer {
                        background-color: #3e3e3e;
                        padding:5px;
                        min-width: 425px;

                        border-top-right-radius: 15px;
                        border-bottom-right-radius: 15px;
                        }
                        .cardNav a {
                            color:lightgray !important;
                            font-weight: bold;
                            margin-bottom: 10px;
                        }
                        .cardNav a:hover, .cardNav > .active {
                            color:#3e3e3e !important;
                            background-color: lightgray !important;
                        }
                    .cardContainer {
                        border-radius: 10px;
                        margin-bottom: 10px;
                    }
                        .profileCard {
                            background-color: transparent;
                            color:white;
                            margin-bottom: 10px;
                            padding:10px;
                        }
                        .profileCard h1 {
                            display: inline-block;
                        }
                        .profileCard h1 {
                            font-size: 20px;
                            padding-left: 10px;
                            margin-top:3px;
                        }
                        .profileCard button {
                            float:right;
                            border-radius: 5px;
                        }
                        #insuranceHeadshotCard {
                            border-top: 1px lightgray solid;
                        }
                        .passportEntry {
                            border: 1px white solid;
                            border-radius: 15px;
                            padding:5px 10px;
                            margin:10px 0px;
                            }
                            .passportBtns {
                                display: grid;
                                grid-template-rows: repeat(3,auto);
                                grid-gap: 5px;
                                margin:10px 0px;
                            }
                            .passportBtns button {
                                margin:0px 0px;
                            }
                    .gridTable {
                            display: grid;
                            grid-gap: 5px;
                            grid-template-columns: repeat(2,minmax(130px,1fr));
                            line-height: 30px;
                            margin-top: 10px;
                            font-size: 17px;
                        }
                    .secondBtn {
                                margin:0px 20px 0px 0px;
                            }
                    /*TOGGLE SWITCH CLASSES*/
                    .toggle {
                        float:right;
                        display: flex;
                        align-content: center;
                    }
                    .toggle h3 {
                        font-size: 15px;
                        float:right;
                        margin-right: 10px;
                        line-height: 35px;
                    }
                        
        
                /*SAVED PAYMENT METHODS & SUBS*/
                #IDFinance .profileCard {
                    display: grid;
                    grid-gap: 10px;
                    margin-bottom: 10px;
                }
                    #IDFinance header{
                        grid-row: 1;
                        grid-column: 1;
                        }
                        .title {
                            float:left
                        }
                        .financeHeaderBtn {
                            float:right;
                        }
                    #IDFinance body {
                        grid-row: 2;
                        grid-column: 1;
                        justify-content: center;
                    }
                .carousel {
                    background: transparent;
                    padding-bottom: 25px;
                    }
                    .carouselGrid {
                        display: grid;
                        grid-template-columns: max-content;
                        }
                        .carouselGrid button {
                            margin:5px;
                        }
                    .carouselGridSubs {
                        display: grid;
                        grid-template-columns: repeat(2,max-content);
                        }
                        .carouselBtnsSubs {
                            grid-column: span 2;
                            display: flex;
                            justify-content: center;
                        }
                        .carouselBtnsSubs button {
                            margin:5px;
                        }
                    .carouselBtns {
                        display: flex;
                        justify-content: center;
                    }
                    .flickity-page-dots { 
                        bottom: 0px;
                    }
                    .carousel-cell {
                        width: 66%;
                        min-width: max-content;
                        margin-right: 10px;
                        background: cadetblue;
                        border-radius: 5px;
                        
                        display: flex;
                        text-align: center;
                        justify-content: center;
                        padding:25px;
                        }
                        .spm {
                            height: 200px;
                        }
                        .subs {
                            height: 300px;
                        }    
                /*NAV CARD CLASSES*/
                .d-none {
                    display: none;
                }
                .d-none-haswidth,
                .d-none-haswidth table {
                    position: fixed !important;
                    visibility: hidden !important;
                }
            
                /*MODAL NAV CLASSES*/
                .modalNav a {
                    font-size: 10px;
                }
                #editMethodModal form {
                    margin-top: 20px;
                }
                .displaySPM {
                    border:1px black solid;
                    padding:10px;
                    text-align: center;
                    width:max-content;
                    height:max-content;
                    margin:5px;
                    display: inline-block;
                }
                .displaySPMTitle {
                    font-size: 20px;
                    margin-top: 10px;
                }
                .displaySub {
                    padding:10px 20px;
                    width:max-content;
                    height:max-content;
                    margin:5px;
                    text-align: center;
                    background-color: cadetblue;
                    border-radius: 10px;
                    color: white;
                }
                .displaySubContainer {
                    display: flex;
                    justify-content: center;
                }
            
            .mobileNav {
                display: none;
            }
            .leftNavBar {
                display: none;
            }
            .left-nav {
                display: none;
            }
            .popBar {
                display: none;
            }
            
        //MOBILE CLASSES HERE
            
            
            
        </style>
    </head>

    <body class="">
        
        <nav id="popMenuContainer" class="navbar bg-dark navbar-dark left-nav">
            <div class="popMenuGrid">  
                <header class="popHeader">
                    <div class="popProfile"></div>
                    <h1 class="popName">Michael Porter</h1>
                    <i id="popClose" class="far fa-times-circle fa-2x popClose"></i>
                </header>
                <div class="popMenuBody">
                    <!--POP MENU CARDS CARDS-->
                    <div id="profilePopCard" class="popMenuItem">
                        <i class="far fa-user-circle fa-4x"></i>
                        <h2>Profile</h2>
                    </div>
                    <div class="popMenuItem">
                        <i class="fas fa-pencil-alt fa-4x"></i>
                        <h2>Apply</h2>
                    </div>
                    <!--PROFILE SUBMENU-->
                        <!--START-->
                        <div id="profilePopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">Account Management</div>
                            <div id="" class="popSubMenuItem">Finance</div>
                            <div id="" class="popSubMenuItem">Personal Info</div>
                            <div id="" class="popSubMenuItem">Mailing Address</div>
                            <div id="" class="popSubMenuItem">Passport</div>
                            <div id="" class="popSubMenuItem">Account Settings</div>
                        </div>
                        <!--END-->
                    <div id="donateePopCard" class="popMenuItem">
                        <i class="fas fa-donate fa-4x"></i>
                        <h2>Donate</h2>
                    </div>
                    <div id="adminPopCard" class="popMenuItem">
                        <i class="fas fa-tools fa-4x"></i>
                        <h2>Admin</h2>
                    </div>
                    <!--ADMIN SUBMENU-->
                        <!--START-->
                        <div id="adminPopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">Apply</div>
                            <div id="" class="popSubMenuItem">Authorize.net</div>
                            <div id="" class="popSubMenuItem">Countries</div>
                            <div id="" class="popSubMenuItem">Create User</div>
                            <div id="" class="popSubMenuItem">Currencies</div>
                            <div id="" class="popSubMenuItem">Donor CRM</div>
                            <div id="" class="popSubMenuItem">Expeditions</div>
                            <div id="" class="popSubMenuItem">Itineraries</div>
                            <div id="" class="popSubMenuItem">Manage Countries</div>
                            <div id="" class="popSubMenuItem">Manage Expeditions</div>
                            <div id="" class="popSubMenuItem">Podcasts</div>
                            <div id="" class="popSubMenuItem">Reports</div>
                        </div>
                        <!--END-->
                    <div id="browsePopCard" class="popMenuItem">
                        <i class="fas fa-globe-africa fa-4x"></i>
                        <h2>Browse</h2>
                    </div>
                    <div id="leaderPopCard" class="popMenuItem">
                        <i class="fas fa-route fa-4x"></i>
                        <h2>Leader</h2>
                    </div>
                    <!--BROWSE SUBMENU-->
                        <!--START-->
                        <div id="browsePopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">Countries</div>
                            <div id="" class="popSubMenuItem">Expeditions</div>
                        </div>
                        <!--END-->
                    <!--LEADER SUBMENU-->
                        <!--START-->
                        <div id="leaderPopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">CRM</div>
                            <div id="" class="popSubMenuItem">Expedition Dashboard</div>
                            <div id="" class="popSubMenuItem">Funds Request</div>
                            <div id="" class="popSubMenuItem">Leads</div>
                            <div id="" class="popSubMenuItem">Reports</div>
                        </div>
                        <!--END-->
                    <div id="overlandPopCard" class="popMenuItem">
                        <i class="fas fa-podcast fa-4x"></i>
                        <h2>Overland</h2>
                    </div>
                    <div id="searchPopCard" class="popMenuItem">
                        <i class="fas fa-search fa-4x"></i>
                        <h2>Search</h2>
                    </div>
                    <!--SEARCH SUBMENU-->
                        <!--START-->
                        <div id="searchPopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">AMT Applications</div>
                            <div id="" class="popSubMenuItem">Activity Logs</div>
                            <div id="" class="popSubMenuItem">Applications</div>
                            <div id="" class="popSubMenuItem">Authorize Attempts</div>
                            <div id="" class="popSubMenuItem">Contact Forms</div>
                            <div id="" class="popSubMenuItem">Customers</div>
                            <div id="" class="popSubMenuItem">Designations</div>
                            <div id="" class="popSubMenuItem">Donation Forms</div>
                            <div id="" class="popSubMenuItem">Emails</div>
                            <div id="" class="popSubMenuItem">Error Log</div>
                            <div id="" class="popSubMenuItem">Error Reports</div>
                            <div id="" class="popSubMenuItem">Expedition History</div>
                            <div id="" class="popSubMenuItem">Expedition Links</div>
                            <div id="" class="popSubMenuItem">Expeditions</div>
                            <div id="" class="popSubMenuItem">Itineraries</div>
                            <div id="" class="popSubMenuItem">Phone Interviews</div>
                            <div id="" class="popSubMenuItem">References</div>
                            <div id="" class="popSubMenuItem">Rep Links</div>
                            <div id="" class="popSubMenuItem">Sales Receipts</div>
                            <div id="" class="popSubMenuItem">Tasks</div>
                            <div id="" class="popSubMenuItem">Users</div>
                        </div>
                        <!--END-->
                    <div id="sitePopCard" class="popMenuItem">
                        <i class="fas fa-satellite fa-4x"></i>
                        <h2>Site</h2>
                    </div>
                    <div id="helpPopCard" class="popMenuItem">
                        <i class="far fa-question-circle fa-4x"></i>
                        <h2>Help</h2>
                    </div>
                    <!--SITE SUBMENU-->
                        <!--START-->
                        <div id="sitePopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">Activity</div>
                            <div id="" class="popSubMenuItem">Backup</div>
                            <div id="" class="popSubMenuItem">Errors</div>
                            <div id="" class="popSubMenuItem">Groups</div>
                            <div id="" class="popSubMenuItem">Manage Groups</div>
                            <div id="" class="popSubMenuItem">Security</div>
                            <div id="" class="popSubMenuItem">Settings</div>
                        </div>
                        <!--END-->
                    <!--HELP SUBMENU-->
                        <!--START-->
                        <div id="helpPopSubMenu" class="collapse popSubMenu">
                            <div id="" class="popSubMenuItem">Toggle</div>
                            <div id="" class="popSubMenuItem">Last Updated</div>
                            <div id="" class="popSubMenuItem">Logout</div>
                            <div id="" class="popSubMenuItem">Active Devices</div>
                            <div id="" class="popSubMenuItem">Logout All</div>
                            <div id="" class="popSubMenuItem">Error</div>
                        </div>
                        <!--END-->
                </div>
                <footer>
                    <button type="button" class="btn btn-sm btn-outline-light btn-block">Sign Out</button>
                </footer>
            </div>
        </nav>
        
        
        
        <div class="popBar">
            <button type="button" id="pop" class="btn btn-outline-dark">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>
        
        <div class="profileContainer">
        
            <div class="photoContainer">
                <div class="profile_backPhoto">
                    <div class="changePhoto">
                        <i class="fas fa-camera-retro fa-lg"></i>
                    </div>
                </div>
                <!--PROFILE PHOTO-->
                <div class="profilePhoto">
                    <div class="changePhoto" id="second">
                        <i class="fas fa-camera-retro fa-lg"></i>
                    </div>
                </div>
            </div>
            <div class="profileName">
                <h1>MICHAEL PORTER</h1>
            </div>
            
            <!--NAV MAIN **SUBTOPBAR-->
            <nav class="navbar navbar-light navbar-expand-md nav-pills subTopbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
                    <span class="navbar-toggler-icon">   
                    <i class="fas fa-bars" style="color:#3e3e3e; font-size:28px;"></i>
                </span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="flex-sm-fill text-sm-center nav-link active" >Profile</a>
                        <a class="flex-sm-fill text-sm-center nav-link" >Donations</a>
                        <a class="flex-sm-fill text-sm-center nav-link">Admin Notes</a>
                        <a class="flex-sm-fill text-sm-center nav-link">Leader Notes</a>
                        <a class="flex-sm-fill text-sm-center nav-link" >References</a>
                        <a class="flex-sm-fill text-sm-center nav-link">Phone Interview</a>
                        <a class="flex-sm-fill text-sm-center nav-link">Expedition History</a>
                        <a class="flex-sm-fill text-sm-center nav-link">Flights</a>
                        <a class="flex-sm-fill text-sm-center nav-link">Tasks</a>
                    </div>
                </div>
            </nav>
            
            <!--MOBILE CARD NAV-->
            <div class="mobileNav">
                <div class="carousel-cell nav-link tab-toggle" data-toggle="IDAccountManagement">Account Management</div>
                <div class="carousel-cell nav-link tab-toggle" data-toggle="IDFinance">Finance</div>
                <div class="carousel-cell nav-link tab-toggle" data-toggle="IDPersonalInfo">Personal Info</div>
                <div class="carousel-cell nav-link tab-toggle" data-toggle="IDMailingAddress">Mailing Address</div>
                <div class="carousel-cell nav-link tab-toggle" data-toggle="IDPassport">Passport</div>
                <div class="carousel-cell nav-link tab-toggle" data-toggle="IDAccountSettings">Account Settings</div>
            </div>
            
            <!--CARD NAV CONTAINER--> 
            <div id="ID" class="cardNavBodyContainer">
                <!--DESKTOP CARD NAV-->
                <div class="cardNavContainer">
                    <nav class="nav nav-pills flex-column cardNav">
                        <a class="flex-sm-fill text-sm-center nav-link tab-toggle active" data-toggle="IDAccountManagement">Account Management</a>
                        <a class="flex-sm-fill text-sm-center nav-link tab-toggle" data-toggle="IDFinance">Finance</a>
                        <a class="flex-sm-fill text-sm-center nav-link tab-toggle" data-toggle="IDPersonalInfo">Personal Info</a>
                        <a class="flex-sm-fill text-sm-center nav-link tab-toggle" data-toggle="IDMailingAddress">Mailing Address</a>
                        <a class="flex-sm-fill text-sm-center nav-link tab-toggle" data-toggle="IDPassport">Passport</a>
                        <a class="flex-sm-fill text-sm-center nav-link tab-toggle" data-toggle="IDAccountSettings">Account Settings</a>
                    </nav>
                </div>
                
                <div class="cardToggleContainer">
                    <!--ACCOUNT MANAGEMENT TAB-->
                    <div id="IDAccountManagement"  class="cardContainer">
                            <!--PASSWORD-->
                            <div class="profileCard" id="passwordCard">
                                <header>
                                    <i class="fas fa-key"></i>
                                    <h1>Password</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#passwordModal">EDIT PASSWORD</button>
                                </header>
                            </div>
                            <!--ACCOUNT PRIVACY-->
                            <div class="profileCard" id="privacyCard">
                                <header>
                                    <i class="fas fa-user-cog"></i>
                                    <h1>Profile Privacy</h1>
                                    
                                    <div class="toggle">
                                        <h3>Hide Profile?</h3>
                                        <!-- Custom switch -->
                                       <input type="checkbox" checked data-toggle="toggle" class="toggleBtn" data-size="small" data-on="Yes" data-off="No" data-onstyle="outline-light" data-style="border">
                                    </div>
                                </header>
                            </div>
                            <!--ACCOUNT STATUS-->
                            <div class="profileCard" id="statusCard">
                                <header>
                                    <i class="fas fa-user-circle"></i>
                                    <h1>Account Status</h1>
                                    
                                    <div class="toggle">
                                        <h3>Enable User?</h3>
                                        <!-- Custom switch -->
                                       <input type="checkbox" checked data-toggle="toggle" class="toggleBtn" data-size="small" data-on="Yes" data-off="No" data-onstyle="outline-light" data-style="border">
                                    </div>
                                </header>
                            </div>
                            <!--RSS FEED-->
                            <div class="profileCard" id="rssFeedCard">
                                <header>
                                    <i class="fas fa-link"></i>
                                    <h1>RSS Feed</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm">EDIT LINK</button>
                                    <button type="button" class="btn btn-light btn-sm secondBtn">COPY LINK</button>
                                </header>
                            </div>
                            <!--TRIPIT-->
                            <div class="profileCard" id="tripitCard">
                                <header>
                                    <i class="fas fa-clipboard-list"></i>
                                    <h1>TripIt Account</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm">LINK TO ACCOUNT</button>
                                </header>
                            </div>
                            <!--INSURANCE HEADSHOT-->
                            <div class="profileCard" id="insuranceHeadshotCard">
                                <header>
                                    <i class="fas fa-images"></i>
                                    <h1>Insurance Headshot:</h1>
                                    <p>*PUT SPECIFICS HERE</p>
                                    <div class="">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </header>
                            </div>
                        
                    </div>
                    
                    <!--FINANCE TAB-->
                    <div id="IDFinance" class="cardContainer d-none-haswidth">
                            <!--SAVED PAYMENT METHODS-->
                            <div class="profileCard" id="savedPaymentsCard">
                                <header>
                                    <div class="title">
                                        <i class="far fa-credit-card"></i>
                                        <h1>Saved Payment Methods</h1>
                                    </div>
                                    <button type="button" class="btn btn-outline-light btn-sm financeHeaderBtn" data-toggle="modal" data-target="#addNewPaymentMethodModal">Add New Method</button>
                                </header>
                                <body>
                                    <!-- Flickity HTML -->
                                    <div class="SPMcarousel carousel">
                                        <!--COURASEL CARD 1-->
                                        <div class="carousel-cell spm">
                                            <div class="carouselGrid">
                                                <div>Michael Porter</div>
                                                <div>VISA XXXXXXXXX4806</div>
                                                <div>1234 Bouyaah Rd</div>
                                                <div>Jax, Florida 98304</div>
                                                <div class="carouselBtns">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Remove</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#editMethodModal">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--COURASEL CARD 1-->
                                        <div class="carousel-cell spm">
                                            <div class="carouselGrid">
                                                <div>Michael Porter</div>
                                                <div>VISA XXXXXXXXX4806</div>
                                                <div>5100 Bouyaah Rd</div>
                                                <div>Jax, Florida 98304</div>
                                                <div class="carouselBtns">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Remove</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#editMethodModal">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                
                                </body>
                            </div>
                            <!--SUBSCRIPTIONS-->
                            <div class="profileCard" id="subscriptionsCard">
                                <header>
                                    <div class="title">
                                        <i class="fas fa-shopping-cart"></i>
                                        <h1>Subscriptions</h1>
                                    </div>
                                    <button type="button" class="btn btn-outline-light btn-sm financeHeaderBtn">Add New Subscription</button>
                                </header>
                                <body>
                                    <!-- Flickity HTML -->
                                    <div class="SUBScarousel carousel">
                                        <div class="carousel-cell subs">
                                            <div class="carouselGridSubs">
                                                <div>Name:</div>
                                                    <div>Charles Jones</div>
                                                <div>Amount:</div>
                                                    <div>$500</div>
                                                <div>Interval:</div>
                                                    <div>Monthly</div>
                                                <div>Date of Charge:</div>
                                                    <div>13th</div>
                                                <div>First Donation Date:</div>
                                                    <div>09/13/2017</div>
                                                <div>Billing Address:</div>
                                                    <div>1234 Bouyaah Rd</div>
                                                <div>Payment:</div>
                                                    <div>VISA XXXXX9806</div>
                                                
                                                <div class="carouselBtnsSubs">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Remove</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#editSubsModal">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-cell subs">
                                            <div class="carouselGridSubs">
                                                <div>Name:</div>
                                                    <div>Charles Jones</div>
                                                <div>Amount:</div>
                                                    <div>$500</div>
                                                <div>Interval:</div>
                                                    <div>Monthly</div>
                                                <div>Date of Charge:</div>
                                                    <div>13th</div>
                                                <div>First Donation Date:</div>
                                                    <div>09/13/2017</div>
                                                <div>Billing Address:</div>
                                                    <div>1234 Bouyaah Rd</div>
                                                <div>Payment:</div>
                                                    <div>VISA XXXXX9806</div>
                                                
                                                <div class="carouselBtnsSubs">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Remove</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#editSubsModal">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-cell subs">
                                            <div class="carouselGridSubs">
                                                <div>Name:</div>
                                                    <div>Charles Jones</div>
                                                <div>Amount:</div>
                                                    <div>$500</div>
                                                <div>Interval:</div>
                                                    <div>Monthly</div>
                                                <div>Date of Charge:</div>
                                                    <div>13th</div>
                                                <div>First Donation Date:</div>
                                                    <div>09/13/2017</div>
                                                <div>Billing Address:</div>
                                                    <div>1234 Bouyaah Rd</div>
                                                <div>Payment:</div>
                                                    <div>VISA XXXXX9806</div>
                                                
                                                <div class="carouselBtnsSubs">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Remove</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#editSubsModal">Edit</button>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="carousel-cell subs">
                                            <div class="carouselGridSubs">
                                                <div>Name:</div>
                                                    <div>Charles Jones</div>
                                                <div>Amount:</div>
                                                    <div>$500</div>
                                                <div>Interval:</div>
                                                    <div>Monthly</div>
                                                <div>Date of Charge:</div>
                                                    <div>13th</div>
                                                <div>First Donation Date:</div>
                                                    <div>09/13/2017</div>
                                                <div>Billing Address:</div>
                                                    <div>1234 Bouyaah Rd</div>
                                                <div>Payment:</div>
                                                    <div>VISA XXXXX9806</div>
                                                
                                                <div class="carouselBtnsSubs">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Remove</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#editSubsModal">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </body>
                            </div>
                    </div>
                    
                    <!--PERSONAL INFO TAB-->
                    <div id="IDPersonalInfo" class="cardContainer d-none-haswidth">
                            <!--PERSONAL INFO-->
                            <div class="profileCard" id="personalCard">
                                <header>
                                    <i class="fas fa-id-badge"></i>
                                    <h1>Personal Info</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#personalDataModal">EDIT</button>
                                </header>
                                <body>
                                    <div class="gridTable">
                                        
                                        <div>Name:</div>
                                            <div>Michael A. Porter</div>
                                        <div>Username:</div>
                                            <div>mporter</div>
                                        <div>Phone:</div>
                                            <div>+49 173 7290239</div>
                                        <div>Email:</div>
                                            <div>mporter94@gmail.com</div>
                                        <div>DOB (dd/mm/yyy):</div>
                                            <div>07/15/1994</div>
                                        <div>Access Level:</div>
                                            <div>Admin</div>
                                        <div>Marital Status:</div>
                                            <div>Married</div>
                                        <div>Sex:</div>
                                            <div>Male</div>
                                        <div>Primary Departure City:</div>
                                            <div>ABQ</div>
                                        <div>Primary Departure State:</div>
                                            <div>NM</div>
                                        <div>Secondary Departure City:</div>
                                            <div>JAX</div>
                                        <div>Secondary Departure State:</div>
                                            <div>FL</div>
                                        <div>Allergies:</div>
                                            <div>N/A</div>
                                        <div>Medications:</div>
                                            <div>N/A</div>
                                        
                                    </div>
                                </body>
                            </div>
                    </div>
                    
                    <!--MAILING ADDRESS TAB-->
                    <div id="IDMailingAddress" class="cardContainer d-none-haswidth">
                            <!--MAILING ADDRESS-->
                            <div class="profileCard" id="mailingCard">
                                <header>
                                    <i class="fas fa-home"></i>
                                    <h1>Mailing Address</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#mailingAddressModal">EDIT</button>
                                </header>
                                <body>
                                    <div class="gridTable">
                                        <div>Country:</div>
                                          <div>United States of America</div>
                                        <div>Street:</div>
                                          <div>5100 Cumberland Pl NW</div>
                                        <div>City:</div>
                                          <div>Albuquerque</div>
                                        <div>State/Region:</div>
                                          <div>New Mexico</div>
                                        <div>Zip Code:</div>
                                          <div>87120</div>
                                    </div>
                                </body>
                            </div>
                    </div>
                    
                    <!--PASSPORT TAB-->
                    <div id="IDPassport" class="cardContainer d-none-haswidth">
                            <!--PASSPORT-->
                            <div class="profileCard" id="passportCard">
                                <header>
                                    <i class="fas fa-passport"></i>
                                    <h1>Passport</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#passportEditModal">EDIT</button>
                                    <button type="button" class="btn btn-light btn-sm secondBtn" data-toggle="modal" data-target="#passportAddModal">Add Passport</button>
                                </header>
                                <body>
                                    <div class="passportEntry">
                                        <div class="gridTable">
                                            <div>Passport Number:</div>
                                              <div>981273918</div>
                                            <div>Passport Name:</div>
                                              <div>Michael Fantastic Porter</div>
                                            <div>Passport Country:</div>
                                              <div>'MERICA</div>
                                            <div>Issue Date:</div>
                                              <div>dd/mm/yyyy</div>
                                            <div>Expiration Date:</div>
                                              <div>dd/mm/yyyy</div>
                                        </div>
                                        <div class="passportBtns">
                                            <button type="button" class="btn btn-outline-light btn-sm">
                                                <i class="fas fa-file-upload"></i>
                                                Add Passport Scan
                                            </button>
                                            <button type="button" class="btn btn-outline-light btn-sm">
                                                <i class="fas fa-eye"></i>
                                                View Passport Scan
                                            </button>
                                            <button type="button" class="btn btn-outline-light btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                                Delete Passport Scan
                                            </button>
                                        </div>
                                    </div>
                                </body>
                            </div>
                    </div>
                    
                    <!--ACCOUNT SETTINGS TAB-->
                    <div id="IDAccountSettings" class="cardContainer d-none-haswidth">
                            <!--FINANCE LINKS-->
                            <div class="profileCard" id="financeLinksCard">
                                <header>
                                    <i class="fas fa-link"></i>
                                    <h1>Finance Links</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm">EDIT LINKS</button>
                                </header>
                            </div>
                            <!--TAX RECEIPTS-->
                            <div class="profileCard" id="taxRCard">
                                <header>
                                    <i class="fas fa-file-invoice-dollar"></i>
                                    <h1>Tax Receipts</h1>
                                    
                                    <div class="toggle">
                                        <h3>Paperless Receipts?</h3>
                                        <!-- Custom switch -->
                                        <input type="checkbox" checked data-toggle="toggle" class="toggleBtn" data-size="small" data-on="Yes" data-off="No" data-onstyle="outline-light" data-style="border">
                                    </div>
                                </header>
                            </div>
                            <!--DESIGNATIONS-->
                            <div class="profileCard" id="designationsCard">
                                <header>
                                    <i class="fas fa-code"></i>
                                    <h1>Designations</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm">EDIT</button>
                                </header>
                                <body>
                                    <span class="badge badge-pill badge-info">9234</span>
                                    <span class="badge badge-pill badge-info">9234</span>
                                    <span class="badge badge-pill badge-info">0234</span>
                                    <span class="badge badge-pill badge-info">2356</span>
                                </body>
                            </div>
                            <!--REP CODE-->
                            <div class="profileCard" id="repCodeCard">
                                <header>
                                    <i class="fas fa-link"></i>
                                    <h1>Rep Code Links</h1>
                                    <button type="button" class="btn btn-outline-light btn-sm">EDIT</button>
                                </header>
                                <body>
                                    <span class="badge badge-pill badge-success">9234</span>
                                    <span class="badge badge-pill badge-success">9234</span>
                                    <span class="badge badge-pill badge-success">0234</span>
                                    <span class="badge badge-pill badge-success">2356</span>
                                </body>
                            </div>
                    </div>
                </div>
            </div>
            
            
            <!------------------
                  MODALS
            ------------------->
            
            <!--PASSWORD MODAL-->
            <div class="modal fade" id="passwordModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="passwordModalTitle">Password Change</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                      <div class="form-group">
                          <label for="currentPassword">Current Password:</label>
                          <input type="password" class="form-control" id="currentPassword">
                      </div>
                      <div class="form-group">
                          <label for="newPassword">New Password:</label>
                          <input type="password" class="form-control" id="newPassword">
                      </div>
                      <div class="form-group">
                          <label for="confirmPassword">Confirm Password:</label>
                          <input type="password" class="form-control" id="confirmPassword">
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update Password</button>
                  </div>
                </div>
              </div>
            </div>
            
            <!--PERSONAL INFO MODAL-->
            <div class="modal fade" id="personalDataModal" role="dialog">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="personalDataModalTitle">Personal Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <!--PERSONAL INFO CONTENT-->
                      <form>
                          <div class="form-group row">
                            <div class="col">
                                <label for="firstName">First Name:</label>
                                <input type="text" class="form-control col" id="firstName">
                            </div>
                            <div class="col">
                                <label for="middleInitial">MI:</label>
                                <input type="text" class="form-control" id="middleInitial">
                            </div>
                          </div>
                          <div class="form-group row">
                              <div class="col">
                                <label for="lastName">Last Name:</label>
                                <input type="text" class="form-control" id="lastName">
                              </div>
                              <div class="col">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="emailAddress">Email address:</label>
                            <input type="email" class="form-control" id="emailAddress">
                          </div>
                          <div class="form-group">
                            <label for="phone">Phone:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Area Code</button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item">USA</a>
                                      <a class="dropdown-item">USA</a>
                                      <a class="dropdown-item">Germany</a>
                                      <a class="dropdown-item">Zambia</a>
                                    </div>
                                </div>
                                <input type="phone" class="form-control" id="phone">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" class="form-control" id="dob">
                            </div>
                            <div class="col">
                                <label for="sex">Sex:</label>
                                <select class="form-control" id="sex">
                                  <option>(Select)</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="maritialStatus">Maritial Status:</label>
                                <select class="form-control" id="maritialStatus">
                                  <option>(Select)</option>
                                  <option>Single</option>
                                  <option>Married</option>
                                  <option>Seperated</option>
                                  <option>Divorced</option>
                                  <option>Widowed</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col">
                                <label for="primaryDepartureCity">Primary Departure City:</label>
                                <input type="text" class="form-control" id="primaryDepartureCity">
                            </div>
                            <div class="col">
                                <label for="primaryDepartureState">Primary Departure State:</label>
                                <input type="text" class="form-control" id="primaryDepartureState">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col">
                                <label for="secondaryDepartureCity">Secondary Departure City:</label>
                                <input type="text" class="form-control" id="secondaryDepartureCity">
                            </div>
                            <div class="col">
                                <label for="secondaryDepartureState">Secondary Departure State:</label>
                                <input type="text" class="form-control" id="secondaryDepartureState">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="allergies">Allergies:</label>
                            <input type="text" class="form-control" id="allergies">
                          </div>
                          <div class="form-group">
                            <label for="medications">Medications:</label>
                            <input type="text" class="form-control" id="medications">
                          </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
            <!--MAILING ADDRESS MODAL-->
            <div class="modal fade" id="mailingAddressModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="mailingAddressModalTitle">Personal Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <!--MAILING ADDRESS CONTENT-->
                      <form>
                          <div class="form-group">
                            <label for="countryList">Country:</label>
                            <select class="form-control" id="countryList">
                              <option>(Country)</option>
                              <option>'MERICA</option>
                              <option>Zambia</option>
                              <option>Deutchland</option>
                              <option>Everyone Else</option>
                            </select>
                          </div>
                          <div class="form-group"> 
                              <label for="addressLine1">Address:</label>
                              <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
                              <br>
                              <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
                          </div>
                          <div class="form-group"> 
                              <label for="city">City:</label>
                              <input type="text" class="form-control" id="city">
                          </div>
                          <div class="form-group row">
                              <div class="col">
                                <label for="state">State/Region:</label>
                                <input type="text" class="form-control" id="state">
                              </div>
                              <div class="col">
                                <label for="zipCode">Zip:</label>
                                <input type="text" class="form-control" id="zipCode">
                              </div>
                          </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
           
        <!--PASSPORT MODALS-->
            <!--EDIT PASSPORT MODAL-->
            <div class="modal fade" id="passportEditModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="passportEditModalTitle">Edit Passport Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <!--PASSPORT CONTENT-->
                      <form>
                          <div class="form-group"> 
                              <label for="passportNumber">Passport Number:</label>
                              <input type="text" class="form-control" id="passportNumber">
                          </div>
                          <div class="form-group"> 
                              <label for="passportName">Passport Name:</label>
                              <input type="text" class="form-control" id="passportName">
                          </div>
                          <div class="form-group"> 
                              <label for="passportCountry">Passport Country:</label>
                              <input type="text" class="form-control" id="passportCountry">
                          </div>
                          <div class="form-group"> 
                              <label for="issueDate">Issue Date:</label>
                              <input type="date" class="form-control" id="issueDate">
                          </div>
                          <div class="form-group"> 
                              <label for="expirationDate">Expiration Date:</label>
                              <input type="date" class="form-control" id="expirationDate">
                          </div>
                          <button type="button" class="btn btn-primary">Add Scan</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
            <!--ADD PASSPORT MODAL-->
            <div class="modal fade" id="passportAddModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="passportAddModalTitle">Add Passport</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <!--PASSPORT CONTENT-->
                      <form>
                          <div class="form-group"> 
                              <label for="passportNumber">Passport Number:</label>
                              <input type="text" class="form-control" id="passportNumber">
                          </div>
                          <div class="form-group"> 
                              <label for="passportName">Passport Name:</label>
                              <input type="text" class="form-control" id="passportName">
                          </div>
                          <div class="form-group"> 
                              <label for="passportCountry">Passport Country:</label>
                              <input type="text" class="form-control" id="passportCountry">
                          </div>
                          <div class="form-group"> 
                              <label for="issueDate">Issue Date:</label>
                              <input type="date" class="form-control" id="issueDate">
                          </div>
                          <div class="form-group"> 
                              <label for="expirationDate">Expiration Date:</label>
                              <input type="date" class="form-control" id="expirationDate">
                          </div>
                          <button type="button" class="btn btn-primary">Add Scan</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
        <!--SAVED PAYMENT MODALS-->
            <!--ADD NEW PAYMENT METHOD-->
            <div class="modal fade" id="addNewPaymentMethodModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addNewPaymentMethodModalTitle">Add New Payment Method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <!--NEW METHOD CONTENT-->
                      <form>
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="differentBillingAddressCheck">
                            <label class="form-check-label" for="differentBillingAddressCheck">Different Billing Address?</label>
                          </div>
                          <!--COLAPSABLE-->
                          <!--START-->
                          <div class="form-group">
                            <label for="countryList">Country:</label>
                            <select class="form-control" id="countryList">
                              <option>(Country)</option>
                              <option>'MERICA</option>
                              <option>Zambia</option>
                              <option>Deutchland</option>
                              <option>Everyone Else</option>
                            </select>
                          </div>
                          <div class="form-group"> 
                              <label for="addressLine1">Address:</label>
                              <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
                              <br>
                              <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
                          </div>
                          <div class="form-group"> 
                              <label for="city">City:</label>
                              <input type="text" class="form-control" id="city">
                          </div>
                          <div class="form-group row">
                              <div class="col">
                                <label for="state">State/Region:</label>
                                <input type="text" class="form-control" id="state">
                              </div>
                              <div class="col">
                                <label for="zip">Zip:</label>
                                <input type="text" class="form-control" id="zip">
                              </div>
                          </div>
                          <!--END-->
                          <h4>Credit CardeCheck</h4>
                          <div class="form-group"> 
                              <label for="nameOnCard">Name on Card:</label>
                              <input type="text" class="form-control" id="nameOnCard">
                          </div>
                          <div class="form-group"> 
                              <label for="cardNumber">Card Number:</label>
                              <input type="number" class="form-control" id="cardNumber">
                          </div>
                          <div class="form-group row"> 
                            <div class="col">
                              <label for="securityCode">Security Code:</label>
                              <input type="number" class="form-control" id="securityCode">
                            </div>
                            <div class="col">
                              <label for="expirationDate">Expiration Date:</label>
                              <input type="date" class="form-control" id="expirationDate">
                            </div>
                          </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Payment Method</button>
                  </div>
                </div>
              </div>
            </div>
            
            <!--EDIT PAYMENT METHOD-->
            <div class="modal fade" id="editMethodModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editMethodModalTitle">Edit Payment Method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <!--EDIT METHOD CONTENT-->
                      <div class="displaySubContainer">
                          <div class="displaySub">
                            <div class="carouselGrid">
                                <div>Michael Porter</div>
                                <div>VISA XXXXXXXXX4806</div>
                                <div>1234 Bouyaah Rd</div>
                                <div>Jax, Florida 98304</div>
                            </div>
                          </div>
                      </div>
                      <!--MODAL NAV-->
                      <ul class="nav nav-tabs modalNav">
                            <li class="nav-item">
                              <a class="nav-link">Change Payment & Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Change Payment Only</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Change Address Only</a>
                            </li>
                      </ul>
                      <form>
                          <!--CHANGE PAYMENT & ADDRESS  START-->
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="differentBillingAddressCheck">
                            <label class="form-check-label" for="differentBillingAddressCheck">Different Billing Address?</label>
                          </div>
                          <!--COLAPSABLE START-->
                          <div class="form-group">
                            <label for="countryList">Country:</label>
                            <select class="form-control" id="countryList">
                              <option>(Country)</option>
                              <option>'MERICA</option>
                              <option>Zambia</option>
                              <option>Deutchland</option>
                              <option>Everyone Else</option>
                            </select>
                          </div>
                          <div class="form-group"> 
                              <label for="addressLine1">Address:</label>
                              <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
                              <br>
                              <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
                          </div>
                          <div class="form-group"> 
                              <label for="city">City:</label>
                              <input type="text" class="form-control" id="city">
                          </div>
                          <div class="form-group row">
                              <div class="col">
                                <label for="state">State/Region:</label>
                                <input type="text" class="form-control" id="state">
                              </div>
                              <div class="col">
                                <label for="zip">Zip:</label>
                                <input type="text" class="form-control" id="zip">
                              </div>
                          </div>
                          <!--COLAPSABLE END-->
                          <h4>Credit CardeCheck</h4>
                          <div class="form-group"> 
                              <label for="nameOnCard">Name on Card:</label>
                              <input type="text" class="form-control" id="nameOnCard">
                          </div>
                          <div class="form-group"> 
                              <label for="cardNumber">Card Number:</label>
                              <input type="number" class="form-control" id="cardNumber">
                          </div>
                          <div class="form-group row"> 
                            <div class="col">
                              <label for="securityCode">Security Code:</label>
                              <input type="number" class="form-control" id="securityCode">
                            </div>
                            <div class="col">
                              <label for="expirationDate">Expiration Date:</label>
                              <input type="date" class="form-control" id="expirationDate">
                            </div>
                          </div>
                          <!--END-->
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Payment Method</button>
                  </div>
                </div>
              </div>
            </div>
        
        <!--SUBSCRIPTION MODALS-->    
            <!--ADD NEW SUB-->
                <!--LINK TO DONATE PAGE...OR...DONATE PAGE IN MODAL-->
            <!--EDIT SUB-->
            <div class="modal fade" id="editSubsModal" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editSubsModalTitle">Edit Subscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <!--EDIT METHOD CONTENT-->
                      
                      <!--DISPLAY SUB THAT IS BEING EDITED-->
                      <div class="displaySubContainer">
                          <div class="displaySub">
                            <div class="carouselGridSubs">
                                <div>Name:</div>
                                    <div>Charles Jones</div>
                                <div>Amount:</div>
                                    <div>$500</div>
                                <div>Interval:</div>
                                    <div>Monthly</div>
                                <div>Date of Charge:</div>
                                    <div>13th</div>
                                <div>First Donation Date:</div>
                                    <div>09/13/2017</div>
                                <div>Billing Address:</div>
                                    <div>1234 Bouyaah Rd</div>
                                <div>Payment:</div>
                                    <div>VISA XXXXX9806</div>
                            </div>
                          </div>
                      </div>
                      <!--MODAL NAV-->
                      <ul class="nav nav-tabs modalNav">
                            <li class="nav-item">
                              <a class="nav-link">Change Payment & Subscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Change Payment Only</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Change Subscription Only</a>
                            </li>
                      </ul>
                      <form>
                          <!--CONTENT  START-->
                        <h3 class="displaySPMTitle">Saved Payment Methods</h3>
                          <div class="displaySPMContainer">
                              <div class="displaySPM">
                                <div class="carouselGrid">
                                    <div>Michael Porter</div>
                                    <div>VISA XXXXXXXXX4806</div>
                                    <div>1234 Bouyaah Rd</div>
                                    <div>Jax, Florida 98304</div>
                                </div>
                              </div>
                              <div class="displaySPM">
                                <div class="carouselGrid">
                                    <div>Michael Porter</div>
                                    <div>VISA XXXXXXXXX4806</div>
                                    <div>1234 Bouyaah Rd</div>
                                    <div>Jax, Florida 98304</div>
                                </div>
                              </div>
                          </div>
                          
                          <div class="form-group"> 
                            <label for="amount">Amount:</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Currency</button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item">USD $</a>
                                      <a class="dropdown-item">EURO &#8364;</a>
                                      <a class="dropdown-item">BP &#8356;</a>
                                    </div>
                                  </div>
                                <input type="number" step="0.01" class="form-control" id="amount">
                              </div>
                          </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </div>
            </div>
            
            
            
        </div>
        
        <?php 
            # Call Templates, aka templates/page.php, if the page exists call frame first then call template into frame
        ?>
        <script type="text/javascript">
            
            //function to open the bar
            function openBar() {
                if(!$("#popMenuContainer").hasClass('open')) {
                    $("#popMenuContainer").removeClass('d-none');
                    $("#popMenuContainer").addClass('open');
                    $("#popMenuContainer").stop(true, true).animate({ left: "0px"}, 1000, 'swing', function() {});
                }
            }

            //function to close the bar
            function closeBar() {
                if($("#popMenuContainer").hasClass('open')) {
                    $("#popMenuContainer").removeClass('open');
                    let ew = $("#popMenuContainer").outerWidth();
                    $("#popMenuContainer").animate({ left: `-${ew}px`}, 1000, 'swing', function() {
                        $("#popMenuContainer").addClass('d-none');
                    });
                }
            }
            
$(document).ready( function () {
            
            
        //FLICKITY
            //MOBILE NAV
            var elem = document.querySelector('.mobileNav');
            var flkty = new Flickity( elem, {
              // options
              contain: true
            });
            
            //SAVED PAYMENT METHODS
            $('.SPMcarousel').flickity({
              // options
              contain: true
            });
            
            //SUBSCRIPTIONS
            $('.SUBScarousel').flickity({
              // options
              contain: true
            });
                
            //POP MENU OPEN
                $(document).on('click', `#pop`, function() {
                    console.log("Pop Menu Open");
                    openBar();
                })
            //POP MENU CLOSE
                $(document).on('click', `#popClose`, function() {
                    console.log("Pop Menu Closed");
                    closeBar();
                })
                
            //POP SUBMENUS
              //START
            $(document).on('click', '#profilePopCard', function() {
                console.log("Profile SubMenu Toggled");
                $('#profilePopSubMenu').collapse('toggle');
                $('#profilePopCard').toggleClass('clickedBtn');
            })
    
            $(document).on('click', '#adminPopCard', function() {
                console.log("Admin SubMenu Toggled");
                $('#adminPopSubMenu').collapse('toggle');
                $('#adminPopCard').toggleClass('clickedBtn');
            })
    
    
            $(document).on('click', '#browsePopCard', function() {
                if ( $('#browsePopSubMenu').collapse('toggle') ) {
                    $('#leaderPopSubMenu').collapse('hide');
                    $('#leaderPopCard').removeClass('clickedBtn');
                    
                    console.log("Browse SubMenu Toggled");
                    $('#browsePopCard').toggleClass('clickedBtn');
                } 
            })
            $(document).on('click', '#leaderPopCard', function() {
                if ( $('#leaderPopSubMenu').collapse('toggle') ) {
                    $('#browsePopSubMenu').collapse('hide');
                    $('#browsePopCard').removeClass('clickedBtn');
                    
                    console.log("Leader SubMenu Toggled");
                    $('#leaderPopCard').toggleClass('clickedBtn');
                }
            })
    
            $(document).on('click', '#searchPopCard', function() {
                console.log("Search SubMenu Toggled");
                $('#searchPopSubMenu').collapse('toggle');
                $('#searchPopCard').toggleClass('clickedBtn');
            })
            
            $(document).on('click', '#sitePopCard', function() {
                if ( $('#sitePopSubMenu').collapse('toggle') ) {
                    $('#helpPopSubMenu').collapse('hide');
                    $('#helpPopCard').removeClass('clickedBtn');
                    
                    console.log("Browse SubMenu Toggled");
                    $('#sitePopCard').toggleClass('clickedBtn');
                } 
            })
            $(document).on('click', '#helpPopCard', function() {
                if ( $('#helpPopSubMenu').collapse('toggle') ) {
                    $('#sitePopSubMenu').collapse('hide');
                    $('#sitePopCard').removeClass('clickedBtn');
                    
                    console.log("Leader SubMenu Toggled");
                    $('#helpPopCard').toggleClass('clickedBtn');
                }
            })
              //END - POP SUBMENUS
         
         
        //MOBILE CARD NAV 
            flkty.on('change', function() {
                //WHICH TOGGLE IS CLICKED
                let selected = $('.mobileNav .carousel-cell.is-selected');
                //FIND EVERY TOGGLE
                $(`.mobileNav .nav-link`).each(function() {
                    //SET EVERY TOGGLE AS NOT HAVING ACTIVE CLASS
                    $(this).removeClass('active');
                    //HIDE EVERY CARD CONTAINER
                    $(`#${$(this).attr('data-toggle')}`).addClass('d-none-haswidth');
                });

                //ADD ACTIVE TO CLICKED TOGGLE
                selected.addClass('active');
                //UNHIDE THE SPECIFIC CONTAINER NEEDED
                $(`#${selected.attr('data-toggle')}`).removeClass('d-none-haswidth');

                //update window hash to keep on current tab
                let hash = selected.attr('data-toggle');
                //THIS SETS THE HASH OF A PAGE -> go.om.com/profile#Tasks
                window.location.hash = hash;
            });

            //FUNCTION TO AUTO OPEN TAB IF SET IN HASH
            //on initialization set to open tab with hash if exists
            if(window.location.hash) {                
                console.log('window hash', window.location.hash);
                //FIND AND SET THE HASH
                let hash = window.location.hash.substring(1);

                //FIND EVERY TOGGLE
                $(`.mobileNav .nav-link`).each(function() {
                    //SET EVERY TOGGLE AS NOT HAVING ACTIVE CLASS
                    $(this).removeClass('active');
                    //HIDE EVERY CARD CONTAINER
                    $(`#${$(this).attr('data-toggle')}`).addClass('d-none-haswidth');
                });

                //SEARCH EVERY TOGGLE
                $(`.mobileNav .nav-link`).each(function() {
                    //IF WE FIND A TOGGLE THAT MATCHES THE HASH SET THAT TOGGLE TO ACTIVE
                    if($(this).attr('data-toggle') == `${hash}`) {
                        $(this).addClass('active');

                        flkty.selectCell( `.mobileNav .nav-link.active`, false, true );
                    } else {
                        //SET A DEFAULT TOGGLE TO DISPLAY
                    }
                });
            }
          
            
        //DESKTOP CARD NAV 
            $(document).on('click', `#ID .cardNav .nav-link`, function() {
                //WHICH TOGGLE IS CLICKED
                let clicked = $(this);
                //FIND EVERY TOGGLE
                $(`#ID .cardNav .nav-link`).each(function() {
                    //SET EVERY TOGGLE AS NOT HAVING ACTIVE CLASS
                    $(this).removeClass('active');
                    //HIDE EVERY CARD CONTAINER
                    $(`#${$(this).attr('data-toggle')}`).addClass('d-none-haswidth');
                });

                //ADD ACTIVE TO CLICKED TOGGLE
                clicked.addClass('active');
                //UNHIDE THE SPECIFIC CONTAINER NEEDED
                $(`#${clicked.attr('data-toggle')}`).removeClass('d-none-haswidth');

                //update window hash to keep on current tab
                let hash = clicked.attr('data-toggle');
                //THIS SETS THE HASH OF A PAGE -> go.om.com/profile#Tasks
                window.location.hash = hash;
            });

            //FUNCTION TO AUTO OPEN TAB IF SET IN HASH
            //on initialization set to open tab with hash if exists
            if(window.location.hash) {                
                console.log('window hash', window.location.hash);
            //FIND AND SET THE HASH
            let hash = window.location.hash.substring(1);

            //FIND EVERY TOGGLE
            $(`#ID .cardNav .nav-link`).each(function() {
                //SET EVERY TOGGLE AS NOT HAVING ACTIVE CLASS
                $(this).removeClass('active');
                //HIDE EVERY CARD CONTAINER
                $(`#${$(this).attr('data-toggle')}`).addClass('d-none-haswidth');
            });

            //SEARCH EVERY TOGGLE
            $(`#ID .cardNav .nav-link`).each(function() {
                //IF WE FIND A TOGGLE THAT MATCHES THE HASH SET THAT TOGGLE TO ACTIVE
                if($(this).attr('data-toggle') == `${hash}`) {
                    $(this).addClass('active');
                    $(`#${$(this).attr('data-toggle')}`).removeClass('d-none-haswidth');
                } else {
                    //SET A DEFAULT TOGGLE TO DISPLAY
                }
            });
            }
          
        });

        </script>
    </body>
</html>

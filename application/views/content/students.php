<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Bootstrap Form Controls</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ; ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url() ; ?>assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ; ?>assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id="index" class="page-logo" href="index.html">
                                <img src="<?php echo base_url() ; ?>assets/layouts/layout5/img/logo.png" alt="Logo"> </a>
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                            <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit md-skip">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                            <!-- END SEARCH -->
                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class="topbar-actions">
                                <!-- BEGIN GROUP NOTIFICATION -->
                                <div class="btn-group-notification btn-group" id="header_notification_bar">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge">7</span>
                                    </button>
                                    <ul class="dropdown-menu-v2">
                                        <li class="external">
                                            <h3>
                                                <span class="bold">12 pending</span> notifications</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-success md-skip">
                                                                <i class="fa fa-plus"></i>
                                                            </span> New user registered. </span>
                                                        <span class="time">just now</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Server #12 overloaded. </span>
                                                        <span class="time">3 mins</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning md-skip">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Server #2 not responding. </span>
                                                        <span class="time">10 mins</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> Application error. </span>
                                                        <span class="time">14 hrs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Database overloaded 68%. </span>
                                                        <span class="time">2 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> A user IP blocked. </span>
                                                        <span class="time">3 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning md-skip">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                        <span class="time">4 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> System Error. </span>
                                                        <span class="time">5 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Storage server failed. </span>
                                                        <span class="time">9 days</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END GROUP NOTIFICATION -->
                                <!-- BEGIN GROUP INFORMATION -->
                                <div class="btn-group-red btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li class="active">
                                            <a href="#">New Post</a>
                                        </li>
                                        <li>
                                            <a href="#">New Comment</a>
                                        </li>
                                        <li>
                                            <a href="#">Share</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Feedbacks
                                                <span class="badge badge-danger">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END GROUP INFORMATION -->
                                <!-- BEGIN USER PROFILE -->
                                <div class="btn-group-img btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span>Hi, Marcus</span>
                                        <img src="<?php echo base_url() ; ?>assets/layouts/layout5/img/avatar1.jpg" alt=""> </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li>
                                            <a href="page_user_profile_1.html">
                                                <i class="icon-user"></i> My Profile
                                                <span class="badge badge-danger">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_calendar.html">
                                                <i class="icon-calendar"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href="app_inbox.html">
                                                <i class="icon-envelope-open"></i> My Inbox
                                                <span class="badge badge-danger"> 3 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_todo_2.html">
                                                <i class="icon-rocket"></i> My Tasks
                                                <span class="badge badge-success"> 7 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="page_user_lock_1.html">
                                                <i class="icon-lock"></i> Lock Screen </a>
                                        </li>
                                        <li>
                                            <a href="page_user_login_1.html">
                                                <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                <button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">
                                    <span class="sr-only">Toggle Quick Sidebar</span>
                                    <i class="icon-logout"></i>
                                </button>
                                <!-- END QUICK SIDEBAR TOGGLER -->
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown dropdown-fw  ">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-home"></i> Dashboard </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li>
                                            <a href="index.html">
                                                <i class="icon-bar-chart"></i> Default </a>
                                        </li>
                                        <li>
                                            <a href="dashboard_2.html">
                                                <i class="icon-bulb"></i> Dashboard 2 </a>
                                        </li>
                                        <li>
                                            <a href="dashboard_3.html">
                                                <i class="icon-graph"></i> Dashboard 3 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-fw  active open selected">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-puzzle"></i> Features </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-diamond"></i> UI Features </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="ui_colors.html"> Color Library </a>
                                                </li>
                                                <li>
                                                    <a href="ui_general.html"> General Components </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons.html"> Buttons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_confirmations.html"> Popover Confirmations </a>
                                                </li>
                                                <li>
                                                    <a href="ui_icons.html"> Font Icons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_socicons.html"> Social Icons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html"> Typography </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs_accordions_navs.html"> Tabs, Accordions & Navs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html"> Tree View </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Timeline </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_1.html"> Page Progress Bar - Flash </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_2.html"> Page Progress Bar - Big Counter </a>
                                                </li>
                                                <li>
                                                    <a href="ui_blockui.html"> Block UI </a>
                                                </li>
                                                <li>
                                                    <a href="ui_bootstrap_growl.html"> Bootstrap Growl Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_notific8.html"> Notific8 Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_toastr.html"> Toastr Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_bootbox.html"> Bootbox Dialogs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_alerts_api.html"> Metronic Alerts API </a>
                                                </li>
                                                <li>
                                                    <a href="ui_session_timeout.html"> Session Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_idle_timeout.html"> User Idle Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_modals.html"> Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_extended_modals.html"> Extended Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tiles.html"> Tiles </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Timeline </a>
                                                </li>
                                                <li>
                                                    <a href="ui_datepaginator.html"> Date Paginator </a>
                                                </li>
                                                <li>
                                                    <a href="ui_nestable.html"> Nestable List </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-puzzle"></i> Components </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="components_date_time_pickers.html"> Date & Time Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_color_pickers.html"> Color Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_select2.html"> Select2 Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_select.html"> Bootstrap Select </a>
                                                </li>
                                                <li>
                                                    <a href="components_multi_select.html"> Multi Select </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_select_splitter.html"> Select Splitter </a>
                                                </li>
                                                <li>
                                                    <a href="components_typeahead.html"> Typeahead Autocomplete </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_tagsinput.html"> Bootstrap Tagsinput </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_switch.html"> Bootstrap Switch </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_maxlength.html"> Bootstrap Maxlength </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_fileinput.html"> Bootstrap File Input </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_touchspin.html"> Bootstrap Touchspin </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools.html"> Form Widgets & Tools </a>
                                                </li>
                                                <li>
                                                    <a href="components_context_menu.html"> Context Menu </a>
                                                </li>
                                                <li>
                                                    <a href="components_editors.html"> Markdown & WYSIWYG Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_code_editors.html"> Code Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_ion_sliders.html"> Ion Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_noui_sliders.html"> NoUI Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_knob_dials.html"> Knob Circle Dials </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub active">
                                            <a href="javascript:;">
                                                <i class="icon-settings"></i> Form Stuff </a>
                                            <ul class="dropdown-menu">
                                                <li class="active">
                                                    <a href="form_controls.html"> Bootstrap Form
                                                        <br>Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_controls_md.html"> Material Design
                                                        <br>Form Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation.html"> Form Validation </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation_states_md.html"> Material Design
                                                        <br>Form Validation States </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation_md.html"> Material Design
                                                        <br>Form Validation </a>
                                                </li>
                                                <li>
                                                    <a href="form_layouts.html"> Form Layouts </a>
                                                </li>
                                                <li>
                                                    <a href="form_input_mask.html"> Form Input Mask </a>
                                                </li>
                                                <li>
                                                    <a href="form_editable.html"> Form X-editable </a>
                                                </li>
                                                <li>
                                                    <a href="form_wizard.html"> Form Wizard </a>
                                                </li>
                                                <li>
                                                    <a href="form_icheck.html"> iCheck Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_image_crop.html"> Image Cropping </a>
                                                </li>
                                                <li>
                                                    <a href="form_fileupload.html"> Multiple File Upload </a>
                                                </li>
                                                <li>
                                                    <a href="form_dropzone.html"> Dropzone File Upload </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="?p=">
                                                <i class="icon-wallet"></i> Portlets </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="portlet_boxed.html"> Boxed Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_light.html"> Light Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_solid.html"> Solid Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_ajax.html"> Ajax Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_draggable.html"> Draggable Portlets </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-bar-chart"></i> Charts </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="charts_amcharts.html"> amChart </a>
                                                </li>
                                                <li>
                                                    <a href="charts_flotcharts.html"> Flot Charts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_flowchart.html"> Flow Charts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_google.html"> Google Charts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_echarts.html"> eCharts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_morris.html"> Morris Charts </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> HighCharts </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-cloud-upload"></i> Elements </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="elements_steps.html"> Steps </a>
                                                </li>
                                                <li>
                                                    <a href="elements_lists.html"> Lists </a>
                                                </li>
                                                <li>
                                                    <a href="elements_ribbons.html"> Ribbons </a>
                                                </li>
                                                <li>
                                                    <a href="elements_overlay.html"> Overlays </a>
                                                </li>
                                                <li>
                                                    <a href="elements_cards.html"> User Cards </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-pointer"></i> Maps </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="maps_google.html"> Google Maps </a>
                                                </li>
                                                <li>
                                                    <a href="maps_vector.html"> Vector Maps </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-fw  ">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-briefcase"></i> Tables </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;"> Static Tables </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="table_static_basic.html"> Basic Tables </a>
                                                </li>
                                                <li>
                                                    <a href="table_static_responsive.html"> Responsive Tables </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;"> Datatables </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="table_datatables_managed.html"> Managed Datatables </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_buttons.html"> Buttons Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_colreorder.html"> Colreorder Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_rowreorder.html"> Rowreorder Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_scroller.html"> Scroller Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_fixedheader.html"> FixedHeader Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_responsive.html"> Responsive Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_editable.html"> Editable Datatables </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_ajax.html"> Ajax Datatables </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-fw  ">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-layers"></i> Pages </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-basket"></i> eCommerce </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="ecommerce_index.html">
                                                        <i class="icon-home"></i> Dashboard </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders.html">
                                                        <i class="icon-basket"></i> Orders </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders_view.html">
                                                        <i class="icon-tag"></i> Order View </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products.html">
                                                        <i class="icon-graph"></i> Products </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products_edit.html">
                                                        <i class="icon-graph"></i> Product Edit </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> Apps </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="app_todo.html">
                                                        <i class="icon-clock"></i> Todo 1 </a>
                                                </li>
                                                <li>
                                                    <a href="app_todo_2.html">
                                                        <i class="icon-check"></i> Todo 2 </a>
                                                </li>
                                                <li>
                                                    <a href="app_inbox.html">
                                                        <i class="icon-envelope"></i> Inbox </a>
                                                </li>
                                                <li>
                                                    <a href="app_calendar.html">
                                                        <i class="icon-calendar"></i> Calendar </a>
                                                </li>
                                                <li>
                                                    <a href="app_ticket.html">
                                                        <i class="icon-notebook"></i> Support </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> User </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="page_user_profile_1.html"> Profile 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_1_account.html"> Profile 1 Account </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_1_help.html"> Profile 1 Help </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_2.html"> Profile 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_1.html"> Login Page 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_2.html"> Login Page 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_3.html"> Login Page 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_4.html"> Login Page 4 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_5.html"> Login Page 5 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_6.html"> Login Page 6 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_lock_1.html"> Lock Screen 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_lock_2.html"> Lock Screen 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-social-dribbble"></i> General </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="page_general_about.html"> About </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_contact.html"> Contact </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_1.html"> Portfolio 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_2.html"> Portfolio 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_3.html"> Portfolio 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_4.html"> Portfolio 4 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search.html"> Search 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_2.html"> Search 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_3.html"> Search 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_4.html"> Search 4 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_5.html"> Search 5 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_pricing.html"> Pricing </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_faq.html"> FAQ </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_blog.html"> Blog </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_blog_post.html"> Blog Post </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_invoice.html"> Invoice </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_invoice_2.html"> Invoice 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-settings"></i> System </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="layout_blank_page.html"> Blank Page </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_coming_soon.html"> Coming Soon </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_404_1.html"> 404 Page 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_404_2.html"> 404 Page 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_404_3.html"> 404 Page 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_500_1.html"> 500 Page 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_500_2.html"> 500 Page 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown more-dropdown">
                                    <a href="javascript:;" class="text-uppercase"> More </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Link 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 3</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 4</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Bootstrap Form Controls</h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li class="active">Form Stuff</li>
                        </ol>
                        <!-- Sidebar Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-sidebar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- Sidebar Toggle Button -->
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <ul class="nav navbar-nav margin-bottom-35">
                                        <li class="active">
                                            <a href="index.html">
                                                <i class="icon-home"></i> Home </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-note "></i> Reports </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> User Activity </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-basket "></i> Marketplace </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Templates </a>
                                        </li>
                                    </ul>
                                    <h3>Quick Actions</h3>
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope "></i> Inbox
                                                <label class="label label-danger">New</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-paper-clip "></i> Task </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-star"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-pin"></i> Events
                                                <span class="badge badge-success">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-settings font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Default Form</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-ban"></i> Ban </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Make admin </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Email Address"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Circle Input</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon input-circle-left">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="text" class="form-control input-circle-right" placeholder="Email Address"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-user font-red"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Left Icon</label>
                                                            <div class="input-icon">
                                                                <i class="fa fa-bell-o font-green"></i>
                                                                <input type="text" class="form-control" placeholder="Left icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Left Icon(.input-sm)</label>
                                                            <div class="input-icon input-icon-sm">
                                                                <i class="fa fa-bell-o"></i>
                                                                <input type="text" class="form-control input-sm" placeholder="Left icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Left Icon(.input-lg)</label>
                                                            <div class="input-icon input-icon-lg">
                                                                <i class="fa fa-bell-o"></i>
                                                                <input type="text" class="form-control input-lg" placeholder="Left icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Right Icon</label>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-microphone fa-spin font-blue"></i>
                                                                <input type="text" class="form-control" placeholder="Right icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Right Icon(.input-sm)</label>
                                                            <div class="input-icon input-icon-sm right">
                                                                <i class="fa fa-bell-o"></i>
                                                                <input type="text" class="form-control input-sm" placeholder="Left icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Right Icon(.input-lg)</label>
                                                            <div class="input-icon input-icon-lg right">
                                                                <i class="fa fa-bell-o font-green"></i>
                                                                <input type="text" class="form-control input-lg" placeholder="Left icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Circle Input</label>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-microphone"></i>
                                                                <input type="text" class="form-control input-circle" placeholder="Right icon"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Input with Icon</label>
                                                            <div class="input-group input-icon right">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope font-purple"></i>
                                                                </span>
                                                                <i class="fa fa-exclamation tooltips" data-original-title="Invalid email." data-container="body"></i>
                                                                <input id="email" class="input-error form-control" type="text" value=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Input With Spinner</label>
                                                            <input class="form-control spinner" type="text" placeholder="Process something" /> </div>
                                                        <div class="form-group">
                                                            <label>Static Control</label>
                                                            <p class="form-control-static"> email@example.com </p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Disabled</label>
                                                            <input type="text" class="form-control" placeholder="Disabled" disabled> </div>
                                                        <div class="form-group">
                                                            <label>Readonly</label>
                                                            <input type="text" class="form-control" placeholder="Readonly" readonly> </div>
                                                        <div class="form-group">
                                                            <label>Dropdown</label>
                                                            <select class="form-control">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Multiple Select</label>
                                                            <select multiple class="form-control">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Textarea</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile1">File input</label>
                                                            <input type="file" id="exampleInputFile1">
                                                            <p class="help-block"> some help text here. </p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Checkboxes</label>
                                                            <div class="checkbox-list">
                                                                <label>
                                                                    <input type="checkbox"> Checkbox 1 </label>
                                                                <label>
                                                                    <input type="checkbox"> Checkbox 2 </label>
                                                                <label>
                                                                    <input type="checkbox" disabled> Disabled </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Inline Checkboxes</label>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Checkbox 1 </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> Checkbox 2 </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox3" value="option3" disabled> Disabled </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Radio</label>
                                                            <div class="radio-list">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled> Disabled </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Inline Radio</label>
                                                            <div class="radio-list">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Option 1 </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> Option 2 </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios6" value="option3" disabled> Disabled </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn blue">Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-social-dribbble font-blue-sharp"></i>
                                                    <span class="caption-subject font-blue-sharp bold uppercase">Input Height Sizing</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label>Large Input</label>
                                                            <input type="text" class="form-control input-lg" placeholder="input-lg"> </div>
                                                        <div class="form-group">
                                                            <label>Large Input Group</label>
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon" id="sizing-addon1">@</span>
                                                                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Large Input Default Group</label>
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="form-control" placeholder="Search for...">
                                                                <span class="input-group-btn">
                                                                    <button class="btn green" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Default Input</label>
                                                            <input type="text" class="form-control" placeholder=""> </div>
                                                        <div class="form-group">
                                                            <label>Default Input Group</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                                                                <span class="input-group-addon" id="sizing-addon1">@</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Default Input Button Group</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Search for...">
                                                                <span class="input-group-btn">
                                                                    <button class="btn red" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Small Input</label>
                                                            <input type="text" class="form-control input-sm" placeholder="input-sm"> </div>
                                                        <div class="form-group">
                                                            <label>Small Input Group</label>
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-addon" id="sizing-addon1">@</span>
                                                                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Small Input Default Group</label>
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control" placeholder="Search for...">
                                                                <span class="input-group-btn">
                                                                    <button class="btn green" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Large Select</label>
                                                            <select class="form-control input-lg">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Default Select</label>
                                                            <select class="form-control">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Small Select</label>
                                                            <select class="form-control input-sm">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions right">
                                                        <button type="button" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn green">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-bubble font-green-sharp"></i>
                                                    <span class="caption-subject font-green-sharp bold uppercase">Input Width Sizing</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group">
                                                        <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;"> Option 1</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Option 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Option 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Option 4</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label>Fluid Input</label>
                                                            <input type="text" class="form-control" placeholder="fluid">
                                                            <div class="input-icon right margin-top-10">
                                                                <i class="fa fa-check"></i>
                                                                <input type="text" class="form-control" placeholder="fluid"> </div>
                                                            <div class="input-icon margin-top-10">
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" class="form-control" placeholder="fluid"> </div>
                                                            <div class="input-group margin-top-10">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" class="form-control" placeholder=".input-xlarge"> </div>
                                                            <div class="input-group margin-top-10">
                                                                <input type="email" class="form-control" placeholder=".input-xlarge">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <hr> </div>
                                                        <div class="form-group">
                                                            <label>Extra Large Input</label>
                                                            <input type="text" class="form-control input-xlarge" placeholder=".input-xlarge">
                                                            <div class="input-icon right input-xlarge margin-top-10">
                                                                <i class="fa fa-check"></i>
                                                                <input type="text" class="form-control" placeholder=".input-xlarge"> </div>
                                                            <div class="input-icon input-xlarge margin-top-10">
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" class="form-control" placeholder=".input-xlarge"> </div>
                                                            <div class="input-group input-xlarge margin-top-10">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" class="form-control" placeholder=".input-xlarge"> </div>
                                                            <div class="input-group input-xlarge margin-top-10">
                                                                <input type="email" class="form-control" placeholder=".input-xlarge">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <hr> </div>
                                                        <div class="form-group">
                                                            <label>Large Input</label>
                                                            <input type="text" class="form-control input-large" placeholder=".input-large">
                                                            <div class="input-icon right input-large margin-top-10">
                                                                <i class="fa fa-check"></i>
                                                                <input type="text" class="form-control" placeholder=".input-large"> </div>
                                                            <div class="input-icon input-large margin-top-10">
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" class="form-control" placeholder=".input-large"> </div>
                                                            <div class="input-group input-large margin-top-10">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" class="form-control" placeholder=".input-large"> </div>
                                                            <div class="input-group input-large margin-top-10">
                                                                <input type="email" class="form-control" placeholder=".input-large">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <hr> </div>
                                                        <div class="form-group">
                                                            <label>Medium Input</label>
                                                            <input type="text" class="form-control input-medium" placeholder=".input-medium">
                                                            <div class="input-icon right input-medium margin-top-10">
                                                                <i class="fa fa-check"></i>
                                                                <input type="text" class="form-control" placeholder=".input-medium"> </div>
                                                            <div class="input-icon input-medium margin-top-10">
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" class="form-control" placeholder=".input-medium"> </div>
                                                            <div class="input-group input-medium margin-top-10">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" class="form-control" placeholder=".input-medium"> </div>
                                                            <div class="input-group input-medium margin-top-10">
                                                                <input type="email" class="form-control" placeholder=".input-medium">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <hr> </div>
                                                        <div class="form-group">
                                                            <label>Small Input</label>
                                                            <input type="text" class="form-control input-small" placeholder=".input-small">
                                                            <div class="input-icon right input-small margin-top-10">
                                                                <i class="fa fa-check"></i>
                                                                <input type="text" class="form-control" placeholder=".input-small"> </div>
                                                            <div class="input-icon input-small margin-top-10">
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" class="form-control" placeholder=".input-small"> </div>
                                                            <div class="input-group input-small margin-top-10">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" class="form-control" placeholder=".input-small"> </div>
                                                            <div class="input-group input-small margin-top-10">
                                                                <input type="email" class="form-control" placeholder=".input-small">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Extra Small Input</label>
                                                            <input type="text" class="form-control input-xsmall" placeholder=".input-xsmall"> </div>
                                                        <div class="form-group">
                                                            <label>Extra Large Select</label>
                                                            <select class="form-control input-xlarge">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Large Select</label>
                                                            <select class="form-control input-large">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Medium Select</label>
                                                            <select class="form-control input-medium">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Small Select</label>
                                                            <select class="form-control input-small">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Extra Small Select</label>
                                                            <select class="form-control input-xsmall">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions right">
                                                        <button type="button" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn green">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                    <div class="col-md-6 ">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject font-dark sbold uppercase">Horizontal Form</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Block Help</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" placeholder="Enter text">
                                                                <span class="help-block"> A block of help text. </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Inline Help</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-inline input-medium" placeholder="Enter text">
                                                                <span class="help-inline"> Inline help. </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Input Group</label>
                                                            <div class="col-md-9">
                                                                <div class="input-inline input-medium">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                                        <input type="email" class="form-control" placeholder="Email Address"> </div>
                                                                </div>
                                                                <span class="help-inline"> Inline help. </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Email Address</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" class="form-control" placeholder="Email Address"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Password</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control" placeholder="Password">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-user"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Left Icon</label>
                                                            <div class="col-md-9">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-bell-o"></i>
                                                                    <input type="text" class="form-control" placeholder="Left icon"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Right Icon</label>
                                                            <div class="col-md-9">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-microphone"></i>
                                                                    <input type="text" class="form-control" placeholder="Right icon"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Icon Input in Group Input</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <div class="input-icon">
                                                                        <i class="fa fa-lock fa-fw"></i>
                                                                        <input id="newpassword" class="form-control" type="text" name="password" placeholder="password" /> </div>
                                                                    <span class="input-group-btn">
                                                                        <button id="genpassword" class="btn btn-success" type="button">
                                                                            <i class="fa fa-arrow-left fa-fw" /></i> Random</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Input With Spinner</label>
                                                            <div class="col-md-9">
                                                                <input type="password" class="form-control spinner" placeholder="Password"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Static Control</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> email@example.com </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Disabled</label>
                                                            <div class="col-md-9">
                                                                <input type="password" class="form-control" placeholder="Disabled" disabled> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Readonly</label>
                                                            <div class="col-md-9">
                                                                <input type="password" class="form-control" placeholder="Readonly" readonly> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Dropdown</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control">
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                    <option>Option 4</option>
                                                                    <option>Option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Multiple Select</label>
                                                            <div class="col-md-9">
                                                                <select multiple class="form-control">
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                    <option>Option 4</option>
                                                                    <option>Option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Textarea</label>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
                                                            <div class="col-md-9">
                                                                <input type="file" id="exampleInputFile">
                                                                <p class="help-block"> some help text here. </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Checkboxes</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox-list">
                                                                    <label>
                                                                        <input type="checkbox"> Checkbox 1 </label>
                                                                    <label>
                                                                        <input type="checkbox"> Checkbox 1 </label>
                                                                    <label>
                                                                        <input type="checkbox" disabled> Disabled </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Inline Checkboxes</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox-list">
                                                                    <label class="checkbox-inline">
                                                                        <input type="checkbox" id="inlineCheckbox21" value="option1"> Checkbox 1 </label>
                                                                    <label class="checkbox-inline">
                                                                        <input type="checkbox" id="inlineCheckbox22" value="option2"> Checkbox 2 </label>
                                                                    <label class="checkbox-inline">
                                                                        <input type="checkbox" id="inlineCheckbox23" value="option3" disabled> Disabled </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Radio</label>
                                                            <div class="col-md-9">
                                                                <div class="radio-list">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios22" value="option1" checked> Option 1 </label>
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios23" value="option2" checked> Option 2 </label>
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios24" value="option2" disabled> Disabled </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Inline Radio</label>
                                                            <div class="col-md-9">
                                                                <div class="radio-list">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" checked> Option 1 </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios26" value="option2" checked> Option 2 </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios27" value="option3" disabled> Disabled </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">Submit</button>
                                                                <button type="button" class="btn default">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet box purple ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i> Horizontal Form Height Sizing </div>
                                                <div class="tools">
                                                    <a href="" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="" class="reload"> </a>
                                                    <a href="" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Large Input</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-lg" placeholder="Large Input"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Default Input</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" placeholder="Default Input"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Small Input</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" placeholder="Default Input"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Large Select</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control input-lg">
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                    <option>Option 4</option>
                                                                    <option>Option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Default Select</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control">
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                    <option>Option 4</option>
                                                                    <option>Option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Small Select</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control input-sm">
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                    <option>Option 4</option>
                                                                    <option>Option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions right1">
                                                        <button type="button" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn green">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet box purple ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i> Fluid Input Groups </div>
                                                <div class="tools">
                                                    <a href="" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="" class="reload"> </a>
                                                    <a href="" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <h4 class="block">Checkboxe Addons</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <input type="checkbox"> </span>
                                                                <input type="text" class="form-control"> </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-addon">
                                                                    <input type="checkbox"> </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Button Addons</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <button class="btn red" type="button">Go!</button>
                                                                </span>
                                                                <input type="text" class="form-control"> </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn blue" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Button Addons On Both Sides</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <button class="btn red" type="button">Go!</button>
                                                                </span>
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn blue" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                </form>
                                                <h4 class="block">Buttons With Dropdowns</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control"> </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Buttons With Dropdowns On Both Sides</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Segmented Buttons</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn default" tabindex="-1">Action</button>
                                                                    <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <input type="text" class="form-control"> </div>
                                                            <!-- /.input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn green" tabindex="-1">Action</button>
                                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- /.input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet box purple ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i> Fixed Input Groups </div>
                                                <div class="tools">
                                                    <a href="" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="" class="reload"> </a>
                                                    <a href="" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <h4 class="block">Checkboxe Addons</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium">
                                                                <span class="input-group-addon">
                                                                    <input type="checkbox"> </span>
                                                                <input type="text" class="form-control" placeholder=".input-medium"> </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium">
                                                                <input type="text" class="form-control" placeholder=".input-medium">
                                                                <span class="input-group-addon">
                                                                    <input type="checkbox"> </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Button Addons</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium">
                                                                <span class="input-group-btn">
                                                                    <button class="btn red" type="button">Go!</button>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder=".input-medium"> </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium">
                                                                <input type="text" class="form-control" placeholder=".input-medium">
                                                                <span class="input-group-btn">
                                                                    <button class="btn blue" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Button Addons On Both Sides</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group input-large">
                                                                <span class="input-group-btn">
                                                                    <button class="btn red" type="button">Go!</button>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder=".input-large">
                                                                <span class="input-group-btn">
                                                                    <button class="btn blue" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                </form>
                                                <h4 class="block">Buttons With Dropdowns</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control" placeholder=".input-medium"> </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium">
                                                                <input type="text" class="form-control" placeholder=".input-medium">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Buttons With Dropdowns On Both Sides</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group input-xlarge">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control" placeholder=".input-xlarge">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown">Action
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /btn-group -->
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </form>
                                                <h4 class="block">Segmented Buttons</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group input-large">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn default" tabindex="-1">Action</button>
                                                                    <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder=".input-large"> </div>
                                                            <!-- /.input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                </form>
                                                <form role="form" class="margin-top-10">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group input-large">
                                                                <input type="text" class="form-control" placeholder=".input-large">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn green" tabindex="-1">Action</button>
                                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;"> Action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Another action </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Something else here </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Separated link </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- /.input-group -->
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                        <div class="portlet box blue ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i> Validation States </div>
                                                <div class="tools">
                                                    <a href="" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="" class="reload"> </a>
                                                    <a href="" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group has-success">
                                                            <label class="control-label">Input with success</label>
                                                            <input type="text" class="form-control" id="inputSuccess"> </div>
                                                        <div class="form-group has-warning">
                                                            <label class="control-label">Input with warning</label>
                                                            <input type="text" class="form-control" id="inputWarning"> </div>
                                                        <div class="form-group has-error">
                                                            <label class="control-label">Input with error</label>
                                                            <input type="text" class="form-control" id="inputError"> </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="button" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn red">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="portlet box yellow ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i> Validation States With Icons </div>
                                                <div class="tools">
                                                    <a href="" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="" class="reload"> </a>
                                                    <a href="" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label">Default input</label>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="Email address" data-container="body"></i>
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group has-success">
                                                            <label class="control-label">Input with success</label>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-check tooltips" data-original-title="You look OK!" data-container="body"></i>
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group has-warning">
                                                            <label class="control-label">Input with warning</label>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-warning tooltips" data-original-title="please provide an email" data-container="body"></i>
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group has-error">
                                                            <label class="control-label">Input with error</label>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-exclamation tooltips" data-original-title="please write a valid email" data-container="body"></i>
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions right">
                                                        <button type="button" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn green">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="portlet box purple">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i> Horizontal Form Validation States </div>
                                                <div class="tools">
                                                    <a href="" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="" class="reload"> </a>
                                                    <a href="" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Default input</label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-info-circle tooltips" data-original-title="Email address" data-container="body"></i>
                                                                    <input type="text" class="form-control"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-success">
                                                            <label class="col-md-4 control-label">Input with success</label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-check tooltips" data-original-title="You look OK!" data-container="body"></i>
                                                                    <input type="text" class="form-control"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-warning">
                                                            <label class="col-md-4 control-label">Input with warning</label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-warning tooltips" data-original-title="please provide an email" data-container="body"></i>
                                                                    <input type="text" class="form-control"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-error">
                                                            <label class="col-md-4 control-label">Input with error</label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-exclamation tooltips" data-original-title="please write a valid email" data-container="body"></i>
                                                                    <input type="text" class="form-control"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-4 col-md-8">
                                                                <button type="button" class="btn default">Cancel</button>
                                                                <button type="submit" class="btn blue">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-share font-dark"></i>
                                                    <span class="caption-subject font-dark bold uppercase">More Form Samples</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <h4>Inline Form</h4>
                                                <form class="form-inline" role="form">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"> </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"> </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Remember me </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Sign in</button>
                                                </form>
                                                <hr>
                                                <h4>Inline Form With Icons</h4>
                                                <form class="form-inline" role="form">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail22">Email address</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-envelope"></i>
                                                            <input type="email" class="form-control" id="exampleInputEmail22" placeholder="Enter email"> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputPassword42">Password</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-user"></i>
                                                            <input type="password" class="form-control" id="exampleInputPassword42" placeholder="Password"> </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Remember me </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Sign in</button>
                                                </form>
                                                <hr>
                                                <h4>Horizontal Form</h4>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                                                        <div class="col-md-4">
                                                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email"> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword12" class="col-md-2 control-label">Password</label>
                                                        <div class="col-md-4">
                                                            <input type="password" class="form-control" id="inputPassword12" placeholder="Password"> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-2 col-md-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> Remember me </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-2 col-md-10">
                                                            <button type="submit" class="btn blue">Sign in</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <hr>
                                                <h4>Horizontal Form With Icons</h4>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="inputEmail12" class="col-md-2 control-label">Email</label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon">
                                                                <i class="fa fa-envelope"></i>
                                                                <input type="email" class="form-control" id="inputEmail12" placeholder="Email"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword1" class="col-md-2 control-label">Password</label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input type="password" class="form-control" id="inputPassword1" placeholder="Password"> </div>
                                                            <div class="help-block"> with right aligned icon </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-2 col-md-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> Remember me </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-2 col-md-10">
                                                            <button type="submit" class="btn green">Sign in</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <hr>
                                                <h4>Column Sizing</h4>
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" placeholder=".col-md-2"> </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" placeholder=".col-md-3"> </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" placeholder=".col-md-4"> </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" placeholder=".col-md-2"> </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright"><?php echo date('Y'); ?> ©
                    <a href="http://www.svenskuppdragsutbildning.com" title="Besök Svensk Uppdragsutbildnings hemsida" target="_blank">Svensk Uppdragsutbildning.</a>
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub"> Art Director </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="<?php echo base_url() ; ?>assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li> Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li> Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
        <!--[if lt IE 9]>
<script src="<?php echo base_url() ; ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url() ; ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ; ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url() ; ?>assets/layouts/layout5/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ; ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
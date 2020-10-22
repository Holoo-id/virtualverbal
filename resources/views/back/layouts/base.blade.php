<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@virtualverbal">
    <meta name="twitter:creator" content="@virtualverbal">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Virtual Verbal">
    <meta name="twitter:description" content="Kamu butuh bacaan seputar games, geeks, technology, hobbies, lifestyle dengan pembahasan yang santai dan menarik? Yuk, pantengin timeline kami.">
    <meta name="twitter:image" content="https://twitter.com/virtualverbal/photo">

    <!-- Facebook -->
    <meta property="og:url" content="https://www.facebook.com/virtualverbal">
    <meta property="og:title" content="Virtual Verbal">
    <meta property="og:description" content="Kamu butuh bacaan seputar games, geeks, technology, hobbies, lifestyle dengan pembahasan yang santai dan menarik? Yuk, pantengin timeline kami.">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="author" content="Virtual Verbal">
    <meta name="description" content="Virtual Verbal adalah portal berita Games, Event, dan E-Sport">
    <meta name="keywords" content="virtual verbal, vv, portal game news">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-minimal">

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="../template/index.html" class="az-logo"><span></span> azia</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> azia</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item active show">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
              <div class="az-menu-sub">
                <nav class="nav">
                  <a href="dashboard-one.html" class="nav-link">Web Analytics</a>
                  <a href="dashboard-two.html" class="nav-link">Sales Monitoring</a>
                  <a href="dashboard-three.html" class="nav-link">Ad Campaign</a>
                  <a href="dashboard-four.html" class="nav-link">Event Management</a>
                  <a href="dashboard-five.html" class="nav-link">Helpdesk Management</a>
                  <a href="dashboard-six.html" class="nav-link">Finance Monitoring</a>
                  <a href="dashboard-seven.html" class="nav-link active">Cryptocurrency</a>
                  <a href="dashboard-eight.html" class="nav-link">Executive / SaaS</a>
                  <a href="dashboard-nine.html" class="nav-link">Campaign Monitoring</a>
                  <a href="dashboard-ten.html" class="nav-link">Product Management</a>
                </nav>
              </div><!-- az-menu-sub -->
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-folder"></i> Apps</a>
              <nav class="az-menu-sub">
                <a href="app-mail.html" class="nav-link">Mailbox</a>
                <a href="app-chat.html" class="nav-link">Chat</a>
                <a href="app-calendar.html" class="nav-link">Calendar</a>
                <a href="app-contacts.html" class="nav-link">Contacts</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> Pages</a>
              <nav class="az-menu-sub">
                <a href="page-profile.html" class="nav-link">Profile</a>
                <a href="page-invoice.html" class="nav-link">Invoice</a>
                <a href="page-signin.html" class="nav-link">Sign In</a>
                <a href="page-signup.html" class="nav-link">Sign Up</a>
                <a href="page-404.html" class="nav-link">Page 404</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
              <div class="az-menu-sub az-menu-sub-mega">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <span>UI Elements</span>
                      <a href="elem-accordion.html" class="nav-link">Accordion</a>
                      <a href="elem-alerts.html" class="nav-link">Alerts</a>
                      <a href="elem-avatar.html" class="nav-link">Avatar</a>
                      <a href="elem-badge.html" class="nav-link">Badge</a>
                      <a href="elem-breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                      <a href="elem-buttons.html" class="nav-link">Buttons</a>
                      <a href="elem-cards.html" class="nav-link">Cards</a>
                      <a href="elem-carousel.html" class="nav-link">Carousel</a>
                    </nav>
                    <nav class="nav">
                      <a href="elem-collapse.html" class="nav-link">Collapse</a>
                      <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                      <a href="elem-icons.html" class="nav-link">Icons</a>
                      <a href="elem-images.html" class="nav-link">Images</a>
                      <a href="elem-list-group.html" class="nav-link">List Group</a>
                      <a href="elem-media-object.html" class="nav-link">Media Object</a>
                      <a href="elem-modals.html" class="nav-link">Modals</a>
                      <a href="elem-navigation.html" class="nav-link">Navigation</a>
                    </nav>
                    <nav class="nav">
                      <a href="elem-pagination.html" class="nav-link">Pagination</a>
                      <a href="elem-popover.html" class="nav-link">Popover</a>
                      <a href="elem-progress.html" class="nav-link">Progress</a>
                      <a href="elem-spinners.html" class="nav-link">Spinners</a>
                      <a href="elem-toast.html" class="nav-link">Toast</a>
                      <a href="elem-tooltip.html" class="nav-link">Tooltip</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Forms</span>
                      <a href="form-elements.html" class="nav-link">Form Elements</a>
                      <a href="form-layouts.html" class="nav-link">Form Layouts</a>
                      <a href="form-validation.html" class="nav-link">Form Validation</a>
                      <a href="form-wizards.html" class="nav-link">Form Wizards</a>
                      <a href="form-editor.html" class="nav-link">WYSIWYG Editor</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Charts</span>
                      <a href="chart-morris.html" class="nav-link">Morris Charts</a>
                      <a href="chart-flot.html" class="nav-link">Flot Charts</a>
                      <a href="chart-chartjs.html" class="nav-link">ChartJS</a>
                      <a href="chart-sparkline.html" class="nav-link">Sparkline</a>
                      <a href="chart-peity.html" class="nav-link">Peity</a>
                    </nav>
                  </div>
                  <div>
                    <nav class="nav">
                      <span>Maps</span>
                      <a href="map-google.html" class="nav-link">Google Maps</a>
                      <a href="map-leaflet.html" class="nav-link">Leaflet</a>
                      <a href="map-vector.html" class="nav-link">Vector Maps</a>
                      <span>Tables</span>
                      <a href="table-basic.html" class="nav-link">Basic Tables</a>
                      <a href="table-data.html" class="nav-link">Data Tables</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i> Utilities</a>
              <nav class="az-menu-sub">
                <a href="util-background.html" class="nav-link">Background</a>
                <a href="util-border.html" class="nav-link">Border</a>
                <a href="util-display.html" class="nav-link">Display</a>
                <a href="util-flex.html" class="nav-link">Flex</a>
                <a href="util-height.html" class="nav-link">Height</a>
                <a href="util-margin.html" class="nav-link">Margin</a>
                <a href="util-padding.html" class="nav-link">Padding</a>
                <a href="util-position.html" class="nav-link">Position</a>
                <a href="util-typography.html" class="nav-link">Typography</a>
                <a href="util-width.html" class="nav-link">Width</a>
                <a href="util-extras.html" class="nav-link">Extras</a>
              </nav>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
          <div class="az-header-message">
            <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
          </div><!-- az-header-message -->
          <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="https://via.placeholder.com/500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="https://via.placeholder.com/500" alt="">
                </div><!-- az-img-user -->
                <h6>Aziana Pechon</h6>
                <span>Premium Member</span>
              </div><!-- az-header-profile -->

              <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
              <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content pd-y-20">
      <div class="container">
        <div class="az-content-body">

          <h2 class="az-content-title-minimal">Hi, welcome back!</h2>
          <p class="az-content-text-minimal">Your cryptocurrency monitoring and performance dashboard template.</p>


        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container pd-t-0-f ht-100p">
        <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        <span>Designed by: ThemePixels</span>
      </div><!-- container -->
    </div><!-- az-footer -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

    <script src="../js/azia.js"></script>

  </body>
</html>

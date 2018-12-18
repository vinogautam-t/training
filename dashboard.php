<?php
include 'dp.php';
include 'header.php'
?>
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <h5>Projects</h5>
                                <p class="paragraph-agileits-w3layouts text-white">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>340
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
                                <h5>Clients</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>250
                                    <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <h5>Tasks</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>232
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                            <div class="s-l">
                                <h5>Employees</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>190
                                    <i class="fas fa-users"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
                        <div id="chartdiv"></div>
                    </div>
                    <!--// Pie-chart -->
                </div>
            </div>
            <!-- Simple-chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Graph</h4>
                <div id="Hybridgraph" class="simple-chart1">
                </div>
            </div>
            <!--// Simple-chart -->

            <!--// Bar-Chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
                <div id="chart-1"></div>
            </div>
            <!--// Bar-Chart -->

            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Calender -->
                    <div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
                        <div class="multi-select-calender"></div>
                        <div class="box"></div>
                    </div>
                    <!--// Calender -->
                    <!-- Profile -->
                    <div class="outer-w3-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                        <div class="header">
                            <div class="text">
                                <img src="images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                                <h2>Matthew Scott</h2>
                                <a href="mailto:info@example.com">
                                    <p>@Lorem ipsum</p>
                                </a>
                            </div>
                        </div>
                        <div class="container-flud">
                            <div class="followers row">
                                <div class="f-left col">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                    </a>
                                </div>
                                <div class="f-left col border-left border-right">
                                    <a href="#">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="f-left col">
                                    <a href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="prof-widgt-content">
                            <li class="menu">
                                <ul>
                                    <li class="button">
                                        <a href="#">
                                            <i class="fas fa-envelope"></i> Messages
                                            <span>13</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="#">Inbox
                                                    <span class="float-right">[09]</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Outbox
                                                    <span class="float-right">[01]</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Sent messages
                                                    <span class="float-right">[03]</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu">
                                <ul>
                                    <li class="button">
                                        <a href="#">
                                            <i class="fas fa-user"></i> Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="#">Change your pic</a>
                                            </li>
                                            <li>
                                                <a href="#">Change your username</a>
                                            </li>
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact me</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--// Profile -->
                    <!-- Browser stats -->
                    <div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Browser Stats</h4>
                        <div class="stats-info stats-body">
                            <ul class="list-unstyled">
                                <li class="pb-3">GoogleChrome
                                    <span class="float-right">85%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar green" style="width:85%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Firefox
                                    <span class="float-right">35%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar yellow" style="width:35%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Internet Explorer
                                    <span class="float-right">78%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar red" style="width:78%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Safari
                                    <span class="float-right">50%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar blue" style="width:50%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Opera
                                    <span class="float-right">80%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar light-blue" style="width:80%;"></div>
                                    </div>
                                </li>
                                <li class="last py-md-4 py-3">Others
                                    <span class="float-right">60%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar orange" style="width:60%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--// Browser stats -->
                </div>
            </div>
            <!--// Three-grids -->
            <!-- Countdown -->
            <div class="outer-w3-agile mt-3 outer-w3-agile-bg">
                <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
                <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
            </div>
            <!--// Countdown -->
            <?php include 'footer.php';?>
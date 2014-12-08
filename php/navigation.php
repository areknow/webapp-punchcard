        <div id="mobile-nav">
            <div class="row" onclick="location.href='../home';"><i class="fa fa-home"></i> Home</div>
            <div class="row" onclick="location.href='../about';"><i class="fa fa-clock-o"></i> About</div>
            <div class="row" onclick="location.href='../about';"><i class="fa fa-user"></i> Profile</div>
            <div class="row" onclick="location.href='../help';"><i class="fa fa-question"></i> Help</div>
            <div class="row" onclick="location.href='../php/logout.php';"><i class="fa fa-sign-out"></i> Logout</div>
        </div>
        <div id="nav">
            <div class="block left" onclick="location.href='../home';">
                <i class="fa fa-spin fa-circle-o-notch"></i> PunchCard
            </div>
            <div class="right">
                <div id="btn-main-menu" class="block">
                    <div><?PHP echo $_SESSION['fullname'] ?> <i class="fa fa-bars"></i></div>
                </div>
            </div>
        </div>
        <div class="hidden-menu">
            <div class="rowa" onclick="location.href='../home';"><i class="fa fa-home"></i>Home</div>
            <div class="rowa" onclick="location.href='../about';"><i class="fa fa-clock-o"></i>About</div>
            <div class="rowa" onclick="location.href='../profile';"><i class="fa fa-user"></i>Profile</div>
            <div class="rowa" onclick="location.href='../help';"><i class="fa fa-question-circle"></i>Help</div>
            <div class="rowa" onclick="location.href='../php/logout.php';"><i class="fa fa-sign-out"></i>Logout</div>
        </div>
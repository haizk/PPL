<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Fobia</h4>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>



        {{-- <li class="menu-label">Pages</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
                <div class="menu-title">Authentication</div>
            </a>
            <ul>
                <li> <a href="authentication-sign-in-basic.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Sign In Basic
                    </a>
                </li>
                <li> <a href="authentication-sign-in-cover.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Sign In Cover
                    </a>
                </li>
                <li> <a href="authentication-sign-in-simple.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Sign In Simple
                    </a>
                </li>
                <li> <a href="authentication-sign-up-basic.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Sign Up Basic
                    </a>
                </li>
                <li> <a href="authentication-sign-up-cover.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Sign Up Cover
                    </a>
                </li>
                <li> <a href="authentication-sign-up-simple.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Sign Up Simple
                    </a>
                </li>
                <li> <a href="authentication-reset-password-basic.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Reset Password Basic
                    </a>
                </li>
                <li> <a href="authentication-reset-password-cover.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Reset Password Cover
                    </a>
                </li>
                <li> <a href="authentication-reset-password-simple.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Reset Password Simple
                    </a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="{{ route('dashboard.upload') }}">
                <div class="parent-icon">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
                <div class="menu-title">Upload Video</div>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.history') }}">
                <div class="parent-icon">
                    <ion-icon name="create-outline"></ion-icon>
                </div>
                <div class="menu-title">List</div>
            </a>
        </li>
        <li>
            <a href="{{ route('tabel') }}">
                <div class="parent-icon">
                    <ion-icon name="receipt-outline"></ion-icon>
                </div>
                <div class="menu-title">Tabel</div>
            </a>
        </li>


    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->

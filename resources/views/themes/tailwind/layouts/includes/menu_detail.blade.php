<header style="height:0px;margin-bottom:50px;">
    <nav class="tapply-container">          
        <a class="tapply-logo" href="#">          
            <img src="{{ asset('themes/' . $theme->folder . '/img/home/logo_header2.png') }}" alt="">
        </a>
        <aside>
            <button class="btn-outline-white d-mobie toogle-menu-mobie">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                </svg>
            </button>
            <!-- thêm class mobi-on khi ở dt để mở navbar-->
            <!-- <div class="links mobie-on ">  -->
            <div class="links"> 
                <button class="btn-outline-black toogle-menu-mobie">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
                        </svg>
                </button>
                <ul class="tapply-navbar-collapse tapply-detai-menu">
                    <li class="nav-item">    
                        <a href="{{ route('wave.home') }}" class="nav-link">
                            TRANG CHỦ
                        </a>
                    </li>
                    <li class="nav-item">    
                        <a href="https://www.tapply.vn/huong-dan" class="nav-link">
                            HƯỚNG DẪN
                        </a>
                    </li>
                    <li class="nav-item">   
                        <a href="#" class="nav-link">
                            ĐĂNG KÝ MỞ THẺ
                        </a>
                    </li>
                    <li class="nav-item">    
                        <a href="#" class="nav-link">
                            LIÊN HỆ
                        </a>
                    </li>
                </ul>
                <button class="btn-outline-black btn-outline-black-detail">
                    Đăng nhập 
                </button>
                <button class="toggle-cart btn-outline-black btn-outline-black-detail">
                    <svg style="fill:#000000;" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.96 22"> <title>Cart</title> <g data-name="Layer 2"> <g data-name="Layer 1"> <path d="M22.7,8l-3,13H4.3l-3-13H22.7M24,7H0L3.51,22H20.45L24,7Z"></path> <rect x="11.48" width="1" height="7"></rect> </g> </g></svg>
                    <sub class="amount" style="height: 20px;">{{ \Cart::session('cart')->getContent()->count() }}</sub>
                </button>
            </div>                
        </aside>
    </nav>
</header>
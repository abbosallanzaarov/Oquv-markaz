<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href=""><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item active ">
                <a href="" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item  p-2 px-3">
                    <a href="{{route('kurs.index')}}">
                    <i class="bi bi-ui-checks"></i>
                    <span>Kurslar</span>
                </a>
            </li>
            <li class="sidebar-item  p-2 px-3">
                    <a href="{{route('mentor.index')}}">
                    <i class="bi bi-trophy"></i>
                    <span>Mentorlar Xaqida To'liq</span>
                </a>
            </li>
            <li class="sidebar-item p-2 px-3">
                    <a href="{{route('pers.index')}}">
                    <i class="bi bi-card-list"></i>
                    <span>O'quvchilar</span>
                </a>
            </li>
            
            <li class="sidebar-item p-2 px-3">
                <a href="">
                    <i class="bi bi-headset"></i>
                    <span>Hodimlar</span>
                </a>
            </li>
            <li class="sidebar-item p-2 px-3">
                <a href="{{route('kassa.index')}}">
                    <i class="bi bi-calculator-fill "></i>
                    <span>Kassirlar</span>
                </a>
            </li>
            <li class="sidebar-item p-2 px-3">
                <a href="{{ route('admin.email.index') }}">
                    <i class="bi bi-envelope "></i>
                    <span>Email sms</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading">
              
            </div>
                
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script>
    <script>
        // let sidebarItem = document.querySelectorAll('.sidebar-item');
        
        // function hideSidebarActive(){
        //     sidebarItem.forEach(item => {
        //         item.classList.remove('active')
        //     })
        // }
        
        function showSidebarActive(i = 3){
            sidebarItem[i].classList.add('active')
        }
        // hideSidebarActive()
        showSidebarActive()
        
        // sidebarItem.forEach((item,index) => {
        //     item.addEventListener('click', (e) => {
        //         console.log(e.target)
        //         // if(e.target === item){
        //         //     // hideSidebarActive()
        //         //     // showSidebarActive(index)
        //         //     console.log(e.target)
        //         // }
        //     })
        // })

    </script>
</body>

</html>



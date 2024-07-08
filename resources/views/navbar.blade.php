<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdn links -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.min.css"> -->
    <!-- fontawosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- boostrap  -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" > -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script> -->
    <!-- cdn end -->
    <title></title>    
    <style>
        :root {
            --primary-color: #D20062;
            --secondary-color: #e068a017;
;            
        }
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
        }

        .sidebar {
          position: fixed;
          top: 0;
          left: 0;
          height: 100%;
          width: 78px;
/*          background: #38419D;*/
          background: var(--primary-color);
          padding: 6px 14px;
          transition: all 0.5s ease;
        }

        .sidebar.active {
          width: 280px;
        }
        .sidebar .logo_content .logo {
          color: #ffffff;
          display: flex;
          height: 50px;
          width: 100%;
          align-items: center;
          opacity: 0;
          pointer-events: none;
          transition: all 0.5s ease;
        }

        .sidebar.active .logo_content .logo {
          opacity: 1;
          pointer-events: none;
        }

        .logo_content i {
          font-size: 28px;
          margin-right: 5px;
        }

        .logo_content .logo_name {
          font-size: 20px;
          font-weight: 400;
        }

        .sidebar #btn {
          position: absolute;
          color: #ffffff;
          left: 50%;
          top: 6px;
          font-size: 20px;
          height: 50px;
          width: 50px;
          text-align: center;
          line-height: 50px;
          transform: translateX(-50%);
        }

        .sidebar.active #btn {
          left: 90%;
        }

        .sidebar ul {
          margin-top: 20px;
        }

        .sidebar ul li {
          position: relative;
          height: 50px;
          width: 100%;
          margin: 0 5px;
          list-style: none;
          line-height: 50px;
        }

        .sidebar ul li .tooltip {
          position: absolute;
          left: 122px;
          top: 0;
          transform: translate(-50%, -50%);
          border-radius: 6px;
          height: 35px;
          width: 122px;
          background: #ffffff;
          line-height: 35px;
          text-align: center;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          transition: 0s;
          opacity: 0;
          pointer-events: none;
          display: block;
        }

        .sidebar.active ul li .tooltip {
          display: none;
        }

        .sidebar ul li:hover .tooltip {
          transition: all 0.5s ease;
          opacity: 1;
          top: 50%;
        }

        .sidebar ul li input {
          position: absolute;
          height: 100%;
          width: 100%;
          left: 0;
          top: 0;
          border-radius: 12px;
          outline: none;
          border: none;
          background: #1d1b31;
          padding-left: 50px;
          font-size: 18px;
          color: #ffffff;
        }

        .sidebar ul li .bx-search {
          position: absolute;
          z-index: 99;
          color: #ffffff;
          font-size: 22px;
          transition: all 0.5s ease;
        }

        .sidebar ul li .bx-search:hover {
          background: #ffffff;
          color: #1d1b31;
        }

        .sidebar ul li a {
          color: #ffffff;
          display: flex;
          align-items: center;
          text-decoration: none;
          transition: all 0.4s ease;
          border-radius: 12px;
          white-space: nowrap;
        }

        .sidebar ul li a:hover {
          color: #11101d;
          background: #ffffff;
        }

        .sidebar ul li i {
          height: 50px;
          min-width: 50px;
          border-radius: 12px;
          line-height: 50px;
          text-align: center;
        }

        .sidebar .links_name {
          opacity: 0;
          pointer-events: none;
          transition: all 0.5s ease;
        }

        .sidebar.active .links_name {
          opacity: 1;
          pointer-events: auto;
        }

        .sidebar .profile_content {
          position: absolute;
          color: #ffffff;
          bottom: 0;
          left: 0;
          width: 100%;
        }

        .sidebar .profile_content .profile {
          position: relative;
          padding: 10px 6px;
          height: 60px;
          background: none;
          transition: all 0.4s ease;
        }

        .sidebar.active .profile_content .profile {
          background: #1d1b31;
        }

        .sidebar .profile_content .profile .profile_details {
          display: flex;
          align-items: center;
          opacity: 0;
          pointer-events: none;
          white-space: nowrap;
        }

        .sidebar.active .profile_content .profile .profile_details {
          opacity: 1;
          pointer-events: auto;
        }

        .sidebar .profile_content .profile .profile_details img {
          height: 45px;
          width: 45px;
          object-fit: cover;
          border-radius: 12px;
        }

        .sidebar .profile_content .profile .profile_details .name_job {
          margin-left: 10px;
        }

        .sidebar .profile_content .profile .profile_details .name {
          font-size: 15px;
          font-weight: 400;
        }

        .sidebar .profile_content .profile .profile_details .job {
          font-size: 12px;
        }

        .sidebar .profile_content .profile #log_out {
          position: absolute;
          left: 50%;
          bottom: 5px;
          transform: translateX(-50%);
          min-width: 50px;
          line-height: 50px;
          font-size: 20px;
          border-radius: 12px;
          text-align: center;
          transition: all 0.4s ease;
          background: #1d1b31;
        }

        .sidebar.active .profile_content .profile #log_out {
          left: 88%;
          background: none;
        }

        .home_content {
          display:flex;
          justify-content:space-between;
          position: absolute;
          height: 10%;
          width: calc(100% - 78px);
          left: 78px;
          top:0;
        
          /* border-radius:10px; */
          transition: all 0.5s ease;
          background-color:white;
          box-shadow: 0px 0px 3px gray
         
        }

        .home_content .text {
          display:flex;
          align-items:center;
          font-size: 18px;
          font-weight: 500;
          color:var(--primary-color);
          padding:0px 20px
          
        }

        .sidebar.active ~ .home_content {
          width: calc(100% - 280px);
          left: 280px;
        }
        .nav-link {
          display:flex;
          align-items: center;
          gap:10px;
          padding:0 10px;
      
        
        }
        .home {
         
          position: absolute;
          height: 100%;
          width: calc(100% - 78px);
          left: 78px;
          margin-top:100px;
          padding-left:15px;
          transition: all 0.5s ease;         
        }
        .header{
            width: 100%;
        text-align: left;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 20px;
/*        color: #38419D;*/
        color: var(--primary-color);
        border-bottom:1px solid var(--primary-color);
        /* box-shadow: 0px 0px 3px gray; */
        padding:10px;
        }

        .home .text {
          font-size: 15px;
          /* font-weight: 500; */
          color: #fff;
          
        }

        .sidebar.active ~ .home {
          width: calc(100% - 280px);
          left: 280px;
        }
        i.fa{
            font-size: 20px;
            padding: 5px;
        }
        /* Reset default browser styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        /*    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
            box-shadow: 0px 1px 3px gray;
            border-radius: 7px;
        }

        .title {
            text-align: center;
            color: #5e2a9b;
        }

         table {
            width: 100%;
            border-collapse: collapse;
            max-width: 100%;
        }

         th,  td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: var(--secondary-color);
;
            color: var(--primary-color);
            font-size:13px;
        }

         td button {
        /*    background-color: #38419D;*/
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

         td button:hover {
            background-color: var(--secondary-color);
        }      
    </style>
</head>
<body>   
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class="bx bxl-c-plus-plus"></i>
                    <div class="logo_name">LSC</div>
            </div>
        </div>

        <i class="bx bx-menu" id="btn"></i>
        <ul class="nav_list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
                </a>
                    <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                <i class="bx bx-user"></i>
                <span class="links_name">User</span>
                </a>
                    <span class="tooltip">User</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Messages</span>
                </a>
                        <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Analytics</span>
                </a>
                    <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-folder"></i>
                    <span class="links_name">File Manager</span>
                </a>
                    <span class="tooltip">File Manager</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart-alt"></i>
                    <span class="links_name">Order</span>
                </a>
                    <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-heart"></i>
                    <span class="links_name">Saved</span>
                </a>
                    <span class="tooltip">Saved</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Setting</span>
                </a>
                    <span class="tooltip">Setting</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="" alt="">
                        <div class="name_job">
                            <div class="name">Serif Sadi Senkule</div>
                            <div class="job">Software Developer</div>
                        </div>
                </div>
                    <i class="bx bx-log-out" id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">Job Recruitment Opportunity</div>
         <div class="nav-link">
          <div><i class="fa-solid fa-user"></i></div>
          <!-- <div><i class="fa-solid fa-user"></i></div>
          <div>home</div> -->
         </div>
    </div>
    <div class="home">

    </div>

    
    @yield('content')
</body>
</html>
<script type="text/javascript">
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = () => {
      sidebar.classList.toggle('active');
    };

    searchBtn.onclick = () => {
      sidebar.classList.toggle('active');
    };

</script>

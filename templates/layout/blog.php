<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Koulen&family=Roboto+Slab&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap');

        * {
            font-family: 'Battambang', cursive;
            font-family: 'Exo 2', sans-serif;
        }

        :root {
            --blue-color: #09316f;
            --blueold-color: #123174;
            --white-color: #fff;
            --pink-color: #FA5480;


        }

        a,
        a:hover {
            text-decoration: none !important;
        }

        ul {
            list-style-type: none;
            padding: 0px;
            margin: 0px;
        }

        header {
            position: sticky;
            top: 0px;
            z-index: 100;
        }

        .header-top {
            background-color: var(--blue-color);
        }

        header .social img,
        header .search img {
            width: 40px;
            padding: 1px;
        }

        header .container {
            display: flex;
            justify-content: space-between;
        }

        header .search .fa-magnifying-glass {
            color: var(--white-color);
            font-size: 14px;
            padding: 11px;

        }

        header .header-bottom {
            background-color: var(--white-color);
        }

        header .header-bottom .logo img {
            padding: 5px 0px;
        }

        header .header-bottom .menu {
            display: flex;
            align-items: center;

        }

        header .header-bottom .menu li a {
            display: block;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            font-size: 20px;
            color: var(--blueold-color);
        }

        header .header-bottom .menu li:first-child {
            border-bottom: 1px solid var(--blueold-color);
        }

        .home .slide img {
            width: 100%;
        }

        /* content news */
        section {
            margin-bottom: 30px;
        }

        .home .news .top-wrap {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }

        .home .news .top-wrap .main-title {
            color: var(--pink-color);
            font-weight: bold;
            font-size: 'Battambang';
            border-bottom: 2px solid var(--pink-color);
            transition: all 0.3s;
        }

        .home .news .top-wrap a {
            background-color: var(--blue-color);
            color: var(--white-color);
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 3px var(--blueold-color);
        }

        .home .news .top-wrap a:hover {
            background-color: var(--pink-color);
        }

        .home .news .bottom-wrap .detail {
            background-color: burlywood;
        }

        .home .news .bottom-wrap .detail .title,
        .desc {
            /* padding: 4px; */
            color: var(--blue-color);
            font-family: 'Battambang';
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* number of lines to show */
            -webkit-box-orient: vertical;
        }

        .home .news .bottom-wrap .detail .date {
            color: red;
            margin: 0px 5px;
            font-weight: bold;
            font-family: 'Battambang';
        }

        .home .news .bottom-wrap .thumbnail {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .home .news .bottom-wrap .thumbnail .fa-youtube {
            position: absolute;
            font-size: 40px;
        }

        footer {
            background-color: var(--blue-color);
            padding: 15px 0px;
        }

        footer .logo img {
            border-radius: 50%;
        }

        footer .main-title {
            color: var(--pink-color);
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        footer .menu li a {
            font-size: 20px;
            color: var(--white-color);
            line-height: 43px;
            ;
        }

        footer .footer-title {
            color: var(--white-color);
            font-family: 'Battambang';
        }

        footer .follow-us a {
            padding: 1px;
        }

        footer .follow-us a img {
            width: 40px;
            border-radius: 100%;
            border: 3px solid var(--pink-color);
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: red;
            font-size: 'Battambang';
            color: var(--white-color);
        }

        figure img {
            width: 100%;

        }

        .sm-menu {
            display: none !important;

        }

        .left-menu {

            width: 250px;
            height: 100%;
            position: fixed;
            top: 25px;
            right: -260px;
            background-color: var(--blueold-color);
            z-index: 10000;
            transition: all 0.5s;
        }

        .left-menu .menu ul li {
            width: 100%;
            float: left;
        }

        .left-menu .menu ul li a {
            color: var(--white-color);
            display: block;
            font-weight: bold;
            padding: 10px;
            line-height: 40px;
            border-bottom: 1px solid blue;
        }

        .left-menu .menu ul li a:hover {
            background-color: #FA5480;
        }

        .popup {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.361);
            position: fixed;
            top: 0px;
            cursor: pointer;
            left: 0px;
        }

        /*responsive code*/
        /*mobile phone*/
        @media (max-width: 575px) {
            header {
                display: none !important;
            }

            .sm-menu {
                display: block !important;
                background-color: var(--blue-color);
            }

            .sm-menu .logo {
                display: flex;
                align-items: center;
            }

            .sm-menu .logo img {
                width: 56px;
            }

            .sm-menu .bars {
                padding-top: 5px;
                color: white;
            }

            .sm-menu .bars h4 {
                color: white;
                cursor: pointer;
            }

            figure img {
                width: 100%;
            }

            .home .news .col-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .home .news .col-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            footer .logo {
                display: flex;
                justify-content: center;
            }

            footer .col-3 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 12px;
            }

            footer .main-title {
                text-align: center;
            }

            footer .menu {
                text-align: center;
            }

            footer .follow-us {
                text-align: center;
            }

        }


        /*ipad*/
        @media (min-width: 768px) and (max-width: 991px) {
            figure img {
                width: 100%;
            }

            .home .news .col-3 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /*ipad pro*/
        @media (min-width: 992px) and (max-width: 1199px) {
            figure img {
                width: 100%;
            }

            .home .news .col-3 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .home .news .col-3:last-child {
                display: none;
            }
        }

        /*laptop*/
        @media (min-width: 1200px) {}
    </style>
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="social">
                    <a href="#">
                        
                        <img src="facebook-logo.png" alt="">
                    </a>
                    <a href="#">
                        <img src="instagram.png" alt="">
                    </a>
                    <a href="#">
                        <img src="youtube.png" alt="">
                    </a>
                </div>
                <div class="search">
                    <a href="#">
                        <img src="cambodia.png" alt="">
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="logo">
                    <a href="">
                        <img src="https://via.placeholder.com/170x80" alt="">
                    </a>
                </div>
                <ul class="menu">
                    <li><a href="#" class="border-bottom">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">PROMOTION</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- small-menu -->
    <header class="sm-menu">
        <div class="container-fluid">
            <div class="container">
                <div class="logo">
                    <a href="">
                        <img src="https://via.placeholder.com/100x40" alt="">
                    </a>
                </div>
                <div class="bars">
                    <h4 class="show-menu"><i class="fa-solid fa-bars"></i></h4>
                </div>
            </div>
    </header>
    <div class="left-menu">
        <div class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">PROMOTION</a></li>
            </ul>
        </div>
    </div>

    </div>
    <!-- slide-image -->
    <div class="main home">
        <section>
            <div class="slide">
                <div>
                    <img src="https://via.placeholder.com/1900x500" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="content news">
                <div class="container">
                    <div class="top-wrap">
                        <h4 class="main-title">
                            SPORT NEWS
                        </h4>

                        <a href="#">
                            VIEW MORE &nbsp;<i class="fa-solid fa-circle-arrow-right"></i>
                        </a>
                    </div>
                    <div class="bottom-wrap">
                        <div class="row">
                            <div class="col-3">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/255x200" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/255x200" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/255x200" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/255x200" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="content news">
                <div class="container">
                    <div class="top-wrap">
                        <h4 class="main-title">
                            VIDEO
                        </h4>

                        <a href="#">
                            VIEW MORE &nbsp;<i class="fa-solid fa-circle-arrow-right"></i>
                        </a>
                    </div>
                    <div class="bottom-wrap">
                        <div class="row">
                            <div class="col-3">
                                <figure>

                                    <a href="https://www.youtube.com/watch?v=axyu-2HP-20" data-fancybox="gallery">
                                        <div class="thumbnail">
                                            <i class="fa-brands fa-youtube"></i>
                                            <img src="https://via.placeholder.com/255x200" alt="">
                                        </div>

                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <a href="https://www.youtube.com/watch?v=xmJaCEf3T2c&t=343s" data-fancybox="gallery">
                                        <div class="thumbnail">
                                            <i class="fa-brands fa-youtube"></i>
                                            <img src="https://via.placeholder.com/255x200" alt="">
                                        </div>

                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <a href="https://www.youtube.com/watch?v=NBcp0Z-acSQ" data-fancybox="gallery">
                                        <div class="thumbnail">
                                            <i class="fa-brands fa-youtube"></i>
                                            <img src="https://via.placeholder.com/255x200" alt="">
                                        </div>

                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <a href="https://www.youtube.com/watch?v=axyu-2HP-20" data-fancybox="gallery">
                                        <div class="thumbnail">
                                            <i class="fa-brands fa-youtube"></i>
                                            <img src="https://via.placeholder.com/255x200" alt="">
                                        </div>

                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="content news">
                <div class="container">
                    <div class="top-wrap">
                        <h4 class="main-title">
                            ព្រឹត្តិការណ៍ និង ព័ត៍មាន
                        </h4>

                        <a href="#">
                            VIEW MORE &nbsp;<i class="fa-solid fa-circle-arrow-right"></i>
                        </a>
                    </div>
                    <div class="bottom-wrap">
                        <div class="row">

                            <div class="col-4">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/350x250" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/350x250" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <a href="">
                                        <img src="https://via.placeholder.com/350x250" alt="">
                                    </a>
                                    <div class="detail">
                                        <h5 class="title">
                                            បាល់ទាត់​ថៃ​ឲ្យ​តែ​បាន​មេដាយ​មាស កីឡាករ​ម្នាក់​ៗ​នឹង​បាន​ប្រាក់​រង្វាន់​​ជាង​៨​ពាន់​ដុល្លារ
                                        </h5>
                                        <div class="border-bottom"></div>
                                        <div class="date">
                                            <i class="fa-solid fa-calendar-days"></i> 05-May-2022
                                        </div>
                                        <div class="border-bottom"></div>
                                        <div class="desc">
                                            ​​យោង​តាម​ក្រសួង​ទេសចរណ៍​និង​កីឡាករ​របស់​ថៃ​បាន​ប្រកាស​ថា កីឡាករ-កីឡាការិនី​​​​បាល់ទាត់​និង​ហ្វូតសាលរបស់​ថៃ​ម្នាក់​ៗ​នឹង​ទទួល​បាន​ប្រាក់​រង្វាន់​ជា​មធ្យម​៣​​សែន​បាត (៨ ៦៦០​ដុល្លារ) ប្រសិន​បើ​ពួក​គេ​ដណ្ដើម​បាន​មេដាយ​មាស​នៅ​ស៊ីហ្គេម។ សរុប​កីឡាករ​និង​កីឡា​ការិនី​បាល់ទាត់​និង​ហ្វូតសាល​​របស់​ថៃ​ដែល​ចូលរួម​ព្រឹត្តិការណ៍​ខាង​លើ​មាន​៧២​នាក់។
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <a href="">
                            <img src="https://via.placeholder.com/150x150" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="main-title">
                        QUIK LINK
                    </div>
                    <ul class="menu">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">PROMOTION</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="main-title">
                        ABOUT US
                    </div>
                    <div class="footer-title">
                        យើង និងដៃគូរបស់យើងប្រើឃុកគី ឬបច្ចេកវិទ្យាប្រហាក់ប្រហែល ដើម្បីចូលមើល និងស្តុកទិន្នន័យ ដែលមិនមានលក្ខណៈសម្ងាត់ឯកជន ដូចជា អាស័យដ្ឋាន IP ជាដើម។
                        ទិន្នន័យរបស់លោកអ្នកនឹងត្រូវប្រើក្នុងគោលដៅកែលម្អឲ្យកាន់តែប្រសើរឡើងនូវដំណើរការវេបសាយរបស់យើង វាស់វែងអ្នកចូលមើល ដំណើរការផ្សេងៗទាក់ទងនឹងបណ្តាញសង្គម ឬការដាក់បង្ហាញការផ្សព្វផ្សាយពាណិជ្ជកម្មដែលតម្រូវទៅតាមអ្នកមើល ។
                    </div>
                </div>
                <div class="col-3">
                    <div class="main-title">
                        FOLLOW US
                    </div>
                    <div class="follow-us">
                        <a href="">
                            <img src="facebook-logo.png" alt="">
                        </a>
                        <a href="">
                            <img src="instagram.png" alt="">
                        </a>
                        <a href="">
                            <img src="telegram.png" alt="">
                        </a>
                        <a href="">
                            <img src="youtube.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        &copy; Easy Math Cambodia 2022. រក្សាសិទ្ធគ្រប់យ៉ាង.
    </div>
</body>
<script>
    $(document).ready(function() {
        var popup = '<div class="popup"></div>';
        $(".show-menu").click(function() {
            $(".left-menu").css({
                "right": "0px"
            });
            $("body").append(popup);
        });
        $("body").on("click", ".popup", function() {
            $(".left-menu").css({
                "right": "-260px"
            });
            $(this).remove();
        });
    });
</script>

</html>
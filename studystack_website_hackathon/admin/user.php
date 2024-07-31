<?php
include "../db_conn.php";
@include 'config.php';

session_start();

if(!isset($_SESSION['user-id'])){
    header('location:' . ROOT_URL .'/login_form.php');
    die();
 }
 if(!isset($_SESSION['user'])){
    header('location:' . ROOT_URL .'/login_form.php');
    die();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Staff | StudyStack</title>
    <link rel="stylesheet" type="text/css" href="../admin/user_style.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto+Slab:wght@300;400&display=swap"
        rel="stylesheet" />
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Welcome Back<span><?php echo $_SESSION['user_name']; ?>!</span></h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data..." /><span><i
                        class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </section>
        <section class="table__body">
            <a href="../logout.php" class="btn btn-dark mb-3 logout sticky">Logout</a>

            <table>
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Semester</th>
                        <th>Subject</th>
                        <th>Upload</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="Sr.no">1</td>
                        <td data-cell="Semester">Semester-1</td>
                        <td data-cell="Subject">Basic Mathematics (BMS-311302)</td>
                        <td data-cell="Upload Notes">
                            <br>
                            <a href="https://drive.google.com/drive/folders/1qmBypUc6RxiYerggGedP-FPrfgTDYQCk?usp=sharing"
                                class="btn btn-dark mb-3">Notes</a>
                            <a href="https://drive.google.com/drive/folders/1mRGuvAfpCc8ysvBw92x5mfkNbiF0_nvi?usp=sharing"
                                class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="https://drive.google.com/drive/folders/1ur5zcB8ZTRKTMrX1XFc1cFQ4cUrAtuyu?usp=sharing"
                                class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">2</td>
                        <td data-cell="sem">Semester-1</td>
                        <td data-cell="sub">Basic Science (BSC-311305)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="https://drive.google.com/drive/folders/1F6PiFN_MeSQdZkPM_58EWSmxtXcuh89V?usp=sharing"
                                class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">3</td>
                        <td data-cell="sem">Semester-1</td>
                        <td data-cell="sub">English (ENG-311303)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">4</td>
                        <td data-cell="sem">Semester-1</td>
                        <td data-cell="sub">Engineering Graphics (EPG-311008)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">5</td>
                        <td data-cell="sem">Semester-1</td>
                        <td data-cell="sub">Fundamentals of ICT (ICT-311001)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">6</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">PROGRAMMING IN C (PIC-312303)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">7</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">APPLIED MATHEMATICS (AMS-312301)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">8</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">BEE-EE (312302)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">9</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">BEE-EJ (312302)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>

                    <tr>
                        <td data-cell="Sr.no">10</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">LINUX BASICS (BLP-312001)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">11</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">WEB PAGE DESIGNING (WPD-312004)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">12</td>
                        <td data-cell="sem">Semester-2</td>
                        <td data-cell="sub">PROFESSIONAL COMMUNICATION (PCO-312002)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>

                    <tr>
                        <td data-cell="Sr.no">13</td>
                        <td data-cell="sem">Semester-3</td>
                        <td data-cell="sub">OBJECT ORIENTED PROGRAMMING USING C++ (OOP-22316)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">14</td>
                        <td data-cell="sem">Semester-3</td>
                        <td data-cell="sub">DIGITAL TECHNIQUES (DTE-22320)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">15</td>
                        <td data-cell="sem">Semester-3</td>
                        <td data-cell="sub">DATABASE MANAGEMENT SYSTEM (DBS-22319)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">16</td>
                        <td data-cell="sem">Semester-3</td>
                        <td data-cell="sub">COMPUTER GRAPHICS (CG-22318)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">17</td>
                        <td data-cell="sem">Semester-3</td>
                        <td data-cell="sub">DATA STRUCTURE USING ‘C’ (DSU-22317)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">18</td>
                        <td data-cell="sem">Semester-4</td>
                        <td data-cell="sub">Java Programming (JPR-22412)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">19</td>
                        <td data-cell="sem">Semester-4</td>
                        <td data-cell="sub">Software Engineering (SEN-22413)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">20</td>
                        <td data-cell="sem">Semester-4</td>
                        <td data-cell="sub">Data Communication and Computer Network (DCC-22414)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">21</td>
                        <td data-cell="sem">Semester-4</td>
                        <td data-cell="sub">Microprocessors (MIC-22415)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">22</td>
                        <td data-cell="sem">Semester-4</td>
                        <td data-cell="sub">Gui Application Development Using Vb.Net (GAD-22034)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>

                    <tr>
                        <td data-cell="Sr.no">23</td>
                        <td data-cell="sem">Semester-5</td>
                        <td data-cell="sub">Environmental Studies (EST-22447)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>

                    <tr>
                        <td data-cell="Sr.no">24</td>
                        <td data-cell="sem">Semester-5</td>
                        <td data-cell="sub">Operating Systems (OSY-22516)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">25</td>
                        <td data-cell="sem">Semester-5</td>
                        <td data-cell="sub">Advanced Java Programming (AJP-22517)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">26</td>
                        <td data-cell="sem">Semester-5</td>
                        <td data-cell="sub">Software Testing (STE-22518)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">27</td>
                        <td data-cell="sem">Semester-6</td>
                        <td data-cell="sub">Programming With Python (PWP-22616)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">28</td>
                        <td data-cell="sem">Semester-6</td>
                        <td data-cell="sub">Mobile Application Development (MAD-22617)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">29</td>
                        <td data-cell="sem">Semester-6</td>
                        <td data-cell="sub">Emerging Trends in Computer and Information Technolgy (ETI-22618)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="Sr.no">30</td>
                        <td data-cell="sem">Semester-6</td>
                        <td data-cell="sub">Management (MAN-22509)</td>
                        <td data-cell="Upload Notes">
                            <br>

                            <a href="../register_form.php" class="btn btn-dark mb-3">Notes</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">Ref. Books</a>
                            <a href="../register_form.php" class="btn btn-dark mb-3">PPTs</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="user-script.js"></script>
</body>

</html>
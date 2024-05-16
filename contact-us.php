<?php
require_once 'language.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <title><?= $langArr['Westcoast_Wildcats'] ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="icon" type="ico"  href="assets/images/favicon/favicon.ico">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body style="background-image: url(assets/images/bg-img.png);" class="inner-page">
    <header>
        <div class="container">
            <div class="hdr-main">
                <div class="hdr-logo">
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="hdr-rght">
                    <div class="htr-inner">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.php"><?= $langArr['Home'] ?></a>
                                </li>
                                <li>
                                    <a href="index.php#about"><?= $langArr['About'] ?></a>
                                </li>
                                <li>
                                    <a href="index.php#summer-camp"><?= $langArr['Summer_Camp'] ?></a>
                                </li>
                                <li>
                                    <a href="contact-us.php" class="active"><?= $langArr['Contact'] ?></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="close-menu">
                            <span></span>
                        </div>
                    </div>
                    <div class="hdr-btns">
                        <div class="language-main">
                            <span class="language-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99994 8.37931H11.4999M11.4999 8.37931H14.4999M11.4999 8.37931V7M16.9999 8.37931H14.4999M14.4999 8.37931C13.9724 10.2656 12.8678 12.0487 11.607 13.6158M11.607 13.6158C10.563 14.9134 9.41199 16.0628 8.3928 17M11.607 13.6158C10.9642 12.8621 10.0642 11.6426 9.80708 11.0909M11.607 13.6158L13.5356 15.6207" stroke="#ED390A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.49994 12C2.49994 7.52166 2.49994 5.28249 3.89118 3.89124C5.28243 2.5 7.5216 2.5 11.9999 2.5C16.4782 2.5 18.7174 2.5 20.1087 3.89124C21.4999 5.28249 21.4999 7.52166 21.4999 12C21.4999 16.4783 21.4999 18.7175 20.1087 20.1088C18.7174 21.5 16.4782 21.5 11.9999 21.5C7.5216 21.5 5.28243 21.5 3.89118 20.1088C2.49994 18.7175 2.49994 16.4783 2.49994 12Z" stroke="#ED390A" stroke-width="1.5" />
                                </svg>
                            </span>
                            <div class="select-box">
                                <select onchange="languageChanged()" id="languageSelect" class="selectpicker select2">
                                    <option value="en" <?= ($lang == 'en') ? 'selected' : '' ?>>English</option>
                                    <option value="sv" <?= ($lang == 'sv') ? 'selected' : '' ?>>Swedish</option>
                                </select>
                            </div>
                        </div>
                        <div class="menu-icon">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </header>
    <main>
        <section class="contact-section">
            <div class="container">
                <form method="POST" id="enquiry_form" action="mail.php">
                    <div class="top-heading">
                        <h3><?= $langArr['Contact1'] ?> <span><?= $langArr['Us'] ?></span></h3>
                    </div>
                    <div class="width-800">
                        <div class="from-main">
                            <div class="form-flex">
                                <div class="frm-inner-flx-50">
                                    <div class="singel-input">
                                        <label for="first-name"><?= $langArr['First_Name'] ?>*</label>
                                        <input type="text" name="first_name" placeholder="<?= $langArr['Enter_Your_First_Name'] ?>" required>
                                    </div>
                                </div>
                                <div class="frm-inner-flx-50">
                                    <div class="singel-input">
                                        <label for="last-name"><?= $langArr['Last_Name'] ?>*</label>
                                        <input type="text" name="last_name" placeholder="<?= $langArr['Enter_Your_Last_Name'] ?>" required>
                                    </div>
                                </div>
                                <div class="frm-inner-flx-100">
                                    <div class="singel-input">
                                        <label for="email"><?= $langArr['Email'] ?>*</label>
                                        <input type="email" name="email" placeholder="<?= $langArr['Enter_Your_Email_Id'] ?>" required>
                                    </div>
                                </div>
                                <div class="frm-inner-flx-100">
                                    <div class="singel-input">
                                        <label for="message"><?= $langArr['What_Is_Your_Question'] ?></label>
                                        <textarea name="message" cols="10" rows="4" placeholder="<?= $langArr['Tell_Us'] ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" id="send_btn" class="btn primary-btn"><?= $langArr['Submit_Form'] ?></button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="ftr-top">
            <div class="container">
                <div class="ftr-flex">
                    <div class="ftr-flex-inner">
                        <div class="ftr-logo">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="ftr-flex-inner">
                        <div class="ftrmenu-main">
                            <div class="ftrmenu-inner">
                                <div class="ftrmenu-link">
                                    <ul>
                                        <li><a href="index.php"><?= $langArr['Home'] ?></a></li>
                                        <li><a href="registration.php"><?= $langArr['Join_Our_Club'] ?></a></li>
                                        <li><a href="index.php#summer-camp"><?= $langArr['Summer_Camp'] ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ftrmenu-inner">
                                <h3><?= $langArr['Contact_Us'] ?></h3>
                                <div class="ftr-adress">
                                    <p><?= $langArr['Head_Quarters'] ?> Västra Frölunda</p>
                                    <p>info@wildcatsbasket.se</p>
                                </div>
                            </div>
                            <div class="ftrmenu-inner">
                                <h3><?= $langArr['Follow_Us'] ?></h3>
                                <div class="social-links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                                Instagram
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                Twitter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                LinkedIn
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ftr-btm">
            <div class="container">
                <div class="copyrght-contnt">
                    <p><?= $langArr['footer_content'] ?></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="assets/js/toastr.min.js"></script>

    <script>
        function languageChanged() {
            var locale = document.getElementById("languageSelect").value;
            var url = document.URL.split('?')[0] + "?lang=" + locale;
            window.location.href = url;
        }

        // send contact mail
        $(document).ready(function() {
            $("#enquiry_form").submit(function(e) {
                e.preventDefault();

                // Get form data
                var formData = $(this).serialize();
                $("#send_btn").prop("disabled", true);
                $("#send_btn").text("Sending...");
                // AJAX request
                $.ajax({
                    type: "POST",
                    url: "./mail.php",
                    data: formData,
                    success: function(response) {
                        response = JSON.parse(response);

                        $("#send_btn").prop("disabled", false);
                        $("#send_btn").text("Send Message");

                        if (response.status) {
                            // alert message
                            toastr.success(response.message);

                            $('#enquiry_form')[0].reset();
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(error) {
                        console.error("AJAX request failed", error);

                        $("#send_btn").prop("disabled", false);
                        $("#send_btn").text("Send Message");

                        toastr.error("Something went wrong please try later.");

                        setTimeout(() => {
                            location.href = "./index.php";
                        }, 2000);
                    },
                });
            });
        });
    </script>
</body>

</html>
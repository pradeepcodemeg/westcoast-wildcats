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

<body style="background-image: url(assets/images/bg-img.png);">
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
                  <a href="contact-us.php"><?= $langArr['Contact'] ?></a>
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
    <section class="banner-section" style="background-image: url(assets/images/registr-bg.jpg);">
      <div class="container">
        <div class="bnr-main regstr-bnr-main">
          <div class="bnr-inner">
            <div class="bnr-descrp regstr-bnr-dscrp">
              <h3><?= $langArr['Registration_Banner_Heading_First'] ?> <span><?= $langArr['Registration_Banner_Heading_Last'] ?></span> </h3>
              <p><?= $langArr['Registration_Banner_Para_Descrp_First'] ?></p>
              <p><?= $langArr['Registration_Banner_Para_Descrp_Second'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section">
      <div class="container">
        <form id="enquiry_form" action="POST">
          <div class="top-heading">
            <h3><?= $langArr['Parent'] ?><span> <?= $langArr['Details'] ?></span>
            </h3>
          </div>
          <div class="width-900">
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
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="email"><?= $langArr['Email'] ?>*</label>
                    <input type="email" name="email" placeholder="<?= $langArr['Enter_Your_Email_Id'] ?>" required>
                  </div>
                </div>
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="phone"><?= $langArr['Phone'] ?>*</label>
                    <input type="number" name="phone" placeholder="<?= $langArr['Enter_Your_Phone_Number'] ?>" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="top-heading">
            <h3><?= $langArr['Player'] ?> <span><?= $langArr['Information'] ?></span></h3>
          </div>
          <div class="width-900">
            <div class="from-main">
              <div class="form-flex">
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="dob"><?= $langArr['Date_Of_Birth'] ?>*</label>
                    <input type="date" name="dob" placeholder="DD/MM/YYYY" required>
                  </div>
                </div>
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label><?= $langArr['Basketball_Experince'] ?>*</label>
                    <input type="number" name="experience" placeholder="00" required>
                  </div>
                </div>
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="first-name"><?= $langArr['First_Name'] ?>*</label>
                    <input type="text" name="player_first_name" placeholder="<?= $langArr['Enter_Your_First_Name'] ?>" required>
                  </div>
                </div>
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="last-name"><?= $langArr['Last_Name'] ?>*</label>
                    <input type="text" name="player_last_name" placeholder="<?= $langArr['Enter_Your_Last_Name'] ?>" required>
                  </div>
                </div>
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="email"><?= $langArr['Email'] ?>*</label>
                    <input type="email" name="player_email" placeholder="<?= $langArr['Enter_Your_Email_Id'] ?>" required>
                  </div>
                </div>
                <div class="frm-inner-flx-50">
                  <div class="singel-input">
                    <label for="phone"><?= $langArr['Phone'] ?>*</label>
                    <input type="number" name="player_phone" placeholder="<?= $langArr['Enter_Your_Phone_Number'] ?>" required>
                  </div>
                </div>
              </div>
              <div class="submit-btn">
                <button id="send_btn" class="btn primary-btn"><?= $langArr['Submit_Form'] ?></button>
              </div>
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
                                            <a href="https://www.facebook.com/people/WestCoast-WildCats/61559795638128/?mibextid=LQQJ4d&rdid=8vBXGAF8r39E3cPh&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1iqm2KZqCXXf8jFD%2F%3Fmibextid%3DLQQJ4d" target="_blank">
                                                <span>
                                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.5 3H6.5C5.9477 3 5.5 3.44772 5.5 4V7H9.5C9.6137 6.99748 9.7216 7.0504 9.7892 7.1419C9.8568 7.2334 9.8758 7.352 9.84 7.46L9.1 9.66C9.0318 9.8619 8.8431 9.9984 8.63 10H5.5V17.5C5.5 17.7761 5.2761 18 5 18H2.5C2.22386 18 2 17.7761 2 17.5V10H0.5C0.22386 10 0 9.7761 0 9.5V7.5C0 7.2239 0.22386 7 0.5 7H2V4C2 1.79086 3.7909 0 6 0H9.5C9.7761 0 10 0.22386 10 0.5V2.5C10 2.77614 9.7761 3 9.5 3Z" fill="white" />
                                                    </svg>
                                                </span>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/westcoastbasket?igsh=MXVnenBmNjMyOG96dg%3D%3D&utm_source=qr" target="_blank">
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 0H5C2.23858 0 0 2.23858 0 5V13C0 15.7614 2.23858 18 5 18H13C15.7614 18 18 15.7614 18 13V5C18 2.23858 15.7614 0 13 0ZM16.25 13C16.2445 14.7926 14.7926 16.2445 13 16.25H5C3.20735 16.2445 1.75549 14.7926 1.75 13V5C1.75549 3.20735 3.20735 1.75549 5 1.75H13C14.7926 1.75549 16.2445 3.20735 16.25 5V13ZM13.75 5.25C14.3023 5.25 14.75 4.80228 14.75 4.25C14.75 3.69772 14.3023 3.25 13.75 3.25C13.1977 3.25 12.75 3.69772 12.75 4.25C12.75 4.80228 13.1977 5.25 13.75 5.25ZM9 4.5C6.51472 4.5 4.5 6.51472 4.5 9C4.5 11.4853 6.51472 13.5 9 13.5C11.4853 13.5 13.5 11.4853 13.5 9C13.5027 7.8057 13.0294 6.65957 12.1849 5.81508C11.3404 4.97059 10.1943 4.49734 9 4.5ZM6.25 9C6.25 10.5188 7.4812 11.75 9 11.75C10.5188 11.75 11.75 10.5188 11.75 9C11.75 7.4812 10.5188 6.25 9 6.25C7.4812 6.25 6.25 7.4812 6.25 9Z" fill="white" />
                                                    </svg>
                                                </span>
                                                Instagram
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.tiktok.com/@wildcatsbasket.se?_t=8mmCMfD65nl&_r=1" target="_blank">
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.125 12.375C10.125 13.0796 9.91599 13.7683 9.52455 14.3542C9.1331 14.94 8.57675 15.3966 7.92582 15.6663C7.27487 15.936 6.55856 16.0066 5.86749 15.8691C5.17642 15.7317 4.54164 15.3923 4.04345 14.8941C3.54518 14.3959 3.20587 13.7611 3.06841 13.07C2.93095 12.3789 3.00154 11.6626 3.27123 11.0117C3.54087 10.3607 3.99748 9.80436 4.58332 9.41291C5.16916 9.02147 5.85792 8.81252 6.56251 8.8125" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                                        <path d="M10.125 12.375V2.0625C10.125 3.75 12.375 6.75 15 6.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Tiktok
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@westcoastwildcats-tx4uy" target="_blank">
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0809 14.042C14.7401 14.1024 16.1352 12.8088 16.2 11.1497V6.85423C16.1352 5.19526 14.7401 3.90159 13.0809 3.96199H4.91903C3.25988 3.90159 1.86477 5.19526 1.79999 6.85423V11.1497C1.86477 12.8088 3.25988 14.1024 4.91903 14.042H13.0809Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64576 6.96791L10.9217 8.51444C11.0691 8.60055 11.1598 8.75845 11.1598 8.92916C11.1598 9.09995 11.0691 9.25784 10.9217 9.34388L8.64576 11.0359C8.21376 11.3289 7.56 11.0791 7.56 10.6212V7.38119C7.56 6.92543 8.21448 6.67487 8.64576 6.96791Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Youtube
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
          url: "./mailForRegister.php",
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
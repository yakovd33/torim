<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="assets/css/company.css">


<div id="company-profile" class="container-fluid">

    <div class="row">

        <div class="col-md-3" id="profile-right">

            <div id="company-logo-wrap">
                <img src="assets\photos\clalit-logo.png" id="company-logo">

                <div id="favorite-company-from-logo">
                    <i class="fas fa-heart like save-booking"></i>
                </div>
            </div>

            <h2 id="company-name"> קופת חולים כללית</h2>

            <h3 id="company-job">קופת חולים</h3>

            <div class="rate">
                <div class="stars" data-stars="1">
                    <svg height="25" width="23" class="star rating" data-rating="1">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                    </svg>
                    <svg height="25" width="23" class="star rating" data-rating="2">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                    </svg>
                    <svg height="25" width="23" class="star rating" data-rating="3">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                    </svg>
                    <svg height="25" width="23" class="star rating" data-rating="4">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                    </svg>
                    <svg height="25" width="23" class="star rating" data-rating="5">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                    </svg>
                </div>
            </div>

            <div id="appointment-button">
                <i class="far fa-calendar-alt"></i>
                <button id="set-app-button">הזמן תור</button>
            </div>

            <div id="company-details">

                <div>
                    <h4 class="details-headlines">שעות פעילות</h4>
                    <p>08:00 - 18:00</p>
                </div>

                <div>
                    <h4 class="details-headlines">קצת על העסק</h4>
                    <p>אני קצת טקסט על העסק</p>
                </div>

                <div>
                    <h4 class="details-headlines">מיקום</h4>
                    <p>אני יודע איפה אתה נמצא יבן זונה</p>
                </div>

            </div>

           

            <!-- <div id="buttons">
                <button>אודות</button>
                <button>ביקורות</button>
                <button>צור קשר</button>
            </div> -->

        </div>

        <div class="col-md-6">
            <div id="statistics-bar">
                <div class="statistics-bar-item">
                    <div class="statistics-bar-item-number">300</div>
                    <div class="statistics-bar-item-title">אנשים קבעו תור</div>
                </div>

                <div class="statistics-bar-item">
                    <div class="statistics-bar-item-number">300</div>
                    <div class="statistics-bar-item-title">אנשים קבעו תור</div>
                </div>

                <div class="statistics-bar-item">
                    <div class="statistics-bar-item-number">300</div>
                    <div class="statistics-bar-item-title">אנשים קבעו תור</div>
                </div>
            </div>


        </div>

        <div class="col-md-3">
            <div id="company-details">
                <div>
                    <h4 class="details-headlines">שעות פעילות</h4>
                    <p>08:00 - 18:00</p>
                </div>

                <div>
                    <h4 class="details-headlines">קצת על העסק</h4>
                    <p>אני קצת טקסט על העסק</p>
                </div>

                <div>
                    <h4 class="details-headlines">מיקום</h4>
                    <p>אני יודע איפה אתה נמצא יבן זונה</p>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13394.091698819742!2d35.0777892!3d32.9372007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92a5bccf8ecfa1df!2z16LXm9eVINen15XXmNeRINeU16bXpNeV158!5e0!3m2!1sen!2sil!4v1591460575045!5m2!1sen!2sil" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>

<!--/en-in/registration/-->
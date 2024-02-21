<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>

    <?php
    include "./include/commonHeadLink.php";
    ?>

    <link rel="stylesheet" href="../css/show-restaurant.css">
</head>

<body>

    <head>
        <?php
        include "./include/navbar.php";
        ?>
    </head>
    <main>
        <div class="show-restaurant-main-conatiner">
            <div class="restaurant-main-details-container">
                <div class="restaurant-intro-conatiner">
                    <div class="restaurant-info">
                        <div class="restaurant-name">Borcelle Restaurant</div>
                        <div class="restaurant-address">Lorem ipsum dolor sit. 128487, Country</div>
                        <div class="restaurant-contact"><a href="#">+1 (123) 456 7890</a></div>
                        <div class="restaurant-email"><a href="#">dummy@gmail.com</a></div>
                    </div>

                </div>

                <div class="restaurant-details-container">
                    <div class="details-conatiner-head">Details & Speciality</div>
                    <div class="restaurant-details">
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, qui! Delectus,
                                deserunt
                                quod!</li>
                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum deleniti quia perferendis
                                quaerat
                                possimus aut, nemo incidunt?</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, fugit corrupti
                                excepturi
                                eaque aspernatur, pariatur debitis modi iusto tempora necessitatibus hic. Repellendus,
                                nulla!
                                Nihil modi inventore quae voluptatibus fugiat.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, tempore!</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="restaurant-side-details-container">
                <div class="restaurant-logo-container">
                    <img src="../Assets/Images/Restaurant Logos/restaurant-logo.webp" alt="">
                </div>
                <div class="restaurant-menu-button"><a href="showMenu.php?resturantCode=restaurant-1">Menu</a></div>
                <div class="restaurant-time-details-container">
                    <table>
                        <tr>
                            <td>Monday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>10:00 AM - 05:00 PM</td>
                        </tr>
                    </table>
                </div>
                <div class="resturant-location-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.67410817044!2d-79.54286688204536!3d43.71812280208318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON!5e0!3m2!1sen!2sca!4v1706425185516!5m2!1sen!2sca"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="restaurant-reviews-conatiner">
                <div class="details-conatiner-head">Rates & Reviews</div>
                <div class="restaurant-reviews-stars-conatiner">
                    <div class="restaurant-reviews-star-overall">
                        <h3>4.2</h3>
                        <span>Out of</br>5 Stars</span>
                    </div>
                    <div class="restaurant-reviews-stars">
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: lightgrey;"></i>
                    </div>
                </div>
                <div class="restaurant-review-star-breakdown-conatiner">

                    <div class="restaurant-review-star-breakdown">
                        <span class="review-rate">5.0</span>
                        <div class="review-rate-count-bar-back">
                            <div class="review-rate-count-bar" style="width:10%"></div>
                        </div>
                        <span class="review-rate-count">45</span>
                    </div>

                    <div class="restaurant-review-star-breakdown">
                        <span class="review-rate">4.0</span>
                        <div class="review-rate-count-bar-back">
                            <div class="review-rate-count-bar" style="width:25%"></div>
                        </div>
                        <span class="review-rate-count">45</span>
                    </div>

                    <div class="restaurant-review-star-breakdown">
                        <span class="review-rate">3.0</span>
                        <div class="review-rate-count-bar-back">
                            <div class="review-rate-count-bar" style="width:27%"></div>
                        </div>
                        <span class="review-rate-count">45</span>
                    </div>

                    <div class="restaurant-review-star-breakdown">
                        <span class="review-rate">2.0</span>
                        <div class="review-rate-count-bar-back">
                            <div class="review-rate-count-bar" style="width:50%"></div>
                        </div>
                        <span class="review-rate-count">45</span>
                    </div>

                    <div class="restaurant-review-star-breakdown">
                        <span class="review-rate">1.0</span>
                        <div class="review-rate-count-bar-back">
                            <div class="review-rate-count-bar" style="width:70%"></div>
                        </div>
                        <span class="review-rate-count">45</span>
                    </div>

                </div>
                <div class="restaurant-reviews-comments-conatiner">
                    <div class="resturant-reviews-wrapper">

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card">
                            <div class="restaurant-individual-review-star">
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: orange;"></i>
                                <i class="fa fa-star" style="color: lightgrey;"></i>
                            </div>
                            <div class="restaurant-review-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.
                                Soluta
                                ullam expedita distinctio praesentium facere!</div>
                            <div class="reviewer-details">
                                <div class="reviewer-name">John Doe</div>
                            </div>
                        </div>

                        <div class="resturant-review-card extra-margin">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include("include/footer.php")
    ?>

</body>

</html>
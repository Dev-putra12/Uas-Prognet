<?php
include "header.php"
?>

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="./home">Home</a>
                        <a href="./rooms">Rooms</a>
                        <span>Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Room Details Section Begin -->
<section class="room-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="room-details-item">
                    <img src="img/room/room-details.jpg" alt="">
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3>Regular Suite</h3>
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                {{-- <a href="#" class="book-btn">Book Now</a> --}}
                            </div>
                        </div>
                        <h2>Rp450.000<span>/night</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>5 m2</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>2 person</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bed:</td>
                                    <td>Queen Bed</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>Wifi, Television, Bathroom, Dining/Work Table, Wardrobe, Free Breakfast</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis alias ipsum 
                            expedita animi aliquam eos vel quidem modi obcaecati iste, accusamus incidunt doloribus quae blanditiis. 
                            Voluptatibus officiis maiores a tenetur!.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nisi ea accusamus dicta autem maxime! Est rem corporis, quasi iure dicta culpa aliquam, repudiandae, 
                            labore suscipit recusandae deleniti nisi dolores facere?
                        </p>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="rd-reviews">
                    <h4>Reviews</h4>
                    <div class="review-item">
                        <div class="ri-text">
                            <span>18 Okt 2014</span>
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>Thomas Jordy</h5>
                            <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                magnam.</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="ri-text">
                            <span>29 Des 2020</span>
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>Dwi Putra</h5>
                            <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                magnam.</p>
                        </div>
                    </div>
                </div>

                <!-- Add Review -->
                <div class="review-add">
                    <h4>Add Review</h4>
                    <form action="#" class="ra-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name*">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email*">
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <h5>You Rating:</h5>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                </div>
                                <textarea placeholder="Your Review"></textarea>
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Booking/Reservation Form -->
            <div class="col-lg-4">
                <div class="room-booking">
                    <h3>Booking Room</h3>
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">1-2 Adults</option>
                                <option value="">3-4 Adults</option>
                                <option value="">Family</option>
                                <option value="">Group</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                                <option value="">2 Room</option>
                                <option value="">Group Room</option>
                            </select>
                        </div>
                        <button type="submit" formaction="payment-page">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Details Section End -->
<?php
include "footer.php"
?>
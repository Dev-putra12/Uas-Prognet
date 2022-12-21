<?php
include "header.php"
?>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="card">
      <div class="card-body">
        <div class="row d-flex justify-content-center pb-5">
          <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
            <div class="py-4 d-flex flex-row">
              <h5><span class="far fa-check-square pe-2"></span><b>PAYMENT</b> |</h5>
              <span class="ps-2">Details</span>
            </div>
            <h4 class="text-success">Rp450.000</h4>
            <h4>Regular Suite</h4><br>
            <div class="d-flex pt-2">
              <div>
                <p>
                  <b>Tax <span class="text-success">10%</span></b>
                </p>
              </div>
            </div>
            <p>
              Tax 10% included in all room order.
            </p>
            <hr />
            <div class="pt-2">
              <div class="d-flex pb-2">
                <div>
                  <p>
                    <b>Admin Fee <span class="text-success">0.4%</span></b>
                  </p>
                </div>
              </div>
              <p>
                Admin Fee included 0.4% in all room order through the website.
              </p><br>
              <form class="pb-3">
                <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                      value="" aria-label="..." checked />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Visa Debit
                      Card
                    </p>
                    <div class="ms-auto">************3456</div>
                  </div>
                </div>

                <div class="d-flex flex-row">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                      value="" aria-label="..." />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                      Office
                    </p>
                    <div class="ms-auto">************1038</div>
                  </div>
                </div>
              </form>
              <input type="button" value="Proceed to payment" class="btn btn-primary btn-block btn-lg" />
            </div>
          </div>

          <div class="col-md-5 col-xl-4 offset-xl-1">
            <div class="py-4 d-flex justify-content-end">
              <h6><a href="rooms-details">Cancel and return to website</a></h6>
            </div>
            <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
              <div class="p-2 me-3">
                <h4>Order Recap</h4>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Regular Suite x1</div>
                <div class="ms-auto">Rp450.000</div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8">Tax 10%</div>
                <div class="ms-auto"><b>Rp45.000</b></div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">
                  Admin Fee 0.4% <span class="fa fa-question-circle text-dark"></span>
                </div>
                <div class="ms-auto"><b>Rp1.800</b></div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8"><b>Total</b></div>
                <div class="ms-auto"><b class="text-success">Rp496.800</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/897a3f2775.js" crossorigin="anonymous"></script>
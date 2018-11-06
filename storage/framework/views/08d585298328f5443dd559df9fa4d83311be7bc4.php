<?php $__env->startSection('content'); ?>
 <div class="wrapper">
            <form action="">
                <div id="wizard">
                    <!-- SECTION 1 -->
                    <h4></h4>
                    <section>
                        <div class="form-row form-group">
                            <div class="form-holder">
                                <label for="">
                                First Name *
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-holder">
                                <label for="">
                                Last Name *
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Company Name
                            </label>
                            <input type="text" class="form-control">
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Country *
                            </label>
                            <div class="form-holder">
                                <select name="" id="" class="form-control">
                                    <option value="viet nam" class="option">Viet Nam</option>
                                    <option value="united states" class="option">United States</option>
                                    <option value="united kingdom" class="option">United Kingdom</option>
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Address *
                            </label>
                            <input type="text" class="form-control" placeholder="Street address" style="margin-bottom: 20px">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Town / City *
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </section>
                    
                    <!-- SECTION 2 -->
                    <h4></h4>
                    <section>
                        <div class="form-row">
                            <label for="">
                                County *
                            </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-row">
                            <label for="">
                                Postcode / Zip *
                            </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-row form-group">
                            <div class="form-holder">
                                <label for="">
                                Phone *
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-holder">
                                <label for="">
                                Email Address *
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <div class="form-row" style="margin-bottom: 18px">
                            <label for="">
                                Order Notes
                            </label>
                            <textarea name="" id="" class="form-control" placeholder="Note about your order, eg. special notes fordelivery." style="height: 149px"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Create an account?
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </section>

                    <!-- SECTION 3 -->
                    <h4></h4>
                    <section>
                        <div class="product">
                            <div class="item">
                                <div class="left">
                                    <a href="#" class="thumb">
                                        <img src="images/item-1.png" alt="">
                                    </a>
                                    <div class="purchase">
                                        <h6>
                                            <a href="#">Low Table/Stool</a>
                                        </h6>
                                        <span>x4</span>
                                    </div>
                                </div>
                                <span class="price">$29</span>
                            </div>
                            <div class="item">
                                <div class="left">
                                    <a href="#" class="thumb">
                                        <img src="images/item-2.png" alt="">
                                    </a>
                                    <div class="purchase">
                                        <h6>
                                            <a href="#">Set of 3 Porcelain</a>
                                        </h6>
                                        <span>x2</span>
                                    </div>
                                </div>
                                <span class="price">$124</span>
                            </div>
                        </div>
                        <div class="checkout">
                            <div class="subtotal">
                                <span class="heading">Subtotal</span>
                                <span>$364</span>
                            </div>
                            <p class="shipping">
                                <span class="heading">Shipping</span>
                            there are no shipping methods available. please double check your address, or contact us if you need any help.
                            </p>
                            <div class="total">
                                <span class="heading">Subtotal</span>
                                <span class="total-price">$364</span>
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 4 -->
                    <h4></h4>
                    <section>
                        <div class="checkbox-circle">
                            <label class="active">
                                <input type="radio" name="billing method" value="Direct bank transfer" checked>Direct bank transfer>
                                <span class="checkmark"></span>
                                <div class="tooltip">
                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="billing method" value="Check payments">Check payments
                                <span class="checkmark"></span>
                                <div class="tooltip">
                                    Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="billing method" value="Cash on delivery">Cash on delivery
                                <span class="checkmark"></span>
                                <div class="tooltip">
                                    Pay with cash upon delivery.
                                </div>
                            </label>
                        </div>
                    </section>
                </div>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
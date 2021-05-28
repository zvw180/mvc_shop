<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form method="post" id="fdangky" >
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" name="fname" id="validationCustom01" placeholder="Mark" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" name="lname" id="validationCustom02" placeholder="Otto" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 col mb-3">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4">
                        <div id="messageEm"></div>
                    </div>
                    <div class="col-md-6 col mb-3">
                        <label for="inputPassword4">Phone</label>
                        <input type="tel" class="form-control" name="phone" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 mb-3">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" name="address2"
                               placeholder="Apartment, studio, or floor">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" name="zip" id="inputZip">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <button type="submit" id="bdangky" class="btn btn-primary">Dang ky</button>
                </div>

            </form>

        </div>
    </div>
</div>
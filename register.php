<?php include_once "./include/header.php"; ?>

<?php
$cities = ["Erode", "Neelambur-Coimbatore", "Hopes College - Coimbatore", "Bhavani- Erode", "Gandhipuram - Coimbatore", "Mettupalayam - Coimbatore", "Annur - Coimbatore", "Sai baba Colony - Coimbatore", "Perundurai - Erode", "Thindal - Erode", "Chithode - Erode", "Gobichettipalayam - Erode", "Kavundapadi - Erode", "Sathyamanagalam - Erode", "Perumanallur - Tirupur", "Old Bus stand - Tirupur", "Pariyur - Erode", "Karumathampatti - Coimbatore", "Ganapathy - COimbatore", "Kavundapalayam - Coimbatore", "Peelamedu - Coimbatore", "Brough Road - Erode", "Lakshmi Naga - Erode", "Kavundapadi - Erode","Karur","Chennai","Trichy"];
?>
<?php include_once "msg/register.php"; ?>
<div class="container" style="margin-top: 30px; max-width: 800px;margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Register as Service Provider</h3>
            </div>
            <hr>


            <form action="scripts/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact" minlength="10"
                        maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 2</label>
                    <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        required>
                </div>
                <div class="form-group">
                    <label for="">Aadhar No</label>
                    <input id="adar" name="adar" type="text" class="form-control" placeholder="aadharno"  minlength="12" maxlength="12" required>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Photo(Square Size)</label>
                    <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Add Description</label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Tell something about you..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter 6 Character Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                        <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="mobile">Mobile Repairer</option>
                        <option value="electrician">Electrician</option>
                        <option value="AC Appliance Repair">AC Appliance Repair</option>
                <option value="cleaning and pest control">Cleaning and Pest control</option>
                <option value="AC/ Appliance Repair">AC/ Appliance Repair</option>
                <option value="Painting">Home Painting</option>
                <option value="RO Repair">Water Purifier Repair</option>
                <option value="washing machine">Washing Machine Repair</option>
                <option value="Kitchen Appliance Repair">Kitchen Appliance Repair</option>
                    </select>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="register"
                    id="register">Register</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";

<?php

include_once "./include/header.php";
$cities = ["Erode", "Neelambur-Coimbatore", "Hopes College - Coimbatore", "Bhavani- Erode", "Gandhipuram - Coimbatore", "Mettupalayam - Coimbatore", "Annur - Coimbatore", "Sai baba Colony - Coimbatore", "Perundurai - Erode", "Thindal - Erode", "Chithode - Erode", "Gobichettipalayam - Erode", "Kavundapadi - Erode", "Sathyamanagalam - Erode", "Perumanallur - Tirupur", "Old Bus stand - Tirupur", "Pariyur - Erode", "Karumathampatti - Coimbatore", "Ganapathy - COimbatore", "Kavundapalayam - Coimbatore", "Peelamedu - Coimbatore", "Brough Road - Erode", "Lakshmi Naga - Erode", "Kavundapadi - Erode","Karur","Chennai","Trichy"];

?>
<div style="text-align:center">
<img src="https://static.vecteezy.com/system/resources/previews/010/626/385/original/house-fix-logo-home-fixing-logo-house-repair-logo-vector.jpg" height="105" width="140">
</div>
<h2 class="text-center" style="margin-top: 20px">Fix-Home Repairs</h2>
<hr>

<div class="container" style="margin-top:20px; margin-bottom: 60px;">


    <div class="row">
        <div class="form-group col-5">
            <label for="">City</label>
            <select class="form-control" name="city" id="city">
                <option value="none">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-5">
            <label for="">Who's Required</label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">Select Profession</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="AC Appliance Repair">AC Appliance Repair</option>
                <option value="cleaning and pest control">Cleaning and Pest control</option>
                <option value="AC/ Appliance Repair">AC/ Appliance Repair</option>
                <option value="Painting">Home Painting</option>
                <option value="RO Repair">Water Purifier Repair</option>
                <option value="washing machine">Washing Machine Repair</option>
                <option value="Kitchen Appliance Repair">Kitchen Appliance Repair</option>
            </select>
        </div>

        <div class="form-group col-2">
            <label for="">Action</label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='5'>Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:150px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + ",<br>" + provider.adder2 +
                                ",<br>" +
                                provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>
<!-- Category Start -->
<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Service Offered</h1>
                    <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://cdn.dribbble.com/users/8265547/screenshots/15886583/1-11.jpg" alt="Icon" height="80px" width="80px">
                                </div>
                                <h6>Plumbing</h6>
                                <!-- <span>123 Properties</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://png.pngtree.com/png-vector/20210226/ourlarge/pngtree-masonry-and-construction-logo-png-image_2950961.jpg" alt="Icon"  height="80px" width="80px">
                                </div>
                                <h6>Patch work</h6>
                                <!-- <span>123 Properties</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSda881a6tpXQ9MQg4MbomsfpfWhHw-FGrLA_C7nh2uOen2Cy-d_yIGl_Y9CMgTYR15Sdk&usqp=CAU" alt="Icon"  height="80px" width="80px">
                                </div>
                                <h6>Electrical</h6>
                                <!-- <span>123 Properties</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://t4.ftcdn.net/jpg/03/07/34/87/360_F_307348789_rvohtPaRfpG3pQF1Jrqmst8ORzzwp4tX.jpg" alt="Icon"  height="80px" width="80px">
                                </div>
                                <h6>carpenter</h6>
                                <!-- <span>123 Properties</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://img.freepik.com/free-vector/painter-construction-worker-cartoon-character_1308-103547.jpg" alt="Icon" height="80px" width="80px">
                                </div>
                                <h6>Painting</h6>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://5.imimg.com/data5/SELLER/Default/2022/10/RQ/ME/RK/111987320/anti-termite-pest-control-service.jpg" alt="Icon" height="80px" width="80px">
                                </div>
                                <h6>Pest Control</h6>
                               
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" >
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="https://st3.depositphotos.com/7874342/19200/v/950/depositphotos_192008756-stock-illustration-service-and-repair-of-air.jpg" alt="Icon" height="80px" width="80px">
                                </div>
                                <h6>AC and Appliances Repair</h6>
                               
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://blog.renovationfind.com/wp-content/uploads/2017/11/Handyman-Services-800x450.jpg" height="80%" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block" style>
        <h5 style="color:black;font-size:40px;">FIX-HOME REPAIRS</h5>
        <p style="color:black;font-size:40px;">Make Your Home Perfect</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://content.pymnts.com/wp-content/uploads/2019/08/home-maintenance.jpg" height="70%" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="color:black;font-size:40px;">FIX-HOME REPAIRS</h5>
        <p style="color:black;font-size:40px;">Make Your Home Perfect</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<?php include_once "./include/footer.php";

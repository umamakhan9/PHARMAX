<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha385-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .nav-link {
            color: #2E073F;
            font-size: 19px;
            font-weight: 600;
            flex-direction: column;
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;

        }



        .navbar-brand {
            margin-left: 50px;
            object-fit: contain;

        }

        body {
            background-color: #F6F5F2;
        }

        .companies {
            text-align: center;
        }

        .card-text {
            text-align: start;
        }

        .card {
            transition: transform 0.3s;
            cursor: pointer;
            border: none;
            box-shadow: 10px 10px 10px 0px gray;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .row {
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .ahref {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <?php require('../components/header.php') ?>
    </nav>
    </header>
    <section class="container companies">
        <br><br>
        <h2 class="mb-4" id="h">Best Pharmaceutical Companies of Pakistan</h2>
        <br>

        <div class="company-cards">
            <div class="row mb-5">
                <div class="card col-sm-12 col-md-8 col-lg-6" id="sami"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/sami-logo-black.png" width="200px" height="50px">
                        <h5 class="card-title company_text">Sami Pharmaceuticals</h5>
                        <p class="card-text">Known for its innovative approach and high-quality pharmaceutical products,
                            Sami Pharmaceuticals
                            offers a range of medicines in various therapeutic areas.</p>
                        <button id="Sami" class="btn"> <a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-8 col-lg-6" id="hilton"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/hiltanlogp-removebg-preview.png" width="200px" height="70px">
                        <h5 class="card-title company_text">Hilton Pharma</h5>
                        <p class="card-text">One of the leading pharmaceutical companies in Pakistan, producing a wide
                            array
                            of medicines with a
                            strong reputation for quality.</p>
                        <button id="Hilton" class="btn"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-8 col-lg-6" id="martin"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/martinlogo-removebg-preview.png" width="100px" height="50px">
                        <h5 class="card-title company_text">Martin Dow</h5>
                        <p class="card-text">Martin Dow is a prominent name in the Pakistani pharmaceutical industry,
                            known
                            for its diverse range
                            of high-quality pharmaceutical products.</p>
                        <button class="btn" id="Martin"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="card col-sm-12 col-md-8 col-lg-6" id="brookes"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/brookeslogo-removebg-preview.png" width="100px" height="50px">
                        <h5 class="card-title company_text">Brookes Pharma</h5>
                        <p class="card-text">A well-established pharmaceutical company in Pakistan, offering a variety
                            of
                            medicines and focusing
                            on quality and innovation.</p>
                        <button class="btn" id="Brookes"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-8 col-lg-6" id="fizer"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/pfizer-logo-color.png" width="100px" height="50px">
                        <h5 class="card-title company_text">Pfizer Pakistan</h5>
                        <p class="card-text">A subsidiary of the global pharmaceutical giant Pfizer, providing a wide
                            range
                            of prescription
                            medicines and vaccines.</p>
                        <button class="btn" id="Fizer"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-8 col-lg-6" id="highnoon"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/LogoHighnoon-removebg-preview.png" width="150px" height="50px">
                        <h5 class="card-title company_text">Highnoon Laboratories</h5>
                        <p class="card-text">Known for its high-quality pharmaceutical products and innovative
                            approaches,
                            Highnoon Laboratories
                            offers a wide range of medicines in various therapeutic areas.</p>
                        <button class="btn" id="Highnoon"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="card col-sm-12 col-md-8 col-lg-6" id="getz"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/getzLogo-removebg-preview.png" width="200px" height="50px">
                        <h5 class="card-title company_text">Getz Pharma</h5>
                        <p class="card-text">Getz Pharma is one of the largest and most
                            reputable pharmaceutical companies
                            in Pakistan, known for producing high-quality medicines with a strong local and
                            international
                            presence.</p>
                        <button id="Getz" class="btn"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-8 col-lg-6" id="abbott"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/abbottlogo-removebg-preview.png" width="150px" height="60px">
                        <h5 class="card-title company_text">Abbott Laboratories Pakistan</h5>
                        <p class="card-text">A subsidiary of the global healthcare company Abbott,
                            offering a wide range of pharmaceutical
                            products and medical devices.</p>
                        <button id="Abbott" class="btn"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-8 col-lg-6" id="glaxo"
                    style="width: 18rem; background-color: #F8F9FA;">
                    <div class="card-body">
                        <img class="" src="../assets/img/gsk-logo-removebg-preview.png" width="100px" height="30px">
                        <h5 class="card-title company_text">GlaxoSmithKline (GSK) Pakistan</h5>
                        <p class="card-text">GSK is a leading global healthcare company with a significant presence in
                            Pakistan, providing a
                            variety of prescription medicines and vaccines.</p>
                        <button id="Glaxo" class="btn"><a href="#" class="ahref">Get Medicines</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 
    <section class="companies" id="s" style="display:none;" >
    <h4 class="mb-4" id="h">Sami Pharmaceuticals</h4>
    <div class="med-cards">
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

    </div>
    </section>
    <section class="companies" id="hp" style="display:none;" >
    <h4 class="mb-4" id="h">Hilton Pharma</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="m" style="display:none;" >
    <h4 class="mb-4" id="h">Martin Dow</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="b" style="display:none;" >
    <h4 class="mb-4" id="h">Brookes Pharma</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="f" style="display:none;" >
    <h4 class="mb-4" id="h">Pfizer Pakistan</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="hl" style="display:none;" >
    <h4 class="mb-4" id="h">Highnoon Laboratories</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="gz" style="display:none;" >
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <h4 class="mb-4" id="h">Getz Pharma</h4>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="a" style="display:none;" >
    <h4 class="mb-4" id="h">Abbott Laboratories Pakistan</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section>
    <section class="companies" id="g" style="display:none;" >
    <h4 class="mb-4" id="h">GlaxoSmithKline (GSK) Pakistan</h4>
    <form action="" method="">
                            <div class="main ">
                                <div class="input-group ">
                                    <input type="text" name="" class="control search-box"
                                        placeholder="  Search the medicine prescribed by your doctor">
                                    <button class="btns btn btn-secondary search-button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    <div class="med-cards"></div>
    </section> -->

    <?php require('../components/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha385-I7E8VVD/ismYTF5hNIPjVp/Zjvgyol6VFvRkX/vR+Vc5jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha385-BBtl+eGJRgqQAUMxJ7pMwbEyER5l1g+O15P+16Ep7Q9Q+zqX6gSbd85u5mG5QzX+"
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <!-- <script>
        $(document).ready(function () {
            $('#Sami').click(function () {
                $('#s').show();
                $('#sami').hide();
                $('#h').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
            });

            $('#Hilton').click(function () {
                $('#h').hide();
                $('#hp').show();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
            });

            $('#Martin').click(function () {
                $('#m').show();
                $('#h').hide();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
            });

            $('#Brookes').click(function () {
                $('#b').show();
                $('#h').hide();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
            });

            $('#Fizer').click(function () {
                $('#f').show();
                $('#h').hide();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
            });

            $('#Highnoon').click(function () {
                $('#hl').show();
                $('#h').hide();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
            });

            $('#Getz').click(function () {
                $('#h').hide();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
                $('#gz').show();
            });

            $('#Abbott').click(function () {
                $('#h').hide();
                $('#sami').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
                $('#a').show();
            });

            $('#Glaxo').click(function () {
                $('#sami').hide();
                $('#h').hide();
                $('#hilton').hide();
                $('#martin').hide();
                $('#brookes').hide();
                $('#fizer').hide();
                $('#highnoon').hide();
                $('#getz').hide();
                $('#abbott').hide();
                $('#glaxo').hide();
                $('#g').show();
            });
        });
    </script> -->
</body>

</html>
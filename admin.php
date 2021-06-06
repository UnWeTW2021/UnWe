<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <?php include('Components/header-include.php'); ?>


</head>
<body>
<?php
include('Components/header.php');
?>


<section class="admin-wrapper">

    <div class="admin-select-form-wrapper">
        <select class="admin-select-form">
            <option value="">Tipul de date</option>
            <option value="1">Grupa Varsta</option>
            <option value="2">Medie Rezidenta</option>
            <option value="3">Nivelul Educatiei</option>
            <option value="4">Rate Somaj</option>
        </select>
        <p class="error-message">Selecteaza macar un dataset</p>
    </div>

    <div class="admin-form-wrapper" id="admin-form-wrapper">


        <form id="grupa-varsta">
            <label for="judet">Judet:
                <input type="text" name="judet" value="Judet" required>
            </label>


                <label for="sub25">Sub 25 ani:
                    <input type="number" name="sub25" id="sub25">
                </label>

                <label for="_25_29">25-29 ani:
                    <input type="number" name="_25_29" id="25_29">
                </label>

                <label for="_30_39">30-39 ani:
                    <input type="number" name="_30_39" id="30_39">
                </label>

                <label for="_40_49">40-49 ani:
                    <input type="number" name="_40_49" id="40_49">
                </label>

                <label for="_50_55">50-55 ani:
                    <input type="number" name="_50_55" id="50_55">
                </label>

                <label for="peste55">Peste 55 ani:
                    <input type="number" name="peste55" id="peste55">
                </label>


            <label for="luna">Luna
                <input type="number" name="luna" value="1" min="1" max="12" required >
            </label>

            <label for="luna">An
                <input type="number" name="an" value="2021" required >
            </label>

            <button type="submit" id="grupa-varsta-submit">Submit</button>
        </form>
        <form id="medie-rezidenta">
            <label for="judet">Judet:
                <input type="text" name="judet" value="Judet" required>
            </label>


                <label for="total_femei">Total femei:
                    <input type="number" name="total_femei" id="total_femei">
                </label>

                <label for="total_barbati">Total barbati:
                    <input type="number" name="total_barbati" id="total_barbati">
                </label>

                <label for="total_urban">Total urban:
                    <input type="number" name="total_urban" id="total_urban">
                </label>

                <label for="femei_urban">Femei urban:
                    <input type="number" name="femei_urban" id="femei_urban">
                </label>

                <label for="barbati_urban">Barbati urban:
                    <input type="number" name="barbati_urban" id="barbati_urban">
                </label>

                <label for="total_rural">Total rural:
                    <input type="number" name="total_rural" id="total_rural">
                </label>

                <label for="femei_rural">Femei rural:
                    <input type="number" name="femei_rural" id="femei_rural">
                </label>

                <label for="barbati_rural">barbati rural:
                    <input type="number" name="barbati_rural" id="barbati_rural">
                </label>


            <label for="luna">Luna
                <input type="number" name="luna" value="1" min="1" max="12" required >
            </label>

            <label for="luna">An
                <input type="number" name="an" value="2021" required >
            </label>

            <button type="submit" id="medie-rezidenta-submit">Submit</button>
        </form>

        <form id="nivelul-educatiei">
            <label for="judet">Judet:
                <input type="text" name="judet" value="Judet" required>
            </label>



                <label for="fara_studii">fara studii:
                    <input type="number" name="fara_studii" id="fara_studii">
                </label>

                <label for="invatamant_primar">primar:
                    <input type="number" name="invatamant_primar" id="invatamant_primar">
                </label>

                <label for="invatamant_gimnazial">gimnazial:
                    <input type="number" name="invatamant_gimnazial" id="invatamant_gimnazial">
                </label>

                <label for="invatamant_liceal">liceal:
                    <input type="number" name="invatamant_liceal" id="invatamant_liceal">
                </label>

                <label for="invatamant_postliceal">postiliceal:
                    <input type="number" name="invatamant_postliceal" id="invatamant_postliceal">
                </label>

                <label for="invatamant_profesional">profesional:
                    <input type="number" name="invatamant_profesional" id="invatamant_profesional">
                </label>

                <label for="invatamant_universitar">universitar:
                    <input type="number" name="invatamant_universitar" id="invatamant_universitar">
                </label>


            <label for="luna">Luna
                <input type="number" name="luna" value="1" min="1" max="12" required >
            </label>

            <label for="luna">An
                <input type="number" name="an" value="2021" required >
            </label>

            <button type="submit" id="niveul-educatiei-submit">Submit</button>
        </form>

        <form id="rate-somaj">
            <label for="judet">Judet:
                <input type="text" name="judet" value="Judet" required>
            </label>




                <label for="rata_total_femei">numar total femei:
                    <input type="number" name="rata_total_femei" id="rata_total_femei">
                </label>

                <label for="rata_total_barbati">numar total barbati:
                    <input type="number" name="rata_total_barbati" id="rata_total_barbati">
                </label>

                <label for="indemnizati">indemnizati:
                    <input type="number" name="indemnizati" id="indemnizati">
                </label>

                <label for="neindemnizati">neindeminziati:
                    <input type="number" name="neindemnizati" id="neindemnizati">
                </label>

                <label for="rata_somaj">rata somaj:
                    <input type="number" name="rata_somaj" id="rata_somaj">
                </label>

                <label for="rata_somaj_feminina">rata somaj feminina:
                    <input type="number" name="rata_somaj_feminina" id="rata_somaj_feminina">
                </label>

                <label for="rata_somaj_masculina">rata somaj masculina:
                    <input type="number" name="rata_somaj_masculina" id="rata_somaj_masculina">
                </label>


            <label for="luna">Luna
                <input type="number" name="luna" value="1" min="1" max="12" required >
            </label>

            <label for="an">An
                <input type="number" name="an" value="2021" required >
            </label>

            <button type="submit" id="rate-somaj-submit">Submit</button>
        </form>
    </div>

    <section class="list-wrapper">


        <section class="table-responsive">
            <!--            <table class="table">-->
            <!--                <thead>-->
            <!--                <tr>-->
            <!--                    <th scope="col">id</th>-->
            <!--                    <th scope="col">Name</th>-->
            <!--                    <th scope="col">Category</th>-->
            <!--                    <th scope="col">Price</th>-->
            <!--                    <th scope="col">Date</th>-->
            <!--                </tr>-->
            <!--                </thead>-->
            <!--                <tbody id="list">-->
            <!---->
            <!---->
            <!---->
            <!--                </tbody>-->
            <!--            </table>-->
        </section>
        <div class="pagination">
            <button class="pagination-button" id="prev">Previous</button>
            <button class="pagination-button" id="next">Next</button>
        </div>
    </section>

</section>

<?php
include('Components/footer.php');
?>
<script type="module" src="js/admin.js"></script>
</body>
</html>
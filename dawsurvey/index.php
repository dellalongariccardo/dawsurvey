<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <?php
    $ref = isset($_GET['r']) ? htmlspecialchars($_GET['r']) : 'noref';
    ?>

<head>


    <title>
        Daw usage survey
    </title>

	<meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Daw Survey by LIM" />
    <meta name="keywords" content="DAW, Survey, Music, Lim, Audio, Production, Music" />
    <meta name="author" content="Giorgio Presti, Federico Avanzini, Riccardo Della Longa" />

    <meta property="og:title" content="DAW Survey" />
    <meta property="og:description" content="Music Production habits survey" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.lim.di.unimi.it/dawsurvey/" />
	<meta property="og:image" content="https://www.lim.di.unimi.it/dawsurvey/logo.png" />

    <link rel="stylesheet" type="text/css" href="styles.css" />

    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="Screen">

    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="handheld, only screen and (max-device-width:770px)">


</head>

    <body>


    <header>
    <img src="logo_small.png" >

    <h1 class="badge text-bg-dark" style="text-align:center"> DAW USAGE SURVEY </h1>

    <img src="dipinfo.jpeg" >
    </header>

    <div class="module1">
        <p class="badge text-bg-dark" style="text-align:center"> Welcome to our survey! We are the <a href="https://www.lim.di.unimi.it" target="blank"> Laboratory of Music Informatics (LIM) </a> at the Department of Computer Science, University of Milan, and we are conducting this survey as part of our current research on audio and music technologies. The survey is about the usage of DAWs to study audio production habits. If you need more information, please contact Federico Avanzini and Giorgio Presti. Please fill in all the fields on the following pages! </p>
    <i>This site does NOT use proprietary cookies and respects and protects the privacy of visitors and users; no personal data is stored in compliance with legal obligations deriving from national and EU regulations regarding the protection of personal data.</i>
    </div>
    <div class="module" >

        <form id="gender" align="left" >
            <label for="gender" > Gender: </label> <br>
                <select name="gender" id="selectGender" >
                    <option value="" selected="selected" disabled selected>Select your gender</option>
                    <option  value="Male" > Male</option>
                    <option  value="Female" > Female</option>
                    <option  value="Non binary" > Non binary</option>
                    <option  value="No answer" > I don't want to answer</option>
                </select>
        </form>



        <form id="età" align="left">
            <label for="età"> Age range: </label> <br>
                <select name="età" id="selectAge">
                      <option value="" selected="selected" disabled selected>Select your age</option>
                    <option value="<=17"> <=17</option>
                    <option value="18-24"> 18-24 </option>
                    <option value="25-29"> 25-29</option>
                    <option value="30-34"> 30-34</option>
                    <option value="35-39"> 35-39</option>
                    <option value="40-49"> 40-49</option>
                    <option value="50-59"> 50-59</option>
                    <option value=">=60"> >=60</option>

                </select>
        </form>

        <form id="country" align="left">
            <label for="country" > Country of residence:</label> <br>
            <select name="country" id="selectCountry">
                <option value="" selected="selected" disabled selected>Select Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </form>

        <form id="strumento" align="left">
            <label for="strumento"> Can you play an instrument? </label> <br>
            <label> <input type="checkbox"  name="strumento" value="(electro)Acoustic with teacher"> Acoustic or electroacoustic instrument (with teacher) </label><br>
            <label> <input type="checkbox"  name="strumento" value="(electro)Acoustic self-taught"> Acoustic or electroacoustic instrument (self-taught) </label><br>
            <label> <input type="checkbox"  name="strumento" value="Electronic with teacher"> Electronic instrument (with teacher) </label><br>
            <label> <input type="checkbox"  name="strumento" value="Electronic self-taught"> Electronic instrument (self-taught) </label><br>
        </form>

        <form id="livello" align="left">
            <label for="livello"> Do you record or do any audio production?</label> <br>
            <label> <input type="checkbox" name="livello" value="Hobby"> As an hobby/myself </label><br>
            <label> <input type="checkbox" name="livello" value="Job"> As a Job </label><br>
        </form>



        <form id="studio" align="left">
            <label for="studio"> Do you work in an audio production studio, post-production studio or audio service?  </label> <br>
                <select name="studio" id="selectStudio">
                    <option value="" selected="selected" disabled selected></option>
                    <option value="No"> No </option>
                    <option value="Employee"> Yes, employee </option>
                    <option value="Owner"> Yes, business owner</option>
                    <option value="Freelance"> Yes, freelance</option>

                </select>
        </form>



        <form id="formazione" align="left">
            <label for="formazione"> Have you taken training courses related to sound manipulation?  </label> <br>
                <select name="formazione" id="selectFormazione">
                    <option value="" selected="selected" disabled selected></option>
                    <option  value="No"> No </option>
                    <option  value="Yes"> Yes </option>

                </select>
        </form>

        <form id="daw"  action="salvaDati.php" method="post" align="left">
        <label for="daw" > If you had to choose only one DAW, what would it be?</label> <br>
        <select name="daw" id="selectDaw">
            <option value="" selected="selected" disabled selected >Select one DAW</option>
<?php include('dawlist.php') ?>
        </select>
    </form>

    </div>

    <div class="vertical-center">
    <button type="submit" id="avanti" onclick="nextPage()" value="avanti" > Next </button>
    </div>

    <div class="fine"> </div>


     <!-- Input nascosto per il download del file JSON -->
    <a id="downloadLink" style="display: none">Download JSON</a>



    </body>

    <script>
    function validateForm() {
        // Validazione del primo form
        var gender = document.getElementById('selectGender').value;
        var age = document.getElementById('selectAge').value;
        var country = document.getElementById('selectCountry').value;
        var studio = document.getElementById('selectStudio').value;
        var formazione = document.getElementById('selectFormazione').value;
        var daw = document.getElementById('selectDaw').value;

        // Aggiungi altre validazioni dei campi se necessario

        if (gender === "" || age === "" || country === "" || studio === "" || formazione === "" || daw === "") {
            alert('Complete all fields before moving to the next page.');
            return false;
        }

        return true;
    }

    // Funzione per passare alla pagina successiva solo se il form è valido
    function nextPage() {
        if (validateForm()) {
            window.location.href = 'pag2.php?r=<?php echo $ref ?>';
        }
    }
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const salvaJSONButton = document.getElementById('avanti');
            const downloadLink = document.getElementById('downloadLink');

            const referrer = '<?php echo $ref ?>';



         salvaJSONButton.addEventListener('click', function () {
        // Raccogli i dati dai campi di input
        const selectGender = document.getElementById('selectGender');
        const gender = selectGender.value;

        const selectAge = document.getElementById('selectAge');
        const age = selectAge.value;

        const selectCountry = document.getElementById('selectCountry');
        const country = selectCountry.value;

        const strumentoCheckboxes = document.querySelectorAll('input[name="strumento"]:checked');
        const strumento = Array.from(strumentoCheckboxes, checkbox => checkbox.value);

        const livelloCheckboxes = document.querySelectorAll('input[name="livello"]:checked');
        const livello = Array.from(livelloCheckboxes, checkbox => checkbox.value);

        const selectStudio = document.getElementById('selectStudio');
        const studio = selectStudio.value;

        const selectFormazione = document.getElementById('selectFormazione');
        const formazione = selectFormazione.value;

        const selectDaw = document.getElementById('selectDaw');
        const daw = selectDaw.value;


        // Crea un ogg JSON
        const datiJSON = {
            Gender: gender,
            Age: age,
            Country: country,
            Instrument: strumento,
            Level: livello,
            Company: studio,
            Training: formazione,
            DAW: daw,
            Source: referrer
        };

        // Converti l'ogg JSON in una stringa JSON
        const datiJSONString = JSON.stringify(datiJSON, null, 8);

       localStorage.setItem('dati', datiJSONString);

        });


});



    </script>


</html>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <?php
    $ref = isset($_GET['r']) ? htmlspecialchars($_GET['r']) : 'noref';
    ?>

  <head>

    <title> Daw usage survey </title>

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


     <link rel="stylesheet" type="text/css" href="css/desktop.css" media="Screen">
     <link rel="stylesheet" type="text/css" href="css/mobile2.css" media="handheld, only screen and (max-device-width:770px)">

  </head>

  <body id="body">
  <div class="container">

    <header>
    <img src="logo_small.png" >

    <h1 class="badge text-bg-dark" style="text-align:center"> DAW USAGE SURVEY </h1>

    <img src="dipinfo.jpeg" >
    </header>

    <div class="module1">
    <p class="badge text-bg-dark" style="text-align: center"> We're interested in learning which DAWs you've used along your way, in different use cases (one or more). For each use case we ask you to list: the DAW, the operating system, the context, the time span, the related tasks and types of production. The "Add use-case" button allows you to create as many new rows as you wish, to describe different use cases involving different DAWs and/or contexts, etc.</p></div>

    <div id="moduloOriginale" class="module" >

        <form id="daw" class="form daw" >
        <label for="daw">Daw:</label> <br>
        <select name="DAW" id="selectDaw">
            <option value="" selected="selected" disabled selected >Select one DAW</option>
<?php include('dawlist.php') ?>
        </select>
      </form>

        <form id="os" class="form os" >
        <label for="os" >Operating system:</label> <br>
        <select name="OS" id="selectOS">
            <option value="" selected="selected" disabled selected>Select an OS</option>
          <option value="Mac">Mac</option> <br>
          <option value="Windows">Windows</option> <br>
          <option value="Linux">Linux</option> <br>
        </select>
      </form>



        <form id="livello" class="form livello" >
        <label for="livello">Use context:</label> <br>
        <select name="Level" id="selectLivello" required>
          <option value="" selected="selected" disabled selected>Select an use context</option>
          <option value="Professional">Professional</option>
          <option value="Semi-professional">Semi-professional</option>
          <option value="Amateur">Amateur</option>
        </select>
      </form>

        <form id="periodo" class="form periodo" >
        <label for="periodo">Usage time span:</label> <br>
        <input type="number" name="start_year" id="inizioDaw" min="1975" max="2023" step="1" value="1980" />
        <input type="number" name="end_year" id="fineDaw" min="1975" max="2023" step="1" value="2023" />
      </form>

        <form id="task" class="form task1">
    <label for="task" class="tooltip" >Task: </label> <br>
    <div align="left" >
      <label class="tooltip"><input type="checkbox" name="task" value="Draft"> Draft
        <div class="tooltiptext">Preliminary musical composition </div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Tracking"> Tracking
        <div class="tooltiptext">Recording and monitoring progress</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Editing"> Editing
        <div class="tooltiptext">Refinement and manipulation of musical elements</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Sequencing and Programming"> Sequencing / Programming
        <div class="tooltiptext">Arranging musical elements in a specific order; Programming the base sound of digital devices</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Mixing"> Mixing
        <div class="tooltiptext">Balancing and blending audio tracks for a cohesive sound</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Mastering"> Mastering
        <div class="tooltiptext">Finalizing and optimizing the overall audio quality</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Post-production"> Post-production
        <div class="tooltiptext">Enhancing and refining audio after the initial recording</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Live performance"> Live performance
        <div class="tooltiptext">Execution of live performances</div>
      </label> <br>
	  <label class="tooltip"><input type="checkbox" name="task" value="Live sound engineering"> Live sound engineering
        <div class="tooltiptext">Mixing of live performances</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Restoration"> Restoration
        <div class="tooltiptext">Process of removing imperfections from sound recordings</div>
      </label> <br>
      <label class="tooltip"><input type="checkbox" name="task" value="Teaching"> Teaching
        <div class="tooltiptext">Imparting musical knowledge and skills to students</div>
      </label> <br>
	  <label class="tooltip"><input type="checkbox" name="task" value="Scientific research or measurements"> Scientific research/measuring
        <div class="tooltiptext">Making measurements or carrying out scientific experiments</div>
      </label> <br>
	  	  <label class="tooltip"><input type="checkbox" name="task" value="Other"> Other (Not listed here)
        <div class="tooltiptext">Other tasks not listed here</div>
      </label>
    </div>
  </form>


        <form id="context" class="form context" action="salvaDati.php" method="POST" align="left">
            <label for="context">Production type:</label> <br>
            <div align="left">
            <label><input type="checkbox" name="context"  value="Music (Acoustic)"> Acoustic music</label><br>
            <label><input type="checkbox" name="context"  value="Music (Electroacoustic)"> Electroacoustic music</label><br>
            <label><input type="checkbox" name="context"  value="Music (Electronic)"> Electronic music</label><br>
            <label><input type="checkbox" name="context"  value="Sampling"> Sampling</label><br>
            <label><input type="checkbox" name="context"  value="Sound art"> Sound art</label><br>
            <label><input type="checkbox" name="context"  value="Sound design"> Sound design</label><br>
            <label><input type="checkbox" name="context"  value="Foley"> Sound foley</label><br>
            <label><input type="checkbox" name="context"  value="Soundtrack"> Soundtrack</label><br>
            <label><input type="checkbox" name="context"  value="Speech recording"> Speech recording</label><br>
            <label><input type="checkbox" name="context"  value="Dubbing or Voice-over"> Voice dubbing / Voice-over</label><br>
			<label><input type="checkbox" name="context"  value="Other"> Other (Not listed here)</label><br>
            </div>
            <br>
             </form>



    </div>

    <div class="bottom-bar">
      <button id="copiaDiv">Add use-case</button>
      <button id="fine"  >End</button>
    </div>

    </div>



  <script>
  document.addEventListener('DOMContentLoaded', function () {
  var verticalOffset = 0;
  var cloneCounter = 1;
  var datiClonati = [];

  document.getElementById('copiaDiv').addEventListener('click', function () {
    var clonedModule = document.getElementById('moduloOriginale').cloneNode(true);
    var uniqueId = 'clonedModule_' + cloneCounter;
    cloneCounter++;
    clonedModule.id = uniqueId;

    // Rimuovi i valori dei checkbox durante la clonazione
    var clonedCheckboxes = clonedModule.querySelectorAll('input[type="checkbox"]');
    clonedCheckboxes.forEach(function (checkbox) {
      checkbox.checked = false;
    });

    var clonedData = {};

    var originalForms = clonedModule.querySelectorAll('.form');

    for (var i = 0; i < originalForms.length; i++) {
        var originalForm = originalForms[i];
        var formId = originalForm.id;
        var uniqueFormId = formId + '_' + uniqueId; // Crea un ID univoco per ogni form clonato

        originalForm.id = uniqueFormId; // Assegna l'ID univoco al form

        var formInputs = originalForm.querySelectorAll('input, select');
        var formValues = {};



        // Aggiungi l'ID del modulo e l'ID del form ai dati clonati
        formValues['module_id'] = uniqueId;
        formValues['form_id'] = uniqueFormId;

    }

    datiClonati.push(clonedData);

    var clonedModuleTop = parseInt(clonedModule.style.top) + verticalOffset;
    clonedModule.style.top = clonedModuleTop + 'px';
    document.body.appendChild(clonedModule);

    window.scrollTo(0, document.body.scrollHeight);

    });


    });

</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var UseCases = new Array();

    document.getElementById('fine').addEventListener('click', function () {
      var dati = {id:"", OS:"", DAW:"", Start:"", End:"", Task:[], Context:[]}



       // Funzione di validazione per verificare che tutti i campi siano compilati
        function validateForm(form) {
            var formInputs = form.querySelectorAll('input, select','input[type="checkbox"]');
            var formValid = true;

            for (var i = 0; i < formInputs.length; i++) {
                var input = formInputs[i];

                if (input.required && !input.value.trim()) {
                    formValid = false;
                    alert("Please fill in all fields before proceeding.");
                }
            }
            return formValid;
        }

      var body = document.getElementById("body");
      var moduliClone = body.querySelectorAll('.module');
      for (let j=0; j < moduliClone.length;j++){
        dati["id"]=j
        var moduliClone_form = moduliClone[j].querySelectorAll("form");
        for (var i = 0; i < moduliClone_form.length-2; i++) {
          form = moduliClone_form[i];

          // Verifica che tutti i campi del modulo siano compilati
          if (!validateForm(form)) {
                    return; // Interrompe l'invio se la validazione fallisce
                }

          let nodo = form.querySelectorAll('input, select');
          if (nodo[0].tagName == 'SELECT'){
            dati[nodo[0].name] = nodo[0].value;
          }
          else{
          dati["Start"] = nodo[0].value;
          dati["End"] = nodo[1].value;
          }
        }

        task = moduliClone_form[4].querySelectorAll('input[name="task"]:checked');
        task_selected = new Array();
        for (var i = 0; i < task.length; i++){
          task_selected.push(task[i].value);
        }

        contesto = moduliClone_form[5].querySelectorAll('input[name="context"]:checked');
        contesto_selected = new Array();
        for (var i = 0; i < contesto.length; i++){
          contesto_selected.push(contesto[i].value);
        }

        dati["Task"] = task_selected;
        dati["Context"] = contesto_selected;

        UseCases.push(dati)
        dati = {id:"", OS:"", DAW:"", Start:"", End:"", Task:[], Context:[]}
      }

      console.log(UseCases);

        const dati1JSON = localStorage.getItem('dati');
        console.log(dati1JSON)
        const PersonalData = JSON.parse(dati1JSON);


        const oggettoUnificato = {PersonalData , UseCases};



    var conferma = window.confirm("Are you sure you want to proceed?");
    if (conferma) {
        fetch('phpdati.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(oggettoUnificato),
        })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                // Reindirizza alla pagina desiderata
                window.location.href = 'pag3.php?r=<?php echo $ref ?>';
            })
            .catch((error) => {
                console.error('Errore durante la richiesta al server:', error);
            });
        } else {
            // L'utente ha cliccato su "Annulla" nella finestra di conferma
            console.log("Operazione annullata.");
    }


    });

  });
</script>




  </body>



</html>


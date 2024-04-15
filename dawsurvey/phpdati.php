<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recupera i dati dalla richiesta POST
    $datiJSON = file_get_contents('php://input');



    // Specifica il percorso della directory sul server
    $directory = __DIR__ . "/dati/"; // Utilizza __DIR__ per ottenere il percorso corrente

    // Crea il nome del file (puoi personalizzare il nome a tuo piacimento)
    $fileName = $directory . "dati_" . date("Ymd_His") . "_" . uniqid() . ".json";



    // Scrivi il contenuto nel file
    file_put_contents($fileName, $datiJSON);

    // Rispondi al client
    echo "Dati salvati con successo!";
} else {
    // Gestisci altri metodi HTTP o rispondi a richieste non valide
    http_response_code(405); // Metodo non consentito
    echo "Metodo non consentito";
}
?>

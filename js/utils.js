
function ajouterConfigUtil() {

    console.log("ajouter une config");

    reset();
    document.getElementById("materiel").value = "Une configuration complète \:\n"+

"1 Ordinateur portable avec processeurs I3- HP ou DELL avec écran 15 pouces/SSD 128 GO minimum/8 GO de RAM/Windows Pro/de préférence avec Prise RG45 sinon un DOC\n"+
"1 clavier\n"+
"1 souris\n"+
"2 écrans 24 pouces IIYAMA\n"+
"1 adaptateur carte vidéo externe (s’il y a qu’une prise HDMI sur le PC)";
}

function reset() {
    console.log("reset !");
    document.getElementById("materiel").value = "";
}
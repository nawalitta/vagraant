function selectGroup(groupId) {
    console.log(groupId);
    var enfants = document.getElementsByName('enfant')[0];
    for (var index = 1; index < enfants.childElementCount; index++) {
        var enfant = enfants[index];
        if(groupId == "aucun"){
            enfant.hidden = false;
        }else {
            if(enfant.id == groupId) {
                    enfant.hidden = false;
            }else{
                enfant.hidden = true;
            }
        }
    }
}

function selectActiviteFixeByEnfant(enfantId) {
    console.log(enfantId);
    var activites = document.getElementById('tableActiviteFixees').children[1].children;
    for (var index = 1; index < activites.length-1; index++) {
        var activite = activites[index];
        if(enfantId == "aucun"){
            activites[index].hidden = true;
        }else {
            if(activite.id == enfantId){
                activite.hidden = false;
            }else {
                activite.hidden = true;
            }

        }
    }
}
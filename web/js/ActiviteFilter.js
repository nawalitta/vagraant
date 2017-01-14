function selectEnfant(enfantId) {
    var activites = document.getElementsByName('tableActivite')[0];
    for (var index = 0; index < activites.childElementCount; index++) {
        var activiteId = activites[index];
        if(enfantId == "aucun"){
            activites[index].hidden = false;
        }else {
            activites[index].hidden = activiteId.value != enfantId;
        }
    }
    activites[0].hidden = false;
}
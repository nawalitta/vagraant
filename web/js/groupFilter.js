function selectGroup(groupId) {
    console.log(groupId);
    var enfants = document.getElementsByName('enfant')[0];
    for (var index = 0; index < enfants.childElementCount; index++) {
        var enfantId = enfants[index];
        if(groupId == "aucun"){
            enfants[index].hidden = false;
        }else {
            enfants[index].hidden = enfantId.value != groupId;
        }
    }
    enfants[0].hidden = false;
}
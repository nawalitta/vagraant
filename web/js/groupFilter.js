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
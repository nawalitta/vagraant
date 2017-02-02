function ajouterGroupe(nomGroupe) {
    console.log(nomGroupe);
    $.ajax({
        type: "POST",
        url: window.location.origin + "/gpac/web/app_dev.php/groupe/edit/null/" + nomGroupe,
        data: nomGroupe,
        success: function (newGroupeId) {
            var selectGroup = $('#ressourcebundle_enfant_groupe');
            selectGroup.append($("<option>" + nomGroupe + "</option>").val(newGroupeId));
            console.log(selectGroup);
            $('#myModal').modal('toggle');
        }
    });
}

function ajouterTypeRessource(nomTypeRessource) {
    console.log(nomTypeRessource);
    $.ajax({
        type: "POST",
        url: window.location.origin + "/gpac/web/app_dev.php/typeRessource/edit/null/" + nomTypeRessource,
        data: nomTypeRessource,
        success: function (newTypeRessourceId) {
            var selectTypeRessource = $('#ressourcebundle_ressource_typeRessource');
            selectTypeRessource.append($("<option>" + nomTypeRessource + "</option>").val(newTypeRessourceId));
            console.log(selectTypeRessource);
            var myModal = $('#myModal');
            console.log(myModal);
            myModal.modal('toggle')
        }
    });
}
function ajouterTypeActivite(nomTypeActivite) {
    console.log(nomTypeActivite);
    $.ajax({
        type: "POST",
        url: window.location.origin + "/gpac/web/app_dev.php/typeActivite/edit/null/" + nomTypeActivite,
        data: nomTypeActivite,
        success: function (newTypeActiviteId) {
            var selectTypeRessource = $('#activitebundle_activite_typeActivite');
            selectTypeRessource.append($("<option>" + nomTypeActivite + "</option>").val(newTypeActiviteId));
            console.log(selectTypeRessource);
            $('#myModal').modal.modal('toggle');
        }
    });
}
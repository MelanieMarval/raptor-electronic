if (document.getElementById("admin") !== null) {
    let admin = document.getElementById("admin").innerText;
    let showModal = document.getElementById("showModal").innerText;

    if (!showModal.localeCompare("true")) {
        $('#deleteAdminModal').modal('show');

        document.getElementById("modalBody").innerText =
            '¿Esta seguro que desea eliminar el administrador '+ admin+' ?';
    }
}
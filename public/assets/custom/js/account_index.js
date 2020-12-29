if ($('#account_index').length) {
    $(document).ready(function () {

        requestAccount()
    });

    //busca todos os usuarios
    function requestAccount() {
        tableArea = $(`#accountTable`).DataTable({
            sPaginationType: "full_numbers",
            destroy: true,
            responsive: false,
            ajax: {
                url: `${BASE_URL}/account/getAccount`,
                dataType: "json",
                cache: false,
                dataSrc: (data) => {
                    return data || []
                },
                error: (e) => {
                    $("#btnNew").removeAttr("disabled").find("i").removeClass("fa-spinner fa-spin").addClass("fa-plus")
                },
                beforeSend: () => {
                    $("#btnNew").attr("disabled", true).find("i").removeClass("fa-plus").addClass("fa-spinner fa-spin")
                },
                complete: () => {
                    $("#btnNew").removeAttr("disabled").find("i").removeClass("fa-spinner fa-spin").addClass("fa-plus")
                }
            },
            order: [
                [0, 'desc']
            ],
            columns: [{
                data: "id",
                class: "text-left",
            },
            {
                data: "description",
                class: "text-left",
            },
            {
                class: "text-center",
                orderable: false,
                data: null,
                defaultContent: ``,
                render: function (data, type, row, meta) {
                    return `
                        <div class="btn-group btn-group-sm" role="group">
                            <a class="btn btn-warning text-white"><i class="fas fa-pen"></i></a>
                            <a class="btn btn-danger text-white" onclick="deleteUser('${data.id}')"><i class="fas fa-trash-alt"></i></a>
                         </div>`
                }
            }
            ]
        })
    }

    function deleteAccount(){
        
    }
}
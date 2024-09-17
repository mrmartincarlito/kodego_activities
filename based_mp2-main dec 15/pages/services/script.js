
//@TODO Change api variable api path
//@var change variable name value
//const SERVICES_API =  "../../api-oop/routes/services.php";
const SERVICES_API =  "../../api-dbh/services.php";

/** Actual Functions */

/**
 * index = get all informations
 * show?id = get 1 information only
 * store = saving new data or resource
 * destroy?id = delete a resource
 * update?id new resource = to update new resource
 */

//Get all informations

let serviceDataTable;
index();
function index()
{
    $.blockUI();
    serviceDataTable = $("#records").DataTable({
        processing : true,
        responsive: true,
        ajax : {
            url : SERVICES_API + "?index",
            dataSrc : function (response) {
                let return_data = new Array();
                console.log(response);
                for (let i = 0; i<response.records.length; i++) 
                {
                    return_data.push({
                        //@TODO
                        //@var change keys depending on the table
                        select : "<input type='checkbox' value='" + response.records[i].id + "' class='selected_service' />",
                        id : response.records[i].id,
                        name :  response.records[i].name,
                        price :  response.records[i].price,
                        date_time : response.records[i].date_time,
                        action : "<button onclick='destroy(" +response.records[i].id+ ")'>DELETE</button>"
                    });
                }

                return return_data;
            },
            complete : function() {
                $.unblockUI()
                //@TODO
                //@var change databale 
                $('#records tbody').on('dblclick', 'tr', function() {
                    let data = $('#records')
                        .DataTable()
                        .row(this)
                        .data()
                    
                    
                    $("#idToBeDisplay").html(data.id)
                    $("#name").val(data.name);
                    $("#price").val(data.price);
                    $("#modalClickerShow").click();

                    $("#saveButton").hide();
                    $("#updateButton").show();
                    $("#showId").show();
                });
            },
        },
        columns : [
            //@TODO
            //@var change data keys depending on the table column declared above
            { data : 'select' },
            { data : 'id' },
            { data : 'name' },
            { data : 'price' },
            { data : 'date_time' },
            { data : 'action' },
        ],
        dom : 'lBfrtip',
        buttons : [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ]
    });
}

/**
 * 
 * @param {*} id 
 */
function show(id)
{
    //@var change variable SERVICES_API
    $.ajax({
        "url" : SERVICES_API + "?show&id=" + id,
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                //@TODO same with index
                /**
                 * Change display depending on your needs
                 */
                //jsonParse.records[i].id
               //jsonParse.records[i].id
               tr += "<tr>" +
               "<td>" + jsonParse.records[i].id + "</td>" + 
               "<td>" + jsonParse.records[i].username + "</td>" + 
               "<td>" + jsonParse.records[i].date_time + "</td>" + 
               "<td><button onclick='update(" +jsonParse.records[i].id+ ")'>SAVE EDIT</button><button onclick='show(" +jsonParse.records[i].id+ ")'>SHOW</button>&nbsp;"+
               "<button onclick='destroy(" +jsonParse.records[i].id+ ")'>DELETE</button></td>" + 
           "</tr>";
            }

            /**
             * Change element to be display
             */
            $("#records").html(tr)
        }
    })
}

//Saving a record
function store()
{
    $.blockUI();
    /**
     * Change json collections
     */
    //@TODO change json collection
    let serviceForm = {
		name : $("#name").val(),
        price : $("#price").val()
	}

    $.ajax({
        "url" : SERVICES_API ,
        "type" : "POST",
        "data" : "store=" + JSON.stringify(serviceForm),
        "success" : function(response) {

            let responseJSON = JSON.parse(response)
            $.unblockUI()

            alert(responseJSON.description);

            serviceDataTable.ajax.reload(null, false);
            
            $("#modalClickerClose").click();

            return false;
        }
    })

    return false;
}

function destroy(id)
{
    $.blockUI();

    if (!confirm("Are you sure you want to delete?"))
    {
        return;
    }

    $.ajax({
        "url" : SERVICES_API ,
        "type" : "POST",
        "data" : "destroy&id=" + id,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)
            $.unblockUI()

            alert(responseJSON.description);

            serviceDataTable.ajax.reload(null, false);
            
            return false;
        }
    })
}

function update(id)
{
    $.blockUI();
    
    //@TODO Change json collections
    let serviceForm = {
		name : $("#name").val(),
        price : $("#price").val()
	}

    $.ajax({
        "url" : SERVICES_API ,
        "type" : "POST",
        "data" : "update=" + JSON.stringify(serviceForm) + "&id=" + id,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)
            $.unblockUI()

            alert(responseJSON.description);

            serviceDataTable.ajax.reload(null, false);
            
            return false;
        }
    })
}

/** End Actual Functions */

/**
 * Customize function
 */
function resetButton()
{
    $("#saveButton").show();
    $("#updateButton").hide();
    $("#showId").hide();
}

function doUpdate()
{
    let id = $("#idToBeDisplay").html();

    update(id)

    $("#modalClickerClose").click();
}

function getSelected()
{
    let selectedValues = [];

    $(".selected_service:checked").each(function() {
        selectedValues.push($(this).val());
    })

    
    $.blockUI();

    if (!confirm("Are you sure you want to delete this records?"))
    {
        return;
    }

    $.ajax({
        "url" : SERVICES_API ,
        "type" : "POST",
        "data" : "bulkDestroy&id=" + JSON.stringify(selectedValues),
        "success" : function(response) {

            let responseJSON = JSON.parse(response)
            $.unblockUI()

            alert(responseJSON.description);

            serviceDataTable.ajax.reload(null, false);
            
            return false;
        }
    })
}
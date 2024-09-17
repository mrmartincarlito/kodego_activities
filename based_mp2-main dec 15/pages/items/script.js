
//@TODO Change api variable api path
//@var change variable name value
const ITEMS_API =  "../../api-dbh/items.php";

/** Actual Functions */

/**
 * index = get all informations
 * show?id = get 1 information only
 * store = saving new data or resource
 * destroy?id = delete a resource
 * update?id new resource = to update new resource
 */

//Get all informations
index();
function index()
{
    //@TODO
    //@var change variable
    $.ajax({
        "url" : ITEMS_API + "?index",
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                //@TODO Change display iterations
                //jsonParse.records[i].id
                tr += "<tr>" +
                    "<td>" + jsonParse.records[i].id + "</td>" + 
                    "<td>" + jsonParse.records[i].name + "</td>" + 
                    "<td>" + jsonParse.records[i].description + "</td>" + 
                    "<td>" + jsonParse.records[i].uom + "</td>" + 
                    "<td>" + jsonParse.records[i].price + "</td>" + 
                    "<td>" + jsonParse.records[i].date_time + "</td>" + 
                    "<td><button onclick='goToView(" +jsonParse.records[i].id+ ")'>SHOW</button>&nbsp;"+
                    "<button onclick='destroy(" +jsonParse.records[i].id+ ")'>DELETE</button></td>" + 
                "</tr>";
            }

            /**
             * Change element to be display
             * @var change records to your html id
             */
            $("#records").html(tr)
        }
    })
}

/**
 * 
 * @param {*} id 
 */
function show(id)
{
    //@var change variable ITEMS_API
    $.ajax({
        "url" : ITEMS_API + "?show&id=" + id,
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)

            //@TODO 
            //@var change element design if needed
            $("#name").val(jsonParse.records.name);
            $("#description").val(jsonParse.records.description);
            $("#uom").val(jsonParse.records.uom);
            $("#price").val(jsonParse.records.price);
        }
    })
}

//Saving a record
function store()
{

    /**
     * Change json collections
     */
    //@TODO change json collection
    //@var change variable name and value
    let itemsForm = {
		name : $("#name").val(),
        description : $("#description").val(),
        uom : $("#uom").val(),
        price : $("#price").val(),
	}

    $.ajax({
        "url" : ITEMS_API ,
        "type" : "POST",
        "data" : "store=" + JSON.stringify(itemsForm), //@var dont forget to change
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
            return false;
        }
    })

    return false;
}

function destroy(id)
{

    if (!confirm("Are you sure you want to delete?"))
    {
        return;
    }

    $.ajax({
        "url" : ITEMS_API ,
        "type" : "POST",
        "data" : "destroy&id=" + id,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
            return false;
        }
    })
}

function update(id)
{
    //@TODO Change json collections
    let itemsForm = {
		name : $("#name").val(),
        description : $("#description").val(),
        uom : $("#uom").val(),
        price : $("#price").val(),
	}

    $.ajax({
        "url" : ITEMS_API ,
        "type" : "POST",
        "data" : "update=" + JSON.stringify(itemsForm) + "&id=" + id,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
            return false;
        }
    })
}

/** End Actual Functions */

/**
 * insert customize
 */

function goToView(id)
{
    window.location.href = 'view.html?id=' + id;
}
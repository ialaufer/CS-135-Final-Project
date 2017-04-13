
function getData() {
$.getJSON('http://localhost:8888/categories.json', function(data) {
        var output="<table class='table table-hover'>";

        for (var i in data.categories) {
            output+= "<tr>"
            output+=  "<td>" + "<img width='20%' src='..public/img/" + data.categories[i].icon + "'/>" + " </td> " +
                      "<td>" + data.categories[i].type + " </td> " +  
                      "</tr>" ;
        }

        output+="</table>";
        $("#placeholder").html(output );;
        peopleArray = data;
    });
}
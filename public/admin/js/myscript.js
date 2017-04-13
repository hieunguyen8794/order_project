$("div.alert").delay(3000).slideUp();

function xacnhanxoa(msg) {
    if (window.confirm(msg)) {
        return true;
    }
    return false;
}
var counter = 2;

$("#addrow").click(function() {
    d = document.getElementById("select1");
    var str = d.outerHTML;
    var str2 = "select".concat(counter);
    var res = str.replace("select1", str2);
    var txt = "<tr><td>" + res + "</td><td>my</td><td>20.000 VNĐ</td><td>60.000 VNĐ</td><td><input type='button' class='ibtnDel btn btn-md btn-danger'  value='Delete'></td></tr>";
    $('#customers tr:last').before(txt);
    $('#' + str2).selectpicker("refresh");
    counter++;
});
$("table.datatable").on("click", ".ibtnDel", function(event) {
    $(this).closest("tr").remove();
});
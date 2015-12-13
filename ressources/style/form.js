/**
 * Created by enzo on 10/12/15.
 */

function populate(val){
    alert(val);
    $.ajax({
        type: 'post',
        url: 'selectOption.php',
        data: {
            get_option: val
        },
        success: function (feedback){
            document.getElementById("size").innerHTML=feedback;
        }
    });

}
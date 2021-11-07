function _(name, count) {
	var index = '<div class="wrap"><h1>' + name + '</h1><div class="wrsel"><form id="myform" method="POST"><table><td><input type="text" name="url" id="url" value="" placeholder="http://"></td><td><button><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0024 4.74399C12.6839 5.06949 12.6839 5.59538 13.0046 5.91866L16.645 9.59768L16.729 9.672C17.0505 9.91963 17.5093 9.89384 17.8013 9.59546C17.9606 9.43271 18.0403 9.22125 18.0403 9.00979C18.0403 8.79611 17.9606 8.58354 17.7992 8.42079L14.1599 4.74177L14.0758 4.66771C13.7542 4.42092 13.2944 4.44663 13.0024 4.74399ZM3.7156 11.176C3.31232 11.2272 3 11.5767 3 11.9998C3 12.4582 3.36655 12.8302 3.81818 12.8302H18.2007L13.0047 18.0813L12.9312 18.1661C12.6862 18.4909 12.7105 18.9576 13.0025 19.256C13.3211 19.5804 13.8393 19.5815 14.1589 19.2582L20.7589 12.5877L20.8317 12.5042C20.9424 12.3581 21 12.1797 21 11.9998C21 11.8924 20.9793 11.785 20.9378 11.6832C20.8113 11.3721 20.5135 11.1695 20.1818 11.1695H3.81818L3.7156 11.176Z" fill="#FFF"/></svg></button></td></table></form></div><small class="left">' + count + ' Croped</small><small class="right">Free API with POST method in <a title="Free API" href="/api.php">Here</a>!</small><div id="notify"></div>';
	$("#index").append(index).fadeIn(600);
}

$(document).ready(function() {
    $("#myform").submit(function(event) {

        if (!$("#url").val()) {
            tod.warning({
                status: 'Caution',
                message: 'Where is the URL ??',
                align: 'topright'
            });
        } else {

            event.preventDefault();
            $(this).ajaxSubmit({
                url: '../../../index.php',

                beforeSubmit: function() {
                    $("#notify").fadeOut(600);
                    $("svg").css("visibility", "hidden");
                    $("button").addClass("loader");
                },

                error: function(response, status, e) {
                    tod.danger({
                        status: 'Error',
                        message: 'Something went wrong',
                        align: 'topright'
                    });
                },

                complete: function(xhr) {
                    setTimeout(function() {
                        $("svg").css("visibility", "visible");
                        $("button").removeClass("loader");
                        $("#notify").html(xhr.responseText).fadeIn(600);
                    }, 700);
                },
                resetForm: true
            });
        }
        return false;
    });
});

function cp() {
    var res = $.copy($(".layer"));
    tod.success({
        status: "Copied!",
        message: "Link was copied!",
        align: "topright"
    });
}

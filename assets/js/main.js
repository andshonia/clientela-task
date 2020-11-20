let checkedService = "";
let checkedInnerService = "";

function removePopup() {
    $(".popup-item").remove();
    setTimeout(function (){
    	location.reload()
    }, 1000)
}

//Enable/Desable confirm btn
function enableDisable() {
    if (checkedInnerService.length > 0 && checkedService.length > 0 && $("#locationChecked").val() === "true") {
        $(".confirm-btn").prop("disabled", false)
    } else {

        $(".confirm-btn").prop("disabled", true)
    }
}

$(function() {


	//Service chekers
    $(".service-check").on("change", function() {

        $(".serviceInner-check").prop("checked", false);
        if ($(this).is(":checked")) {

            $(".sub-btn-wrapper").slideUp();
            $(".service-check").prop("checked", false);



            checkedService = $(this).parent().find(".label").text().trim();
            $(this).prop("checked", true);
            $(this).parent().parent().find(".sub-btn-wrapper").slideDown();

        } else {

            $(this).prop("checked", false);
            $(this).parent().parent().find(".sub-btn-wrapper").slideUp();
            checkedService = "";

        }
        enableDisable()
    });


    //Service sub checkers
    $(".serviceInner-check").on("change", function() {
        if ($(this).is(":checked")) {
            $(".serviceInner-check").prop("checked", false);

            $(this).prop("checked", true);
            checkedInnerService = $(this).parent().find(".value").text().trim();
        } else {
            $(this).prop("checked", false);
            checkedInnerService = ""
        }
        enableDisable()
    });


    //Location checkers
    $(".location-check").on("change", function() {
        if ($(this).is(":checked")) {
            $(".location-check").prop("checked", false);
            $(".location-item__body").slideUp();
            $(".location-item").removeClass("active");
            $("#locationChecked").val("true")


            $(this).parent().next().slideDown();
            $(this).parent().parent().addClass("active");
            $(this).prop("checked", true);
        } else {
            $(this).prop("checked", false);
            $("#locationChecked").val("false")
            $(this).parent().next().slideUp();
            $(this).parent().parent().removeClass("active");
        }
        enableDisable()
    });


    //Message popup

    $(".confirm-btn").on("click", function() {
        $("body").append(`<div class="popup-item">
							<div class="popup-body">
								<h3 id="messageContent">
									Congratulations, you've successfully submitted ${checkedInnerService} ${checkedService} request
								</h3>
								<div class="okay-btn" onclick="removePopup()">
									Ok
								</div>
						</div>
					</div>
			`);
    }); 
});
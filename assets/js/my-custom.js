function selectCity(stateId)
{
    if(stateId!="-1")
    {
        loadCityByStateId(stateId);
    }
    else
    {
        $("#city_dropdown").html("<option value='-1'>Select city</option>");
    }
}

function loadCityByStateId(stateId)
{
    var dataString = '&loadId='+ stateId;

    $.ajax({
        type: "POST",
        url: "http://localhost/Steel/AjaxCallController/loadCityByStateId",
        data: dataString,
        cache: false,
        success: function(result)
        {
            $("#city_dropdown").html("<option value='-1'>انتخاب کنید</option>");
            $("#city_dropdown").append(result);

        }

    });
}
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

function selectSubCategory(CategoryId)
{
    if(CategoryId!="-1")
    {
        loadSubCategoryByCategoryId(CategoryId);
    }
    else
    {
        $("#subCategory").html("<option value='-1'>انتخاب کنید</option>");
    }
}

function loadSubCategoryByCategoryId(CategoryId)
{
    var dataString = '&loadId='+ CategoryId;

    $.ajax({
        type: "POST",
        url: "http://localhost/Steel/AjaxCallController/loadSubCategoryByCategoryId",
        data: dataString,
        cache: false,
        success: function(result)
        {
            $("#subCategory").html("<option value='-1'>انتخاب کنید</option>");
            $("#subCategory").append(result);

        }

    });
}

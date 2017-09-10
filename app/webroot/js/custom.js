$(document).ready(function(){
    $('#UserBuildingId').change(function (e) { 
        $.ajax({
            type: "GET",
            url: "/sapanapark/flats/getFlatsByBuildingId/"+$('#UserBuildingId').val(),
            dataType: "JSON",
            success: function (flats) {
                $('#UserFlatId').find('option').remove().end();
                $.each(flats, function (i, flat) {
                    $('#UserFlatId').append($('<option>', { 
                        value: flat.Flat.id,
                        text : flat.Flat.name 
                    }));
                    console.log(flat.Flat.id);
                });

                console.log(flats);
            }
        });
    });
})
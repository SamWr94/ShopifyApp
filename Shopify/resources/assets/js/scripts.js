$.ajaxSetup({
    headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

$(document).ready(function(){
    var startdate = $('.startdate').flatpickr({
        enableTime: true,
        time_24hr: true,
        allowInput: true,
        altInput: true,
        altFormat: "d/m/Y H:i",
        dateFormat: 'Y-m-d H:i',
        mode: "range",
        altInputClass: 'flat-override',
        onChange:function(selectedDates){
            var _this = this;
            var dateArr= selectedDates.map(function(date){return _this.formatDate(date,'Y-m-d H:i');});
            $('input[name="startdate"]').val(dateArr[0]);
            $('input[name="enddate"]').val(dateArr[1]);
        },
    });
});


/**
 * Loads a modal via Ajax
 * @param title
 * @param name
 * @param data
 * @param callback to be implemented after load
 */

function getModalAjax(title, name, data, callback) {
    callback = (!callback) ? function(){} : callback;
    $('#myModal .load_modal').load('/modals/'+name, data, callback);
    $('.modal-header .modal-title').html(title);
}

/**
 * This function takes id of html element, path of image and flag to show and hide image on mousehover
 * @param string id
 * @param bool show
 * @param string img
 * @returns {undefined}
 */
function ShowPicture(id, show, img) {
    if (show=="1"){
        document.getElementById(id).style.visibility = "visible";
        document.getElementById(id).childNodes[1].src = img;
    }
    else if (show=="0"){
        document.getElementById(id).style.visibility = "hidden";
    }
}

/**
 * Standard delete button listener to bring up confirm dialog box.
 */

$('.delete-button').on('click', function(e){
    e.preventDefault();
    var route = $(this).data('route');
    getModalAjax(
        $(this).data('title')+"'"+$(this).data('name')+"'?",
        "confirm_dialogue",
        { "action" : route }
    );
});

$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    html: true
});

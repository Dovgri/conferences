import './bootstrap';
import flatpickr from "flatpickr";

$(function(){
  $(document).on('click','#logout-btn',function(e){
    $('#logout-form').trigger('submit');
  })
})

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.datepicker').forEach(function (item) {
        flatpickr(item, {
            minDate: 'today',
            mode: 'single'
        });
    });
});

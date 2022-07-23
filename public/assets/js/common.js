    
var toast = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

function toaster(msg,status=true) {
    let icon = status == 'false'? 'error' : 'success';
    toast.fire({
        title: msg,
        icon: icon
    });
}

window.addEventListener('viewModal', event => { 
    $("#viewModal").modal('show');
});

window.addEventListener('alert', event => { 
    toaster(event.detail.message,event.detail.status);
});

window.addEventListener('viewDelete', event => {
    event.preventDefault();
    Swal.fire({
    text: 'Are you sure you want to delete this record.?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteRecrod',event.detail.id)
        }
    })
});

$(".sign_me_out").click(function (e) { 
    e.preventDefault();
    Swal.fire({
    text: 'Are you sure you want to logout?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Logout'
    }).then((result) => {
    if (result.isConfirmed) {
        window.location.replace($(this).attr('href'));
    }
    })
});


let darkClass = localStorage.getItem('dark-mode');
if(darkClass){
    $('body').addClass(darkClass);
    // $('.modal-content').addClass('top_dark');
    $(".setting_switch .btn-darkmode").prop('checked',true);
}
let fixnavbarClass = localStorage.getItem('sticky-top');
if(fixnavbarClass){
    $('#page_top').addClass(fixnavbarClass);
    $(".setting_switch .btn-fixnavbar").prop('checked',true);
}
let headerDark = localStorage.getItem('top_dark');
if(headerDark){
    $('#page_top').addClass(headerDark);
    $(".setting_switch .btn-pageheader").prop('checked',true);
}
let mainsidebar = localStorage.getItem('mainsidebar');
if(mainsidebar){
    $('#header_top').addClass(mainsidebar);
    $(".setting_switch .btn-min_sidebar").prop('checked',true);
}
let sidebar_dark = localStorage.getItem('sidebar_dark');
if(sidebar_dark){
    $('body').addClass(sidebar_dark);
    $(".setting_switch .btn-sidebar").prop('checked',true);
}
let iconcolor = localStorage.getItem('iconcolor');
if(iconcolor){
    $('body').addClass(iconcolor);
    $(".setting_switch .btn-iconcolor").prop('checked',true);
}
let box_shadow = localStorage.getItem('box_shadow');
if(box_shadow){
    $('.card').addClass(box_shadow);
    $(".setting_switch .btn-boxshadow").prop('checked',true);
}

let gradient = localStorage.getItem('gradient');
if(gradient){
    $('body').addClass(gradient);
    $(".setting_switch .btn-gradient").prop('checked',true);
}

let rtl = localStorage.getItem('rtl');
if(rtl){
    $('body').addClass(rtl);
    $(".setting_switch .btn-rtl").prop('checked',true);
}

let boxlayout = localStorage.getItem('boxlayout');
if(boxlayout){
    $('body').addClass(boxlayout);
    $(".setting_switch .btn-boxlayout").prop('checked',true);
}
let font_setting_val = localStorage.getItem('font_setting');
if(font_setting_val){
    $('body').addClass(font_setting_val);
    $("font_setting ").prop('checked',true);
    $(".font_setting input[name=font][value=" + font_setting_val + "]").attr('checked', 'checked');
}


$(".setting_switch .custom-switch-input").on('change', function () {
    storageVar = $(this).data('id');
    localStorage.setItem(storageVar,'');
    if(this.checked){
        localStorage.setItem(storageVar,storageVar);
    }
});
$(".font_setting input").on('change', function () {
    font_setting = $(this).val();
    localStorage.setItem('font_setting','');
    if(this.checked){
        localStorage.setItem('font_setting',font_setting);
    }
});

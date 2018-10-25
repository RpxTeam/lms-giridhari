/*
 * Remove loader
 *
 */
$(window).on('load', function() {
    setTimeout(function() {
        $('#loader').fadeOut();
    }, 2000);
});

/**
 * Generate Certificate Im
 * 
 */
var canvas = document.getElementById('certificate');
function exportCertificate() {
    var imgData = canvas.toDataURL("image/jpeg", 1.0);
    var pdf = new jsPDF();

    pdf.addImage(imgData, 'JPEG', 0, 0);
    pdf.save("download.pdf");
}

window.onload = function(){
    var context = canvas.getContext('2d');
    var imageObj = new Image();
    imageObj.onload = function(){
        context.drawImage(imageObj, 0, 0);
        context.font = "16pt Calibri";
        context.fillStyle = '#000';
        context.fillText(document.getElementById("name").innerHTML, 150, 150);
        context.fillText(document.getElementById("title").innerHTML, 150, 180);
        context.fillText(document.getElementById("date").innerHTML, 150, 210);
        context.fillText(document.getElementById("instructor").innerHTML, 150, 240);
    };
    
    // imageObj.src = document.getElementById("img").src; 
    imageObj.src = "https://uniqlo.scene7.com/is/image/UNIQLO/goods_55_404137?$prod$"; 
};


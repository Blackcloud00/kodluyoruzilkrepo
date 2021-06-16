(function(){
    var percent = document.getElementById('percent');
    var pcounter = 1;
    var progress = document.getElementById('progress');
    var prcounter = 5;
    var id = setInterval(frame, 50);
    function frame() {
        if(pcounter == 100) {
            clearInterval(id);
        } else {
            pcounter +=1;
            prcounter +=5;
            percent.innerHTML = pcounter+'%';
            progress.style.width = prcounter +'px';

            //console.log(pcounter);
            console.log(prcounter);
        }
    }
})();
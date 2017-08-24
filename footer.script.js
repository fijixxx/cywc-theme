(function () {
    'use strict';

    var button = document.getElementById('button');
    var cover = document.getElementById('cover');
    var tapmenu = document.getElementById('tapmenu');

    button.addEventListener('click',function(){
        button.classList.toggle("rotate");
        cover.classList.toggle("close");
        tapmenu.classList.toggle("close");
    }, false);

})();
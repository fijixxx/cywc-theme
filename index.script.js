window.addEventListener('scroll', function(){
    var pageY = window.pageYOffset;
    var scrollY = document.getElementById('eyecatch').clientHeight;
    if (pageY  - 50 > scrollY){
        document.getElementById('side').classList.add('fixed');
    }else if(pageY - 50 < scrollY){
        document.getElementById('side').classList.remove('fixed');
    }
}, false);

window.addEventListener('scroll', function () {
    var sideX = document.getElementById('article');
    var rect = sideX.getBoundingClientRect();
    var sidebar = document.getElementById('side');
    sidebar.style.top = '0px';
    sidebar.style.left = rect.left + rect.width + 'px';
}, false);

window.addEventListener('scroll', function(){
    var pageY = window.pageYOffset;
    var scrollY = document.getElementById('eyecatch').clientHeight;
    var container = document.getElementById('container');
    if (pageY  > scrollY){
        document.getElementById('header').classList.add('fixed');
        container.style.paddingTop = document.getElementById('header').clientHeight + 'px';
    }else if(pageY  < scrollY){
        document.getElementById('header').classList.remove('fixed');
        container.style.paddingTop = '0px';
    }
}, false);
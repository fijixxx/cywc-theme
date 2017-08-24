window.addEventListener('scroll', function(){
    var pageY = window.pageYOffset;
    var scrollY = document.getElementById('eyecatch_sing').clientHeight;
    if (pageY - 50 > scrollY){
        document.getElementById('side').classList.add('fixed');
    }else if(pageY - 50 < scrollY){
        document.getElementById('side').classList.remove('fixed');
    }
}, false);

window.addEventListener('scroll', function () {
    var sideX = document.getElementById('article_singular');
    var rect = sideX.getBoundingClientRect();
    var sidebar = document.getElementById('side');
    sidebar.style.top = '0px';
    sidebar.style.left = rect.left + rect.width + 'px';
}, false);

window.addEventListener('scroll', function(){
    var pageY = window.pageYOffset;
    var scrollY = document.getElementById('eyecatch_sing').clientHeight;
    var container = document.getElementById('container');
    if (pageY - 50 > scrollY){
        document.getElementById('header').classList.add('fixed');
        container.style.paddingTop = document.getElementById('header').clientHeight + 'px';
    }else if(pageY - 50 < scrollY){
        document.getElementById('header').classList.remove('fixed');
        container.style.paddingTop = '0px';
    }
}, false);
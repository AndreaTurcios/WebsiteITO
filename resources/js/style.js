let i = 0;

let leermas = document.querySelector('#leerMas').addEventListener('click', function(){
    
    if(!i){
        document.getElementById('identificador').style.display = 'inline';
        document.getElementById('leerMas').innerHTML = 'Leer menos';
        i = 1;
    }else{
        document.getElementById('identificador').style.display = 'none'
        document.getElementById('leerMas').innerHTML = 'Leer mas';
        i = 0;
    }
})


let a = 0;

function funAplicacion (){
    document.getElementById('text-per').style.display = 'none'
    document.getElementById('text-html').style.display = 'none'
    document.getElementById('text-off').style.display = 'none';
    document.getElementById('text-py').style.display = 'none';
    document.getElementById('text-por').style.display = 'none';
    document.getElementById('text-ap').style.display = 'inline';
}
function funPersonalizado (){
    document.getElementById('text-ap').style.display = 'none'
    document.getElementById('text-html').style.display = 'none'
    document.getElementById('text-off').style.display = 'none';
    document.getElementById('text-py').style.display = 'none';
    document.getElementById('text-por').style.display = 'none';
    document.getElementById('text-per').style.display = 'inline';
}
function funHtml (){
    document.getElementById('text-ap').style.display = 'none'
    document.getElementById('text-per').style.display = 'none'
    document.getElementById('text-off').style.display = 'none';
    document.getElementById('text-py').style.display = 'none';
    document.getElementById('text-por').style.display = 'none';
    document.getElementById('text-html').style.display = 'inline';
}

function funPortales (){
    document.getElementById('text-per').style.display = 'none'
    document.getElementById('text-html').style.display = 'none'
    document.getElementById('text-ap').style.display = 'none'
    document.getElementById('text-off').style.display = 'none';
    document.getElementById('text-py').style.display = 'none';
    document.getElementById('text-por').style.display = 'inline';
}
function funOfftshore (){
    document.getElementById('text-ap').style.display = 'none'
    document.getElementById('text-html').style.display = 'none'
    document.getElementById('text-per').style.display = 'none'
    document.getElementById('text-py').style.display = 'none';
    document.getElementById('text-por').style.display = 'none';
    document.getElementById('text-off').style.display = 'inline';
}
function funPython (){
    document.getElementById('text-ap').style.display = 'none'
    document.getElementById('text-html').style.display = 'none'
    document.getElementById('text-per').style.display = 'none'
    document.getElementById('text-off').style.display = 'none';
    document.getElementById('text-por').style.display = 'none';
    document.getElementById('text-py').style.display = 'inline';
}

function funCerrar (){
    document.getElementById('text-ap').style.display = 'none'
    document.getElementById('text-html').style.display = 'none'
    document.getElementById('text-per').style.display = 'none'
    document.getElementById('text-off').style.display = 'none';
    document.getElementById('text-por').style.display = 'none';
    document.getElementById('text-py').style.display = 'none';
}
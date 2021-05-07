//Url vaut l'url à partir du /
var url = window.location.pathname;
console.log(url);

//En fonction de la valeur de Url,
//On enleve l'attribut id sur tous les '#responsive li a',
//On met id='current' sur 'a' qui a la class='accueil'
//On met sur le li a qui a la classe='accueil' un background color vert
if (url == "/")
{
   $('#responsive li a').each(function(a){  $(this).removeAttr('id')  });
   $("a[class='accueil']").attr('id', 'current');
   $("li a[class='accueil']").css('background-color', '#26ae61');
}

if ( (url == "/annonce") || (url != "/" && url != "/login") )
{
    $('#responsive li a').each(function(a){  $(this).removeAttr('id')  });

    $("a[class='annonce']").attr('id', 'current');

    $("li a[class='annonce']").css('background-color', '#26ae61');

    $("ul li[id='1'] a").css('background-color', '#26ae61');
}

if (url == "/login")
{
    $("li[id='hoverrable'] a[class='accueil']").removeAttr('id');
}

//On définit searchParams qui va valoir : page='le numero de la page actuelle' (pagination dans la route /annonce)
let searchParams = new URLSearchParams(window.location.search);

//On définit page qui cherche si l'url contient l'attribut 'page'
let page = searchParams.has('page');

//On définit param qui cherche la valeur de l'attribut 'page' de l'url
let param = searchParams.get('page');

//Si la variable 'page' return true
if (page)
{
    console.log(param);

    $("ul li a[class='current-page']").each(function(a){  $(this).css('background-color', '#505050')  });

    //On met un background color vert à la balise 'a' du numéro de pagination équivalent à l'url
    $("ul li[id='"+ param +"'] a").css('background-color', '#26ae61');
    
}


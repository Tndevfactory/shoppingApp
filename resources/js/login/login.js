import anime from 'animejs/lib/anime.es.js';

export function loginForm ()
{
    let loginForm = document.querySelector( "#login-form" )
    if ( loginForm != null )
    {

        
        anime( {
            targets: loginForm,
            translateY: [ '-30%', '0%' ],
            duration: 300,
            easing: 'easeInOutSine',
        } ) ;
    }
    

    
}



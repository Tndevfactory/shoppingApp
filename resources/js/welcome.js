/**
 * Created by barho on 14/08/2021.
 */



import anime from "animejs/lib/anime.es.js";

export function toastRun ()
{

    let toastAnime = document.querySelector( ".toast_anime" );
    if ( toastAnime !== null )
    {

        anime( {
            targets: toastAnime,
            opacity:[ 0.5,'1', '1','1' ,'1','0.5','0' ],
            duration:2300,
            easing: 'easeInOutSine',
        } ) ;
    }
}






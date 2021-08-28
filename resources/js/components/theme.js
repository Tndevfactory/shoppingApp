import axios from "axios";

export function Theme(){
    let switcht = document.getElementById( "switcher" )
    
  let ThemeLabel= document.getElementById("theme_label")
  
    let themeColorLight= getComputedStyle(document.body).getPropertyValue('--theme-color-light');
    let themeBgcolorLight= getComputedStyle(document.body).getPropertyValue('--theme-bgcolor-light');
    let themeColorDark= getComputedStyle(document.body).getPropertyValue('--theme-color-dark');
    let themeBgcolorDark = getComputedStyle( document.body ).getPropertyValue( '--theme-bgcolor-dark' );
    
    window.localStorage.setItem( 'themeColorLight' , themeColorLight )
    window.localStorage.setItem(  'themeBgcolorLight', themeBgcolorLight)
    window.localStorage.setItem(  'themeColorDark' , themeColorDark )
    window.localStorage.setItem(  'themeBgcolorDark' , themeBgcolorDark)
    
   
    
    switcht.addEventListener( 'change', function ()
    {
        
        
        axios.get( 'http://127.0.0.1:8000/api/theme/' + switcht.checked ).then( data =>
        {
           // console.log( data.data.dark )
            window.localStorage.setItem( 'dark', data.data.dark )
            console.log( typeof(window.localStorage.getItem( 'dark' )))
            if (  window.localStorage.getItem( 'dark' ) === 'true')
            {
                console.log( 'inside dark' )
            document.documentElement.style.setProperty('--theme-color', window.localStorage.getItem('themeColorDark'));
            document.documentElement.style.setProperty('--theme-bgcolor', window.localStorage.getItem('themeBgcolorDark'));
                    ThemeLabel.innerText = 'Dark Theme'
            } else
            {
                console.log( 'inside light' )
            document.documentElement.style.setProperty('--theme-color', window.localStorage.getItem('themeColorLight'));
            document.documentElement.style.setProperty('--theme-bgcolor', window.localStorage.getItem('themeBgcolorLight'));
               
                   ThemeLabel.innerText='Light Theme'
        }
        }
            ).catch( error => console.log( error ) )
        
    
  } );
    
  
}
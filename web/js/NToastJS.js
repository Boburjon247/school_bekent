// NToastJSmadal 
const NToastJS = document.querySelector('.NToastJS');

export const ntoastJS_F = (error, text) => {
     NToastJS.classList.add('showAni');
     if (error == true) {
          NToastJS.insertAdjacentHTML('beforeend',
               `<div class="NToastJS_content errorTrue">
            <i class="fa fa-xmark exit errorTrue"></i>
            <div class="icon">
                <i class="fa fa-check"></i>
            </div>
            <div class="text">
                <p>
                    ${text}
                </p>
            </div>
            <div class="time">
                <p></p>
            </div>
        </div>`
          );
     }
     else if (error == false) {
          NToastJS.insertAdjacentHTML('beforeend',
               `<div class="NToastJS_content errorFalse">
                <i class="fa fa-xmark exit errorFalse"></i>
             <div class="icon">
                <i class="fa-solid fa-triangle-exclamation"></i>
             </div>
             <div class="text">
                 <p>
                   ${text}
                 </p>
             </div>
             <div class="time">
                   <p></p>
                </div>
       </div>`
          );
     }
     setInterval(() => {
          NToastJS.classList.remove('showAni');
          NToastJS.classList.add('hideAni');
     }, 5000);
}
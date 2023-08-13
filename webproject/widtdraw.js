document.getElementById('btn10').addEventListener('click',  function button2(){
   
    const witdthrawInputValue=document.getElementById('input2');

    const width=witdthrawInputValue.value;
    if(width<50){
        alert('sorry minimum widthdraw is $50  ');
    }
    else{

        const NewWidth=parseFloat(width);


        const WidthText= document.getElementById('divo3');
        const CurrentWIdthdraw=WidthText.innerText;
        const NewCurrentWidthdraw=parseFloat(CurrentWIdthdraw);
      
        const final=NewCurrentWidthdraw+NewWidth;
        WidthText.innerText=final;
      
      
      
        const balance=document.getElementById('divo2');
       
          const StringBalance=balance.innerText;
          const IntBalance=parseFloat(StringBalance);
          if( IntBalance <50){
              alert('Sorry You have Not Enough amount TO widthdraw (Minimum Widthdraw =$50)');
            }
           else{
        
          const lastwidthdraw=IntBalance-NewWidth;
          balance.innerText=lastwidthdraw;
           }
        
       
      
      
        witdthrawInputValue.value='';
    }
  
   
} )

document.getElementById('logOut').addEventListener('click',function aso(){
    window.location.href='bank.html';
})
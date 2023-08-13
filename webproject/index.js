document.getElementById('btn1').addEventListener('click',function button1(){
    const inputfield=document.getElementById('input1');
    const inputText=inputfield.value;
    
    const depositNew=parseFloat(inputText);
    

    const tagfour1=document.getElementById('divo1');
    const tagfourValueNibe=tagfour1.innerText;
    const depositPrevious=parseFloat(tagfourValueNibe);
   const add=depositPrevious+depositNew;
   tagfour1.innerText=add;





const balancefield=document.getElementById('divo2');
const stringBalance=balancefield.innerText;
const NowBalance=parseFloat(stringBalance);

const addBalance=NowBalance+depositNew;
balancefield.innerText=addBalance;







   inputfield.value='';

    
    


 
    
})
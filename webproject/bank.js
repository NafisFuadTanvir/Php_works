document.getElementById('submit').addEventListener('click', function newbank(){
    const emailUser=document.getElementById('userInput');
    const emailFeild=emailUser.value ;
    console.log(emailFeild);
    const passwordUser=document.getElementById('userPassword');
    const passwordfeild=passwordUser.value;
 
    if(emailFeild=='nafisf026@gmail.com'&& passwordfeild=='1234'){
        window.location.href='banking.html';
    }
    else {
       alert('sorry ,your email or password is not correct ...please give valid information');
    }
})


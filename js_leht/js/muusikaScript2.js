function tervist(){
    //tekstkast-input type = text id=nimita
    let name=document.getElementById("nimi");
    let answer=document.getElementById("vastus");

    answer.innerHTML="Sinu nimi on: " +name.value;
    answer="Sinu nimi on: " +name.value+", ";
    return answer;
}

function radioValik(){
    let answer_2=document.getElementById("vastus_2");
    let Jah=document.getElementById("Jah");
    let Ei=document.getElementById("Ei");
    let pilt=document.getElementById("pilt");

    if (Jah.checked){
        var bool_answer=Jah.value;
        answer_2.style.color="green";
        pilt.src="anket_pildid/monkey.jpg"
    }
    else if(Ei.checked){
        var bool_answer=Ei.value;
        answer_2.style.color="Red";
        pilt.src="anket_pildid/dog.jpg"
    }
    answer_2.innerHTML="Sa "+ bool_answer + " kasutada";
    answer_2="Sa "+ bool_answer + " kasutada  telefon kuulamise eest, ";
    return answer_2;

}

function checkBoxValik(){
    let answer_3=document.getElementById("vastus_3");
    let Morgen=document.getElementById("Morgen");
    let Kizaru=document.getElementById("Kizaru");
    let BigBabyTape=document.getElementById("Big_baby_tape");

    var muusikaja="";
    if(Morgen.checked){
        muusikaja+=Morgen.value+", ";
    }
    if(Kizaru.checked){
        muusikaja+=Kizaru.value+", ";
    }
    if(BigBabyTape.checked){
        muusikaja+=BigBabyTape.value+", ";
    }


    answer_3.innerHTML="Sa valitsid: "+muusikaja;
    answer_3="Sa valitsid need muusikad: "+muusikaja;
    return answer_3;
}

function selectOptionValik(event){
    let answer_5=document.getElementById("vastus_5");
    if (event.target.value==="Lasnamäe"){
        answer_5.innerHTML="Sinu linnapiirkond on Lasnamäe";
    }

}

function selectOptionValik2(){
    let answer_5=document.getElementById("vastus_5");
    let elu=document.getElementById("elu");
    let tekst="Sinu linnapiirkond on ";
    let distanss=document.getElementById("distanss");
    let varv=document.getElementById("varv");
    if (elu.selectedIndex!==0){
        tekst+=elu.value + " Distanss on "+distanss.value + " km";
    }
    else  {
        answer_5.innerHTML="Palun vali elukoht";
    }
    answer_5.innerHTML=tekst;
    answer_5.style.color=varv.value;
}












function koikkokku(){
    let answer_4=document.getElementById("vastus_4");

    answer_4.innerHTML=tervist()+radioValik()+checkBoxValik();

}

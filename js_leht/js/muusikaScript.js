

function kus_1(){
    let answer_1=document.getElementById("nvastus_1");
    let roc=document.getElementById("rock_n_roll");
    let pop=document.getElementById("popmuusika");
    let jaz=document.getElementById("jazz");
    let klass=document.getElementById("klassikaline");
    let fonk=document.getElementById("fonk");
    let rap=document.getElementById("rap");

    var zanr="";

    if(roc.checked){
        zanr+=roc.value+", ";
    }
    if(pop.checked){
        zanr+=pop.value+", ";
    }
    if(jaz.checked){
        zanr+=jaz.value+", ";
    }
    if(klass.checked){
        zanr+=klass.value+", ";
    }
    if(fonk.checked){
        zanr+=fonk.value+", ";
    }
    if(rap.checked){
        zanr+=rap.value+", ";
    }
    answer_1.innerHTML="Sa valitsid: "+zanr;
    answer_1="Sa valitsid: "+zanr;
    return answer_1;

}

function kus_2(){
    let answer_2=document.getElementById("nvastus_2");
    let opinion=document.getElementById("arvamus");

    if (opinion.selectedIndex!==0){
        answer_2.innerHTML="Sa mõtled, et "+opinion.value;
        answer_2=" Sa mõtled, et "+opinion.value;
        return answer_2
    }
    else  {
        answer_2.innerHTML="Palun vali";

    }


}
function kus_3(){
    let answer_3=document.getElementById("nvastus_3");
    let number=document.getElementById("mittu_tundi");

    answer_3.innerHTML="Sa kuulad "+number.value+" tundi";
    answer_3=" Sa kuulad "+number.value+" tundi";
    return answer_3;


}

function kus_4(){
    let answer_4=document.getElementById("nvastus_4");
    let yes=document.getElementById("Jah");
    let no=document.getElementById("Ei");

    if (yes.checked){
        answer_4.innerHTML="Sa "+yes.value+" kuulata muusikat";
        answer_4=" Sa "+yes.value+" kuulata muusikat";
        return answer_4;
    }
    if (no.checked){
        answer_4.innerHTML="Sa "+no.value+" kuulata muusikat";
        answer_4="Sa "+no.value+" kuulata muusikat";
        return answer_4;
    }

}
function kus_5(){
    let answer_5=document.getElementById("nvastus_5");
    let yes=document.getElementById("Jah2");
    let no=document.getElementById("Ei2");

    if (yes.checked){
        answer_5.innerHTML="Sa "+yes.value+" raadiot";
        answer_5=" Sa "+yes.value+" raadiot";
        return answer_5;
    }
    if (no.checked){
        answer_5.innerHTML="Sa "+no.value+" raadiot";
        answer_5=" Sa "+no.value+" raadiot";
        return answer_5;
    }
}

function kus_6(){

    let nimetud=document.getElementById("nimeta");
    let answer_6=document.getElementById("nvastus_6");

    answer_6.innerHTML="Oskate nimeta: " +nimetud.value;
    answer_6=" Oskate nimeta: " +nimetud.value;
    return answer_6;

}

function kus_7(){
    let answer_7=document.getElementById("nvastus_7");
    let morgen=document.getElementById("Morgen");
    let kizaru=document.getElementById("Kizaru");
    let bigbaby=document.getElementById("Big_baby_tape");


    var muusikaja="";

    if(morgen.checked){
        muusikaja+=morgen.value+", ";
    }
    if(kizaru.checked){
        muusikaja+=kizaru.value+", ";
    }
    if(bigbaby.checked){
        muusikaja+=bigbaby.value+", ";
    }
    answer_7.innerHTML="Sa valitsid: "+muusikaja;
    answer_7=" Sa valitsid: "+muusikaja;
    return answer_7;

}

function kus_8() {
    let laul = document.getElementById("lemmiklaul").value;
    let answer_8 = document.getElementById("nvastus_8");
    let linkstring = '<a href="' + laul + '">' + laul + '</a>';

    answer_8.innerHTML = linkstring;


}

function kus_9(){

    let email=document.getElementById("email");
    let answer_9=document.getElementById("nvastus_9");

    answer_9.innerHTML="Teie email: " +email.value;
    answer_9=" Teie email: " +email.value;
    return answer_9;

}

function kus_10(){
    let answer_10=document.getElementById("nvastus_10");
    let number=document.getElementById("kord")

    answer_10.innerHTML="Hind: "+number.value;
    answer_10=" Teie kõrva muusika hind: "+number.value;
    return answer_10;
}

function koikkokku2(){
    let answer_11=document.getElementById("nvastus_11");

    answer_11.innerHTML=kus_1()+kus_2()+kus_3()+kus_4()+kus_5()+kus_6()+kus_7()+kus_8()+kus_9()+kus_10();

}
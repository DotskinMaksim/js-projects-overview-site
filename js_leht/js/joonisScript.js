function pea()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="beige";
    k1.fillRect(69,13, 40,40);

    k1.strokeRect(69,13, 40,40);
}

function  juuksed()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="orange";
    k1.fillRect(69,13,40,10);
    k1.fillRect(69,23,5,10);
    k1.fillRect(104,23,5,10);
    k1.fillRect(101,53,8,14);

}

function silmad()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="white";
    //vasak silm
    k1.fillRect(75,33,5,5);
    //parem silm
    k1.fillRect(98,33,5,5);

    k1.fillStyle="green";
    //vasak silm
    k1.fillRect(80,33,5,5);
    //parem silm
    k1.fillRect(93,33,5,5);

}

function suu()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="pink";
    k1.fillRect(85,43,10,5);
}
function voo()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="black";
    k1.fillRect(69,103,40,5);
}


function keha()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="lightgreen";
    k1.fillRect(69, 53, 40, 60);
    k1.strokeRect(69, 53, 40, 60);

    k1.fillStyle="beige";
    k1.fillRect(80, 53, 15, 10);
    k1.strokeRect(80, 53, 15, 10);
}

function kaed()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="lightgreen";


    k1.fillRect(49, 53, 20, 20);
    k1.strokeRect(49, 53, 20, 20);

    k1.fillRect(109, 53, 20, 20);
    k1.strokeRect(109, 53, 20, 20);
}

function randmed()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="beige";


    k1.fillRect(49, 73, 20, 40);
    k1.strokeRect(49, 73, 20, 40);


    k1.fillRect(109, 73, 20, 40);
    k1.strokeRect(109, 73, 20, 40);
}

function jalad()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="brown";
    k1.strokeStyle="black";


    k1.fillRect(69, 113,20,50);
    k1.strokeRect(69, 113,20,50);

    k1.fillRect(89, 113,20,50);
    k1.strokeRect(89, 113,20,50);


}
function kingad()
{
    let k1=document.getElementById("kanva1").getContext("2d");

    k1.fillStyle="gray";
    k1.strokeStyle="black";


    k1.fillRect(69, 140,20,15);
    k1.strokeRect(69, 140,20,15);

    k1.fillRect(89, 140,20,15);
    k1.strokeRect(89, 140,20,15);




}



function joonista()
{
    pea();
    silmad();
    suu();
    keha();
    juuksed();
    kaed();
    randmed();
    jalad();
    kingad();
    voo();
}

function tuhista()
{
    let k=document.getElementById("kanva1").getContext("2d");

    k.clearRect(0, 0, 400, 400);
}
// setup canvas

var canvas = document.querySelector('canvas');
var ctx = canvas.getContext('2d');

var width = canvas.width = 500;
var height = canvas.height = 545;
var img = document.getElementById("hongo");
ctx.fillStyle = 'rgba(0,0,0,0.25)';
ctx.drawImage(img,1,1);

function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
        x: evt.clientX - rect.left,
        y: evt.clientY - rect.top
    };
}

canvas.addEventListener('mousedown', 
                        function(evt) 
                        {
    var mousePos = getMousePos(canvas, evt);
    //alert('Mouse position: ' + mousePos.x + ',' + mousePos.y);

    if(mousePos.x >= clic[count+1][0] && mousePos.x <= clic[count+1][1] && mousePos.y >= clic[count+1][2] && mousePos.y <= clic[count+1][3])
    {
        count++;
        //alert("true");
    }
}, false);

function verificarSerie()
{
    var input = [document.getElementById("input1").value,
                 document.getElementById("input2").value,
                 document.getElementById("input3").value,
                 document.getElementById("input4").value,
                 document.getElementById("input5").value,
                 document.getElementById("input6").value,
                 document.getElementById("input7").value,
                 document.getElementById("input8").value,
                 document.getElementById("input9").value];

    var resp = [12,16,28,32,44,48,60,64,72];
    var result = 1;

    for(var i = 0; i < resp.length; i++)
    {
        if(input[i] != resp[i])
        {
            result = 0;
        }
    }
    //alert(result);

    var label = document.getElementById("mensaje");

    if(result)
    {
        label.innerHTML = "Bien Hecho! :)"
    }
    else
    {
        label.innerHTML = "Vuelve a Intentarlo ;("
    }
}

var button = document.getElementById("revisar");
button.addEventListener("click",verificarSerie);
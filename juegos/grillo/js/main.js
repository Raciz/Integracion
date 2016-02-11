// setup canvas

var canvas = document.querySelector('canvas');
var ctx = canvas.getContext('2d');

var width = canvas.width = 450;
var height = canvas.height = 250;
var img = document.getElementById("grillo");
var count = -1;

var cordenadas = [[56,81],
                  [298,110],
                  [368,141],
                  [332,158],
                  [352,177],
                  [308,187],
                  [314,209],
                  [342,223],
                  [292,225],
                  [281,190],
                  [104,166],
                  [81,176],
                  [38,234],
                  [60,176],
                  [88,153],
                  [76,140],
                  [54,152],
                  [27,141],
                  [25,111],
                  [47,80]];

var clic = [[48,66,69,90],
            [290,307,99,124],
            [359,378,134,154],
            [325,341,146,168],
            [343,361,168,186],
            [300,320,178,195],
            [305,321,200,218],
            [334,353,215,231],
            [285,299,219,230],
            [275,289,182,200],
            [98,115,156,174],
            [74,91,166,186],
            [32,47,225,244],
            [52,69,166,186],
            [83,97,143,161],
            [69,84,129,149],
            [45,62,145,160],
            [21,35,132,149],
            [17,32,110,122],
            [40,53,74,91]];

function getMousePos(canvas, evt) 
{
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


// define loop that keeps drawing the scene constantly
function loop() 
{
    ctx.fillStyle = 'rgba(0,0,0,0.25)';
    ctx.drawImage(img,1,1);

    ctx.moveTo(55,80);
    ctx.lineTo(46,81);
    ctx.stroke();

    var i;
    for(i = 0; i < count; i++)
    {
        ctx.moveTo(cordenadas[i][0],cordenadas[i][1]);
        ctx.lineTo(cordenadas[i+1][0],cordenadas[i+1][1]);
        //ctx.strokeStyle = "#FF0000";
        ctx.stroke();
    }

    requestAnimationFrame(loop);
}

loop();

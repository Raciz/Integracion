// setup canvas

var canvas = document.querySelector('canvas');
var ctx = canvas.getContext('2d');

var width = canvas.width = 450;
var height = canvas.height = 450;
var img = document.getElementById("star");
var count = -1;

var cordenadas = [[202,13],[258,127],[398,159],[290,211],[333,313],[202,249],[54,320],[112,202],[24,159],[138,130]];
var clic = [[186,205,3,23],[243,258,118,135],[385,400,152,168],[227,291,200,218],[318,336,303,321],[186,206,238,259],[38,57,309,322],[95,114,193,214],[5,27,149,160],[123,140,120,138]];

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


// define loop that keeps drawing the scene constantly
function loop() 
{
    ctx.fillStyle = 'rgba(0,0,0,0.25)';
    ctx.drawImage(img,1,1);

    var i;
    for(i = 0; i < count; i++)
    {
        ctx.moveTo(cordenadas[i][0]-8,cordenadas[i][1]);
        ctx.lineTo(cordenadas[i+1][0]-8,cordenadas[i+1][1]);
        ctx.stroke();
    }

    requestAnimationFrame(loop);
}

loop();

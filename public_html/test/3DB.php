<html>
<head>
</head>
<body>

<script src="three.min.js"></script>
<script src="TrackballControls.js"></script>



<script language="javascript">
var lines, rendererCanvas,/* rendererWebGL,*/ scene, camera, controlsC/*, controlsW*/;



init();
animate();

function init() {
    var geometry, material;
    
    document.body.style.cssText = ' font: 600 12pt monospace; margin: 0; overflow: hidden; ';
    
    var info = document.body.appendChild(document.createElement('div'));
    info.style.cssText = 'left: 0; margin: auto; position: absolute; right:0; width: 800px; ';
    
    /*info.innerHTML = info.txt =
    '<h1 style=margin:0; align="center" >REMOD NEURON</h1>'*//* +
    'Line Width <input id=inpWidth type=range min=1 max=20 step=1 value=5 ></input> ~ ' +
    'Use pointing device to pan, zoom and rotate'*/;
    
    /*inpWidth.title = "Slide to widen lines. Do you notice any differences between the two panels?";
    inpWidth.onchange = function () {
        drawIt(inpWidth.value);
    };*/
    
    rendererCanvas = new THREE.CanvasRenderer();
    rendererCanvas.setClearColor(0xffffff);
    rendererCanvas.setSize(/*0.45 * window.innerWidth*/900, 500);
    document.body.appendChild(rendererCanvas.domElement);
    rendererCanvas.domElement.style.cssText = 'border: 1px solid #000000; right: 2%; position: absolute; top: 68px; width: 45%;';
    
    /*rendererWebGL = new THREE.WebGLRenderer({
                                            alpha: 1,
                                            antialias: true,
                                            clearColor: 0xffffff
                                            });
    rendererWebGL.setSize(0.45 * window.innerWidth, window.innerHeight - 100);
    document.body.appendChild(rendererWebGL.domElement);
    rendererWebGL.domElement.style.cssText = 'border: 1px solid #000000; right: 2%; position: absolute; top: 80px; width: 45%;';*/
    
    scene = new THREE.Scene();
    
    camera = new THREE.PerspectiveCamera(40, 0.8 * window.innerWidth / (window.innerHeight - 100), 1, 1000);
    camera.position.set(188, 188, 178);
    controlsC = new THREE.TrackballControls(camera, rendererCanvas.domElement);
    /*controlsW = new THREE.TrackballControls(camera, rendererWebGL.domElement);*/
    
    drawIt(5);
    
    window.addEventListener('resize', onWindowResize, false);
}

function drawIt(width) {
    var material, geometry, line;
    if (lines) {
        scene.remove(lines)
    }
    lines = new THREE.Object3D();
    scene.add(lines)
    
    //php read file
    <?php
    $txt_file    = file_get_contents('neuron.txt');
    $rows        = explode("\n", $txt_file);
    $flag = 0;
    echo "var line1 = [";
    foreach($rows as $row => $data)
    {
        if($flag==0){
            $flag=1;
        }else{
            echo ",";
        }
        //get row data
        $row_data = explode(' ', $data);
        
        $info[$row]['x1']= $row_data[0];
        $info[$row]['y1']= $row_data[1];
        $info[$row]['z1']= $row_data[2];
        $info[$row]['x2']= $row_data[3];
        
        $info[$row]['y2']= $row_data[4];
        
        $info[$row]['z2']= $row_data[5];
        
        $info[$row]['thick']= $row_data[6];
        
        echo "v(";
        echo $info[$row]['x1'];
        echo ", ";
        echo $info[$row]['y1'];
        echo ", ";
        echo $info[$row]['z1'];
        echo ")";
        
    }
    echo "]; ";
    
    $rows        = explode("\n", $txt_file);
    $flag = 0;
    echo "var line2 = [";
    foreach($rows as $row => $data)
    {
        if($flag==0){
            $flag=1;
        }else{
            echo ",";
        }
        //get row data
        $row_data = explode(' ', $data);
        
        $info[$row]['x1']= $row_data[0];
        $info[$row]['y1']= $row_data[1];
        $info[$row]['z1']= $row_data[2];
        $info[$row]['x2']= $row_data[3];
        
        $info[$row]['y2']= $row_data[4];
        
        $info[$row]['z2']= $row_data[5];
        
        $info[$row]['thick']= $row_data[6];
        
        echo "v(";
        echo $info[$row]['x2'];
        echo ", ";
        echo $info[$row]['y2'];
        echo ", ";
        echo $info[$row]['z2'];
        echo ")";
        
    }
    echo "]; ";
    $rows        = explode("\n", $txt_file);
    $flag = 0;
    echo "var thick = [";
    foreach($rows as $row => $data)
    {
        if($flag==0){
            $flag=1;
        }else{
            echo ",";
        }
        //get row data
        $row_data = explode(' ', $data);
        
        $info[$row]['x1']= $row_data[0];
        $info[$row]['y1']= $row_data[1];
        $info[$row]['z1']= $row_data[2];
        $info[$row]['x2']= $row_data[3];
        
        $info[$row]['y2']= $row_data[4];
        
        $info[$row]['z2']= $row_data[5];
        
        $info[$row]['thick']= $row_data[6];
        echo $info[$row]['thick'];
    }
    echo "];";
    ?>
    
    
    /*var line1 = [v(-3, 3, 0),v(-3, 3, 0)];*/
   // var line2 = [v(0, -3, -3),v(3, 3, 0)];
    
    /*var material = new THREE.LineBasicMaterial({
                                               color: 0x5858FA,
                                               linewidth: width
                                               });*/
    
    for (var i = 0; i < line1.length; i++) {
        var material = new THREE.LineBasicMaterial({
                                                   color: 0x5858FA,
                                                   linewidth: thick[i]
                                                   });

            geometry = new THREE.Geometry();
            geometry.vertices = [line1[i], line2[i]];
            line = new THREE.Line(geometry, material);
            lines.add(line);
        
    }
}

function onWindowResize() {
    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;
    
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    
    rendererCanvas.setSize(0.45 * window.innerWidth, 300);
    /*rendererWebGL.setSize(0.45 * window.innerWidth, window.innerHeight - 100);*/
}

function animate() {
    requestAnimationFrame(animate);
    controlsC.update();
    /*controlsW.update();*/
    rendererCanvas.render(scene, camera);
    /*rendererWebGL.render(scene, camera);*/
}

function v(x, y, z) {
    return new THREE.Vector3(x, y, z);
}
</script>


<script language="javascript">
function Select1(value){
    document.getElementById("Select2").style.visibility="visible";
    document.getElementById("Category1").value=value;
}

function Select2(){
    
}

function MyFunc(){
    
    var params="";
    for(i=0; i<document.finalform.elements.length; i++)
    {
        var fieldName = document.finalform.elements[i].name;
        var fieldValue = document.finalform.elements[i].value;
        alert(fieldName);
        alert(fieldValue);
        // use the fields, put them in a array, etc.
        
        // or, add them to a key-value pair strings,
        // as in regular POST
        
        //params += fieldName + '=' + fieldValue + '&';
    }}
</script>
</body>
</html>

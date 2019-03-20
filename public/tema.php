<!DOCTYPE html>
<html lang="en">
<head>
    <title>three.js webgl - orbit controls</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <style>
        body {
            color: #000;
            font-family:Monospace;
            font-size:13px;
            text-align:center;
            font-weight: bold;

            background-color: #fff;
            margin: 0px;
            overflow: hidden;
        }

    </style>
</head>

<body>

<script src="js/three-js/build/three.js"></script>
<script src="js/three-js/examples/js/controls/OrbitControls.js"></script>
<script src="js/three-js/examples/js/WebGL.js"></script>

<script>

    if ( WEBGL.isWebGLAvailable() === false ) {
        document.body.appendChild( WEBGL.getWebGLErrorMessage() );
    }

    var camera, controls, scene, renderer;

    init();
    animate();

    function init() {
        // AICI !
        var geometry= new THREE.BoxGeometry(1,1,1);
        var material= new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: false});
        var cube= new THREE.Mesh(geometry,material);
        scene.add(cube);
        camera.position.z=3;

        window.addEventListener( 'resize', onWindowResize, false );
    }

    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize( window.innerWidth, window.innerHeight );
    }

    function animate() {
        requestAnimationFrame( animate );
        controls.update(); // only required if controls.enableDamping = true, or if controls.autoRotate = true
        render();
    }

    function render() {
        renderer.render( scene, camera );
    }

</script>

</body>
</html>
